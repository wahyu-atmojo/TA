@extends('master_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Data Desa</div>

                <div class="panel-body">
				<form action="{{ URL('tanitani/admin/data_desa') }}" method="POST">
					<div class="form-group">
					 	<label for="nama">Nama Desa</label>
					 	<input type="text" class="form-control" name="nama" Placeholder="Masukan Nama Desa">
					</div>
					<br>
					<div class="form-group">
			          <div class="col-md-2 col-md-offset-0">
			              <button type="submit" class="btn btn-info">Simpan</button>
			     	</div>
			        </div>
			           {{csrf_field() }}
			</form>
</div>
</div>
</div>
</div>
</div>


	
@endsection