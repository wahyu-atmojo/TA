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
                              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Tambah Pengepul</button>
                              @include('admin.form_pengepul')
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
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Desa</th>
                        <th>Keterangan</th>
                        <th>Option</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <?php
                        $no = 1;
                        ?>
                          @foreach ($a as $a)
                            <td>{{$no++}}</td>
                            <td><b><img src="{{asset('public/gambar/'.$a['foto']) }}" style="max-height:200px;max-width:200px;margin-top:10px;"/></b></td>
                            <td>{{$a->nama_pengepul}}</td>
                            <td>{{$a->desas->nama}}</td>
                            <td>{{$a->deskripsi}}</td>
                            <td>
                                <a href="{{ URL::to('tanitani/admin/'.$a->id.'/edit_pengepul') }}" class="btn btn-sm btn-warning" >Edit</a>
                                <a href="{{ URL::to('tanitani/admin/data_pengepul/'.$a->id.'') }}" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                      </tr>
                    @endforeach
                      
	
@endsection
