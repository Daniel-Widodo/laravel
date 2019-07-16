@extends('layouts.app')

@section('title', 'Hasil Questioner')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
          <h1>Hasil Questioner</h1>
          <hr>
          <div class="row text-center justify-content-center">
              <div class="col-md-3 border border-primary">
                  <h1 class="display-4">DI</h1>
                  @foreach ($di as $mkDi)
                        {{$mkDi->course_name}} ({{$mkDi->score}})<br>
                  @endforeach
                  <h1 class="display-3 text-warning" >4.4<i class="material-icons" style="font-size:56px">star</i></h1>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 border border-warning">
                  <h1 class="display-4 ">DKV-DG</h1>
                  @foreach ($dkv as $mkDkv)
                        {{$mkDkv->course_name}} ({{$mkDkv->score}})<br>
                  @endforeach
                  <h1 class="display-3 text-warning" >3.9<i class="material-icons" style="font-size:56px">star</i></h1>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 border border-danger">
                  <h1 class="display-4">DKV-FC</h1>
                  @foreach ($dkf as $mkDkf)
                        {{$mkDkf->course_name}} ({{$mkDkf->score}})<br>
                  @endforeach
                  <h1 class="display-3 text-warning" >4.7<i class="material-icons" style="font-size:56px">star</i></h1>
              </div>
          </div>
          <br>
          <br>
          <div class="row text-center justify-content-center">
              <div class="col-md-3 border border-success">
                  <h1 class="display-4">TPB</h1>
                  @foreach ($tpb as $mkTpb)
                        {{$mkTpb->course_name}} ({{$mkTpb->score}})<br>
                  @endforeach
                  <h1 class="display-3 text-warning" >4.1<i class="material-icons" style="font-size:56px">star</i></h1>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 border border-dark">
                  <h1 class="display-4 ">UMUM</h1>
                  @foreach ($umum as $mkUmum)
                        {{$mkUmum->course_name}} ({{$mkUmum->score}})<br>
                  @endforeach
                  <h1 class="display-3 text-warning" >4.2<i class="material-icons" style="font-size:56px">star</i></h1>
              </div>
          </div>

      </div>
    <div>
</div>
@endsection
