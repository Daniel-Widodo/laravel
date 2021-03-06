@extends('layouts.app')

@section('title', 'Pengisi Questioner')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header bg-secondary" ><h2>Pengumpulan Data Questioner</h2></div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-dark">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">NIM</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Pengerjaan</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = $users->firstItem()?>
                      @foreach ($users as $key=>$user)
                        <tr>
                          <th scope="row">{{ $i++ }}</th>
                          <td>{{$user->registration_number}}</td>
                          <td>{{$user->name}}</td>
                          @switch($user->questionnaire_status)
                              @case(1)
                                  <td><i class="material-icons" style="color:black">check_circle</i></td>
                                  @break
                              @case(2)
                                  <td><i class="material-icons" style="color:gray">info</i></td>
                                  @break
                              @default
                                  <td><i class="material-icons" style="color:orange">remove_circle</i></td>
                          @endswitch
                        </tr>
                      @endforeach



                      </tbody>
                    </table>

                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-7">

                    </div>
                    <div class="col-md-3" align="right">
                      <h1 class="display-3">{{number_format($count/$users->total()*100, 2, '.', ',')}}%</h1>
                      
                    </div>

                    <div class="col-md-2"><br>
                      Responden : {{$count}}<br>
                      Total Mahasiswa : {{$users->total()}} 
                    </div>

                  </div>
                </div>

                <div class="row">
                    <div class="col-md-7">

                    </div>
                    <div class="col-md-5" align="right">
                      <div class="float-right">
                        {{ $users->links() }}
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
