@extends('master3')
@section('content')
<style>
       #map {
        height: 200px;
        width: 50%;
       }
    </style>

<div class="content-box-large">
          <div class="panel-heading">
          <div class="panel-title">Maps</div>
        </div>
          <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <div id="map" style="width:100%;height:300px"></div>
          </table>
          </div>
        </div>
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
                <th>Nama</th>
                <th>Alamat</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php
                $no = 1;
                ?>
                @foreach ($a as $c)
                <td><b>{{$no++}}</td>
                <td><b><img src="{{asset('public/gambar/'.$c['foto']) }}" style="max-height:200px;max-width:200px;margin-top:10px;"/></td>
                <td><b>{{$c->nama_pengepul}}</td>
                <td><b>{{$c->alamat}}</td>
                <td><b>{{$c->deskripsi}}</td>
                <td class="ctr">
                  <div class="btn-group">
                    <a href="{{ URL::to('tanitani/petani/'.$c->id.'/data_pengepul') }}" class="btn btn-info">lihat</a>
                  </div>
                </td>
              </tr>
              @endforeach 
            </tbody>
          </table>
          </div>
        </div>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAYOrPGZY_cHxw9pwOOf6GYUfVqlISZ9i4&callback=initMap"></script>  

<script>
      function initMap() {
        var uluru = {lat:{{ $c->latitude}}, lng:{{$c->longitude}}};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        <?php 
          foreach ($a as $item) {
            echo 'addMarker('.$item->latitude.', '.$item->longitude.');';

          }
         ?>

        function addMarker(latitude, longitude) {
          var marker = new google.maps.Marker({
            position: {lat:latitude, lng:longitude},

            map: map,
            animation: google.maps.Animation.BOUNCE
          });
        }
      }
    
    </script>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYOrPGZY_cHxw9pwOOf6GYUfVqlISZ9i4&callback=initMap">
    </script> 

@endsection
