<?php

namespace App\Http\Controllers;

use App\Pengisian;
use App\User;
use App\Hasil;
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
        $pengisian->fill([
            'q1' => $request->q1,
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

        $this->update_cumulative($pengisian);
        
        return redirect('pengisian/next');
    }

    private function update_cumulative($pengisian)
    {
        $hasil = Hasil::where('matakuliah_id','=',$pengisian->matakuliah_id)->first();
        $hasil->fill([
            'q1' => $pengisian->q1 + $hasil->q1,
            'q2' => $pengisian->q2 + $hasil->q2,
            'q3' => $pengisian->q3 + $hasil->q3,
            'q4' => $pengisian->q4 + $hasil->q4,
            'q5' => $pengisian->q5 + $hasil->q5,
            'q6' => $pengisian->q6 + $hasil->q6,
            'q7' => $pengisian->q7 + $hasil->q7,
            'q8' => $pengisian->q8 + $hasil->q8,
            'q9' => $pengisian->q9 + $hasil->q9,
            'q10' => $pengisian->q10 + $hasil->q10,
            'qcount' => $hasil->qcount + 1,
        ]);
        $hasil->qavg = (
            $hasil->q1 +
            $hasil->q2 +
            $hasil->q3 +
            $hasil->q4 +
            $hasil->q5 +
            $hasil->q6 +
            $hasil->q7 +
            $hasil->q8 +
            $hasil->q9 +
            $hasil->q10) / $hasil->qcount / 10;
        $hasil->save();
    }

}