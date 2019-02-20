@extends('master_admin')

@section('content')


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Desa</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Handle</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <?php
                                      $no = 1;
                                      ?>
                                       @foreach ($ab as $a)
                                    <td>{{$no++}}</td>
                                    <td>{{$a->nama}}</td>
                                    <td></td>
                                    <td>
                                      <a href="{{ URL::to('tanitani/admin/'.$a->nama.'/daftar_pengepul') }}" class="btn btn-info">Tampil</a>
                                      <a href="{{ URL::to('tanitani/admin/'.$a->id.'/edit_desa') }}" class="btn btn-warning">Edit</a>
                                      <a href="{{ URL::to('tanitani/admin/'.$a->id.'/hapus_desa') }}" class="btn btn-danger">Hapus</a>
                                </td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>

                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>


@endsection


