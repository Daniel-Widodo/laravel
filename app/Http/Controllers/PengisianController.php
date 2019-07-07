<?php

namespace App\Http\Controllers;

use App\Matakuliah;
use App\Pengisian;
use Illuminate\Http\Request;

class PengisianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengisian_selanjutnya = Pengisian::where('user_id','=','1')->where('status','=','0')->first();
        
        (!$pengisian_selanjutnya) ? redirect()->route('pengisian_selanjutnya', ['pengisian_id' => $pengisian_selanjutnya->id]) :  redirect()->route('pengisian');

        $user = \Auth::user();
        $pengisians = Pengisian::where('user_id','=','1')->get();
        return view('pengisian',[
            'user' => $user,
            'pengisians' => $pengisians,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //return $pengisian;
        

        $pengisian_selanjutnya = Pengisian::where('user_id','=','1')->where('status','=','0')->first();
        return ($pengisian_selanjutnya) ? redirect()->route('pengisian_selanjutnya', ['pengisian_id' => $pengisian_selanjutnya->id]) :  redirect()->route('pengisian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matakuliah $matakuliah)
    {
        //
    }
}
