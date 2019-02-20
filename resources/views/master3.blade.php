<!DOCTYPE html>
<html>
  <head>
    <title>Tanitani</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- styles -->
    <link href="{{asset('css/styles4.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  @include('petani.header')
  <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
            <ul class="nav">
               <!-- Main menu -->
               <li><a href="{{ url('tanitani/petani') }}"><i class="glyphicon glyphicon-home"></i> Home</a></li>
               <li><a href="{{ url('tanitani/petani/semua_pengepul')}}"><i class="glyphicon glyphicon-search"></i> Data Pengepul</a></li>
               <li><a href="{{url('tanitani/petani/profil') }}"><i class="glyphicon glyphicon-stats"></i> Profil</a></li>
            </ul>
        </div>
		  </div>
		<div class="col-md-10">
    <div class="row">
  	<div class="col-md-12"></div>
   @yield('content')	  
		  </div>
		</div>
    </div>
    @include('petani.footer')
   <link href="{{asset('css/dataTables.bootstrap.css') }}" rel="stylesheet" media="screen">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('js/dataTables.bootstrap.js') }}"></script>
    <script src="{{asset('js/custom.js') }}"></script>
    <script src="{{asset('js/tables.js') }}"></script>
  </body>
</html>