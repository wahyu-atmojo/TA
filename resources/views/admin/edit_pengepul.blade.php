@extends('master_admin')

@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">


                <div class="col-lg-9">
                    <div class="card">
                      <div class="card-header">
                        <strong>Data Pengepul</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="{{action('PengepulController@update', $a->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="text" value = "{{$a->nama_pengepul}}" id="text-input" name="nama" placeholder="Nama" class="form-control"><small class="form-text text-muted">Masukan Nama</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Desa</label></div>
                            <div class="col-12 col-md-9">
                              <select class="form-control" name="idd" Placeholder="Masukan Nama Desa">
                              @foreach($desa as $key)
                                @if($key->id == $a->id_desa)
                                  <option value="{{$key->id}}">{{$key->nama}}</option>
                                @else
                                  <option value="{{$key->id}}">{{$key->nama}}</option>
                                @endif
                              @endforeach
                              </select>
                            <small class="help-block form-text">Masukan desa</small>
                            </div>
                          </div> 
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9"><input type="text" value = "{{$a->alamat}}" id="password-input" name="alamat" placeholder="Password" class="form-control"><small class="help-block form-text">Masukan alamat</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Longitude</label></div>
                            <div class="col-12 col-md-9"><input type="text" value = "{{$a->longitude}}" id="" name="lt" placeholder="Longitude"  class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Latitude</label></div>
                            <div class="col-12 col-md-9"><input type="text" value = "{{$a->latitude}}" id="" name="la" placeholder="Latitude"  class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keterangan</label></div>
                            <div class="col-12 col-md-9"><textarea type="text" id="" name="desk" placeholder="Latitude"  class="form-control">{{$a->deskripsi}}</textarea></div>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Foto</label>
                              <input type="file" id="gambar" name="gb" class="form-control" placeholder="Masukkan foto">
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
              </div>

@endsection

