@extends('master3')
@section('content')
	<div class="content-box-large">
          <div class="panel-heading">
          <div class="panel-title">Data Pengepul</div>
        </div>
          <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
              <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Pengepul</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php
                $no = 1;
                ?>
                @foreach ($ab as $a)
                <td><b>{{$no++}}</td>
                <td><b><img src="{{asset('public/gambar/'.$a->foto) }}" style="max-height:200px;max-width:200px;margin-top:10px;"/></td>
                <td><b>{{$a->nama_pengepul}}</td>
                <td><b>{{$a->deskripsi}}</td>
                <td class="ctr">
                  <div class="btn-group">
                    <a href="{{ URL::to('tanitani/petani/'.$a->id.'/data_pengepul') }}" class="btn btn-info">Lihat Lokasi</a>
                  </div>
                </td>
              </tr>
              @endforeach 
            </tbody>
          </table>
          </div>
        </div>
@endsection