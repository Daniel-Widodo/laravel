@extends('layouts.app')

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
                        <tr>
                          <th scope="row">1</th>
                          <td>16043079005</td>
                          <td>Daniel Christianto Widodo</td>
                          <td><i class="material-icons" style="color:green">check_circle</i></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>16043079056</td>
                          <td>Thornton Ediffien</td>
                          <td><i class="material-icons" style="color:red">remove_circle</i></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>15043079009</td>
                          <td>Gandar Sari Polulo</td>
                          <td><i class="material-icons" style="color:green">check_circle</i></td>
                        </tr>
                      </tbody>
                    </table>

                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-7">

                    </div>
                    <div class="col-md-3" align="right">
                      <h1 class="display-3">60%</h1>
                    </div>
                    <div class="col-md-2"><br>
                      Total Mahasiswa : 113 <br>
                      Total Pengisi : 66
                    </div>
                  </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
