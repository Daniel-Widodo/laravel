<?php

namespace App\Http\Controllers;

use App\CourseQuestionnaire;
use App\User;
use App\StudentCourse;
use App\Events\QuestionerAnswered;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\StoreCourseQuestionnaire;

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
        return redirect('questionnaire/'.$this->next_questionnaries() );
    }

    public function show(Request $request)
    {
        $user = \Auth::user();
        $current = StudentCourse::where('id','=',$request->id)->first();

        $questionnaires = StudentCourse::where('user_id','=',$user->id)->get();
        return view('pengisian',[
            'user' => $user,
            'questionnaires' => $questionnaires,
            'current_questionnaire' => $current,
        ]);
    }


    public function not_active()
    {
        return view('not_active');
    }


    public function answered_all()
    {
        if(!$this->next_questionnaries())
            return view('answered_all');
        return redirect('questionnaire/'. $this->next_questionnaries())->
                    with('status', 'Halaman yang anda maksud tidak tersedia!');
    }


    public function store(StoreCourseQuestionnaire $request)
    {
        $validated = $request->validated();

        $pengisian = StudentCourse::find($request->segment(2));
        $pengisian->fill($request->except('form_questioner'))->
                    fill(['questionnaire_status'=> 1])->
                    save();

        event(new QuestionerAnswered($pengisian));

        return redirect('questionnaire/'.$this->next_questionnaries())->
                with('status', 'Kuesioner untuk matakuliah: '. $pengisian->course_name .'. telah tersimpan!');
    }


    private function next_questionnaries(){
        return resolve('GetNextQuestionnaire')->from_id(\Auth::user()->id);
    }

}