<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tanitani</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/set1.css') }}" />
  <link href="{{ asset('css/overwrite.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
  </head>
  <body>
  @include('petani.header')
   <div class="container">
    <div class="row">
    <div class="slider">
        <div class="img-responsive">
      @yield('content')
      </div>
      </div>
    </div>
  </div>
  @include('petani.footer')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery-2.1.1.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
  <script src="{{asset('js/jquery.bxslider.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/fliplightbox.min.js') }}"></script>
  <script src="{{asset('js/functions.js') }}"></script> 
  <script type="text/javascript">$('.portfolio').flipLightBox()</script>
  <script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
  </script>
  </body>
</html>