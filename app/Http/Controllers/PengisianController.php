<?php

namespace App\Http\Controllers;

use App\Pengisian;
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
        $selanjutnya = Pengisian::where('user_id','=',\Auth::user()->id)->where('status','=','0')->first();
        return redirect('pengisian/'.$selanjutnya->id);
    }

    public function not_active()
    {
        return view('not_active');
    }

    public function answered_all()
    {
        return view('answered_all');
    }

    public function store(Request $request)
    {
        //
        $pengisian = Pengisian::find($request->segment(2));
        $pengisian->fill([
            'q1' => 5,
            'q2' => $request->q2,
            'q3' => $request->q3,
            'q4' => $request->q4,
            'q5' => $request->q5,
            'q6' => $request->q6,
            'q7' => $request->q7,
            'q8' => $request->q8,
            'q9' => $request->q9,
            'q10' => $request->q10,
            'status' => 1,
        ]);
        $pengisian->save();
        
        return redirect('pengisian/next');
    }

    /*
    public function index()
    {
        $user = \Auth::user();

        $pengisian_selanjutnya = Pengisian::where('user_id','=',$user->id)->where('status','=','0')->first();
        $pengisians = Pengisian::where('user_id','=',$user->id)->get();
        return view('pengisian',[
            'user' => $user,
            'pengisians' => $pengisians,
            'pengisian_selanjutnya' => $pengisian_selanjutnya,
        ]);
    }


    
    public function store(Request $request)
    {
        //
        $pengisian = Pengisian::find($request->segment(2));
        $pengisian->fill([
            'q1' => 5,
            'q2' => $request->q2,
            'q3' => $request->q3,
            'q4' => $request->q4,
            'q5' => $request->q5,
            'q6' => $request->q6,
            'q7' => $request->q7,
            'q8' => $request->q8,
            'q9' => $request->q9,
            'q10' => $request->q10,
            'status' => 1,
        ]);
        $pengisian->save();
        
        return $this->check();
    }

    public function check(){

        $user = \Auth::user();

        $pengisian_selanjutnya = Pengisian::where('user_id','=',$user->id)->where('status','=','0')->first();
        
        if ($pengisian_selanjutnya)    
            return redirect('pengisian/' . $pengisian_selanjutnya->id) ;
        else
            return redirect()->route('pengisian');
    }
    */

}