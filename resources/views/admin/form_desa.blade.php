 <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                  <!-- konten modal-->
                                  <div class="modal-content">
                                      <!-- heading modal -->
                                      <div class="modal-header">
                                      <h4 class="modal-title">Tambah Desa</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <!-- body modal -->
                                      <div class="modal-body">
                                          <form role="form" action="{{ URL('tanitani/admin/data_desa') }}" method="POST">
                                          {{csrf_field() }}
                                            <div class="card-body">
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Desa</label>
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan data desa">
                                              </div>
                                               <div class="card-footer">
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            
                                          </form>
                                           
                                      </div>
                                      <!-- footer modal -->
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                      </div>
                                  </div>
                              </div>
                            </div>
<!-- <a href="#popup" class="btn btn-info">Tambah Desa</a>
  <div id="popup">
      <div class="window">
          <a href="#" class="close-button" title="Close">X</a> -->
      <!-- /.container-fluid -->
    

    <!-- Main content -->
   
           <!-- <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Desa</h3>
              </div>  -->
              <!-- /.card-header -->
              <!-- form start -->
           <!--  <form role="form" action="{{ URL('tanitani/admin/data_desa') }}" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Desa</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan data desa">
                  </div>
                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
               {{csrf_field() }} -->
         
    <!-- /.content -->
  <!--   </div>
</div>
</div>
 -->
