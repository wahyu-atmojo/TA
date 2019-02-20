@extends('master_admin')
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">


                <div class="col-lg-9">
                    <div class="card">
                      <div class="card-header">
                        <strong>Data Desa</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="{{action('AdminController@update', $ab->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Desa</label></div>
                            <div class="col-12 col-md-9"><input type="text" value = "{{$ab->nama}}" id="text-input" name="nama" placeholder="Nama" class="form-control"><small class="form-text text-muted">Masukan Desa</small></div>
                          </div>
					 	{{ method_field('PUT') }}
						<div class="card-footer">
                            <input type="hidden" name="_method" value="PUT">
                              <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                              </button>
                              {{csrf_field() }}
                          </div>
                        </form>
</div>
</div>
</div>
</div>



	
@endsection