@extends('master_admin')

@section('content')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Tambah Desa</button>
                              @include('admin.form_desa')
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Desa</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Desa</th>
                        <th>Option</th>
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
                            <td>
                                <a href="{{ URL::to('tanitani/petani/'.$a->id.'/daftar_pengepul') }}" class="btn btn-info">Tampil</a>
                              <a href="{{ URL::to('tanitani/admin/'.$a->id.'/edit_desa') }}" class="btn btn-warning">Edit</a>
                              <a href="{{ URL::to('tanitani/admin/hapus/'.$a->id.'') }}" class="btn btn-danger">Hapus</a>
                            </td>
                      </tr>
                    @endforeach


@endsection