@extends('master_admin')

@section('content')
<div class="container">
  <h2>Daftar Desa</h2>
              
  <table class="table table-hover">
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
        	<a href="daftar_pengepul" class="btn btn-info">Tampil</a>
          <a href="{{ URL::to('tanitani/admin/'.$a->id.'/edit_desa') }}" class="btn btn-warning">Edit</a>
		</td>

        </tr>
        @endforeach

    </tbody>
</table>
</div>

	
@endsection