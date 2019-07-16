<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseQuestionnaire;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $di = CourseQuestionnaire::where('study_program','=','di')->orderBy('score', 'desc')->take(3)->get();
        $dkv = CourseQuestionnaire::where('study_program','=','dkv')->orderBy('score', 'desc')->take(3)->get();
        $dkf = CourseQuestionnaire::where('study_program','=','dkf')->orderBy('score', 'desc')->take(3)->get();
        $tpb = CourseQuestionnaire::where('study_program','=','tpb')->orderBy('score', 'desc')->take(3)->get();
        $umum = CourseQuestionnaire::where('study_program','=','umum')->orderBy('score', 'desc')->take(3)->get();

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
