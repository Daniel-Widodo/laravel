@extends('layouts.app')

@section('title', 'Questioner')

@section('content')
<div class="container">
    <h1>Pengisian : {{$current_questionnaire->course_name}}</h1>
    <hr>
    <div class="row">
        <div class="col-md-3">
          <h3>Matakuliah</h3>
          @foreach ($questionnaires as $questionnaire)
              @if ($questionnaire->questionnaire_status == '1')
                  <a href="/" class="btn btn-secondary disabled btn-block">{{$questionnaire->course_name}} <i class="material-icons" style="font-size: 16px">check</i></a>
              @endif
              @if ($questionnaire->questionnaire_status == '0')
                  <a href="{{URL::route('questionnaire')}}/{{$questionnaire->id}}" class="btn btn-success btn-block">{{$questionnaire->course_name}}</a>
              @endif
          @endforeach
        </div>

        <div class="col-md-9">
          @if ($current_questionnaire)
            @include('sub.pertanyaanQuestioner')
          @else
            <br>
            <h1 class="display-4" align="center">Terimakasih sudah mengisi Questioner</h1>
          @endif
        </div>

    </div>

</div>
@endsection
