<?php

namespace App\Http\Controllers;

use App\CourseQuestionnaire;
use App\User;
use App\StudentCourse;
use App\Events\QuestionerAnswered;
use Illuminate\Http\Request;

class CoursesQuestionnaireController extends Controller
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
        $current = StudentCourse::where('id','=',$request->id)->first();

        $questionnaire = StudentCourse::where('user_id','=',$user->id)->get();
        return view('pengisian',[
            'user' => $user,
            'pengisians' => $questionnaire,
            'pengisian_selanjutnya' => $current,
        ]);
        
    }

    public function next()
    {
        $selanjutnya = StudentCourse::where('user_id','=',\Auth::user()->id)->
                                    where('questionnaire_status','=','0')->
                                    first();
        return redirect('questionnaire/'.$selanjutnya->id);
    }

    public function not_active()
    {
        return view('not_active');
    }

    public function answered_all()
    {
        $user = User::find(\Auth::user()->id);
        $user->questionnaire_status = 1;
        $user->save();
        return view('answered_all');
    }

    public function store(Request $request)
    {
        $pengisian = StudentCourse::find($request->segment(2));
        $pengisian->fill($request->except('form_questioner'))->
                    fill(['questionnaire_status'=> 1])->
                    save();

        event(new QuestionerAnswered($pengisian));
        
        return redirect('questionnaire/next');
    }

}