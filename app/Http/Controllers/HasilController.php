<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hasil;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $di = Hasil::where('jurusan','=','1')->take(3)->get();
        $dkv = Hasil::where('jurusan','=','2')->take(3)->get();
        $dkf = Hasil::where('jurusan','=','3')->take(3)->get();
        $tpb = Hasil::where('jurusan','=','4')->take(3)->get();
        $umum = Hasil::where('jurusan','=','5')->take(3)->get();

        //return $di;
        return view('hasil',[
            'di'=> $di,
            'dkv'=>$dkv,
            'dkf'=> $dkf,
            'tpb'=> $tpb,
            'umum' => $umum,
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
