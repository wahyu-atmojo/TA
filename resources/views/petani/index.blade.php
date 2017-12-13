@extends('master')
 
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
		</td>

        </tr>
        @endforeach

    </tbody>
</table>
</div>
<script>
function bukaInfo()
{
    $('#infoku').modal('show');
}
</script>
 <div class="container">
Membuat dialog itu mudah, <a href="javascript:bukaInfo()">info lanjut</a>  
<!-- Modal -->
<div class="modal fade" id="infoku" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Kemudahan Tampilan Dialog</h4>
      </div>
      <div class="modal-body">
<p>Beberapa hal yang kita pelajari dari tampilan utama dialog pada Bootstrap adalah</p>
<ol>
<li>Container menggunakan class '<strong>modal</strong>' , diikuti '<strong>modal-dialog</strong>' , dan '<strong>modal-content</strong>'</li>
<li>Untuk header menggunakan class '<strong>modal-header</strong></li>
<li>Untuk body menggunakan class '<strong>modal-body</strong>'</li>
<li>Footer menggunakan class '<strong>modal-footer</strong>'</li>
</li>
<li>Bagian akhir<br />&nbsp;&nbsp;&nbsp; &lt;/div&gt;&lt;!-- /.modal-content --&gt;<br />&nbsp; &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;<br />&lt;/div&gt;&lt;!-- /.modal --&gt;<br />&lt;!-- Modal --&gt;</li>
</ol>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div><!--modal-content-->
  </div><!--modal-dialog-->
</div><!--modal-->
</div><!--container-->

@endsection