@extends('layouts.app')

@section('title', 'Questioner')

@section('content')
<div class="container">
    <h1>Pengisian : {{$pengisian_selanjutnya->matakuliah}}</h1>
    <hr>
    <div class="row">
        <div class="col-md-3">
          <h3>Matakuliah</h3>
          @foreach ($pengisians as $pengisian)
              @if ($pengisian->status == '1')
                  <a href="/" class="btn btn-secondary disabled btn-block">{{$pengisian->matakuliah}} <i class="material-icons" style="font-size: 16px">check</i></a>
              @endif
              @if ($pengisian->status == '0')
                  <a href="{{URL::route('pengisian')}}/{{$pengisian->id}}" class="btn btn-success btn-block">{{$pengisian->matakuliah}}</a>
              @endif
          @endforeach
        </div>

        <div class="col-md-9">
          @if ($pengisian_selanjutnya)
            @include('sub.pertanyaanQuestioner')
          @else
            <br>
            <h1 class="display-4" align="center">Terimakasih sudah mengisi Questioner</h1>
          @endif
        </div>

    </div>

</div>
@endsection
