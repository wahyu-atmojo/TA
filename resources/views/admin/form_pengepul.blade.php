
<div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                  <!-- konten modal-->
                                  <div class="modal-content">
                                      <!-- heading modal -->
                                      <div class="modal-header">
                                      <h4 class="modal-title">Tambah Pengepul</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <!-- body modal -->
                                      <div class="modal-body">
                                          <form role="form" action="{{ URL('tanitani/admin/data_pengepul') }}" method="POST" enctype="multipart/form-data">
                                          {{csrf_field() }}
                                            <div class="card-body">
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Pengepul</label>
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Desa</label>
                                                <select class="form-control" name="idd" Placeholder="Masukan Nama Desa">
                        											 		@foreach($desa as $a)
                        											 			<option value="{{ $a->id}}">{{ $a->nama}}</option>
                                                    dd($nama);
                        											 		
                        											 		@endforeach
                        											 	</select>
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Longitude</label>
                                                <input type="text" class="form-control" name="lt" placeholder="Masukkan longitude">
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Latitude</label>
                                                <input type="text" class="form-control" name="la"  placeholder="Masukkan latitude">
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat</label>
                                                <input type="text" class="form-control" name="alamat"  placeholder="Masukkan latitude">
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Keterangan</label>
                                                <input type="text" class="form-control" name="desk"  placeholder="keterangan">
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Foto</label>
                                                <input type="file" id="gambar" name="gb" class="form-control" placeholder="Masukkan foto">
                                              </div>
                                               <div class="card-footer">
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                         {{csrf_field() }}    
                                          </form>
                                           
                                      </div>
                                      <!-- footer modal -->
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                      </div>
                                  </div>
                              </div>
                            </div>

