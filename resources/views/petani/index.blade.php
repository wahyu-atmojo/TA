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
          <div class="panel-title">Data Desa</div>
        </div>
          <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
              <tr>
                <th>No</th>
                <th>Desa</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php
                $no = 1;
                ?>
                @foreach ($ab as $a)
                <td><b>{{$no++}}</td>
                <td><b>{{$a->nama}}</td>
                <td class="ctr">
                  <div class="btn-group">
                    <a href="{{ URL::to('tanitani/petani/'.$a->id.'/daftar_pengepul') }}" class="btn btn-info">Daftar Pengepul</a>
                  </div>
                </td>
              </tr>
              @endforeach 
            </tbody>
          </table>
          </div>
        </div>

        <script>
      function initMap() {
        var uluru = {lat: -6.7170005, lng:111.1402254};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          animation: google.maps.Animation.BOUNCE
        });
      }
    </script>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYOrPGZY_cHxw9pwOOf6GYUfVqlISZ9i4&callback=initMap">
    </script> 

@endsection
