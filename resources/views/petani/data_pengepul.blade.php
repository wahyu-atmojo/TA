@extends('master3')
@section('content')
<style>
       #map_canvas {
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
            <div id="map_canvas" style="width:100%;height:300px"></div>
            
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
                <th>Nama Pengepul</th>
                <th>Alamat</th>
                <th>Keterangan</th>
                
              </tr>
            </thead>
            <tbody>
                <td><b>1</b></td>
                <td><b><img src="{{asset('public/gambar/'.$ab['foto']) }}" style="max-height:200px;max-width:200px;margin-top:10px;"/></b></td>
                <td><b>{{$ab['nama_pengepul']}}</b></td>
                <td><b>{{$ab['alamat']}}</b></td>
                <td><b>{{$ab['deskripsi']}}</b></td>
                
              </tr>
            </tbody>
          </table>
          </div>
        </div>
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAYOrPGZY_cHxw9pwOOf6GYUfVqlISZ9i4"></script>  
<script type="text/javascript">
var data =  {!! json_encode($ab) !!};
console.log(data['id']);
 //DUA VARIABLE BERIKUT DIPERLUKAN UNTUK RUTE
 var directionsDisplay;
 var directionsService = new google.maps.DirectionsService();

 var lat;
 var long;

 // console.log(navigator.geolocation);

 (function() {  // fungsi untuk dijalankan ketika halaman web dubuka  
   var infowindow = null;  

   if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      
      lat = position.coords.latitude;
      long = position.coords.longitude;

      initialize(lat, long);
      // console.log(long);

    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }

  // console.log('long', long);
      
    // mengeksekusi fungsi initialize()  
     
  })();  
    
    function initialize(lat, long) {  

      // console.log(lat);
     //BARIS DIBAWAH INI JUGA DIPERLUKAN UNTUK RUTE
     directionsDisplay = new google.maps.DirectionsRenderer();

        // Baris berikut digunakan untuk mengisi marker atau tanda titik di peta  
        var sites = [  
    
         [data['nama_pengepul'], data['latitude'],data['longitude'] ,1, '<h4>Tes</p>'], // pertama merupakan judul market, kedua adalah titik koordinan latitude, ketiga longitude, dan keempat merupakan z index (titik mana yang ditampilkan lebih dulu) untuk menentukan titik mana diatas titik mana, ketiga merupakan isi keterangan marker nya.  
         // ['Unila', -5.364505,105.243442 ,2, '<h4>Universitas Lampung</h4><p>Keterangan didalam marker</p>'],  
         // ['DJ',-5.3745833,105.2425024,3,'<h4>IBI DARMAJAYA</h4><p>Keterangan untuk marker</p>']
   
        ];  
        var centerMap = new google.maps.LatLng( data['latitude'],data['longitude']); // mengatur pusat peta  
          
        var myOptions = {  
          zoom: 15, // level zoom peta  
          center: centerMap, // setting pusat peta ke centerMap  
          mapTypeId: google.maps.MapTypeId.ROADMAP //menentukan tipe peta  
        }  
    
        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); //menempatkan peta pada div dengan ID map_canvas di html  

        //BARIS DIBAWAH INI UNTUK MELETAKKAN RUTE PADA MAP "map_canvas" ^
      directionsDisplay.setMap(map);

        setMarkers(map, sites); // memanggil fungsi setMarker untuk menandai titik di peta.  
          
        infowindow = new google.maps.InfoWindow({  
            content: "loading..."  
          });  
    
        var bikeLayer = new google.maps.BicyclingLayer();  
        bikeLayer.setMap(map); //memnunculkan peta  

        //BARIS DIBAWAH INI UNTUK MEMANGGIL FUNGSI calcRoute()
        calcRoute(lat, long);   
      }  
    
        

        //FUNGSI CALCROUTE UNTUK MENGGAMBAR RUTE DARI TITIK A KE TITIK B / START ke END
        function calcRoute(lat, long) {
        var start = lat+','+long;
        var end =  data['latitude']+','+data['longitude'];
        var request = {
          origin:start,
          destination:end,
          travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, function(result, status) {
          if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(result);
          }
        });
      }
    
    
     
        function setMarkers(map, markers) {  
         //berikut merupakan perulangan untuk membaca masing masing titik yang telah kita definisikan di sites[];  
        for (var i = 0; i < markers.length; i++) {  
          var sites = markers[i];  
          var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);  
          var marker = new google.maps.Marker({  
            position: siteLatLng,  
            map: map,  
            title: sites[0],  
            zIndex: sites[3],  
            html: sites[4]  
    
          });  
    
          var contentString = "Some content";  
          // berikut merupakan fungsi untuk mengatur agar keterangan marker muncuk ketika mouse diarahkan ke marker (mouse over)  
          google.maps.event.addListener(marker, "mouseover", function () {  
              
            infowindow.setContent(this.html);  
            infowindow.open(map, this);  
          });  
        }  
      }  
    

</script>
   

@endsection