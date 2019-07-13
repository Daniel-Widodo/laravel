<?php

namespace App\Http\Controllers;

use App\Pengisian;
use App\User;
use App\Hasil;
use App\Events\QuestionerAnswered;
use Illuminate\Http\Request;

class PengisianController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check_active')->except('not_active');
        $this->middleware('owened_by',['only' => ['show', 'store', 'edit', 'delete']]);
        $this->middleware('answered_all',['except' => ['answered_all', 'not_active']]);
    }


    public function index()
    {
        return "anda mahasiswa aktif";
    }

    public function show(Request $request)
    {
        $user = \Auth::user();
        $current = Pengisian::where('id','=',$request->id)->first();

        $pengisians = Pengisian::where('user_id','=',$user->id)->get();
        return view('pengisian',[
            'user' => $user,
            'pengisians' => $pengisians,
            'pengisian_selanjutnya' => $current,
        ]);
        
    }

    public function next()
    {
        $selanjutnya = Pengisian::where('user_id','=',\Auth::user()->id)->
                                    where('status','=','0')->
                                    first();
        return redirect('pengisian/'.$selanjutnya->id);
    }

    public function not_active()
    {
        return view('not_active');
    }

    public function answered_all()
    {
        $user = User::find(\Auth::user()->id);
        $user->pengerjaan = 1;
        $user->save();
        return view('answered_all');
    }

    public function store(Request $request)
    {
        $pengisian = Pengisian::find($request->segment(2));
        $pengisian->fill($request->except('form_questioner'))->
                    fill(['status'=> 1])->
                    save();

        event(new QuestionerAnswered($pengisian));
        
        return redirect('pengisian/next');
    }

}