<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tanitani</title>
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
	<script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('tanitani/petani') }}">Tanitani</a>
    </div>
    <ul class="nav navbar-nav">
      
      
    </ul>
    
  </div>
</nav>
 
<div class="container">
  	<div class="row">
      <!-- jQuery -->

   
  		@yield('content')
  	</div>
  </div>
<script src="//code.jquery.com/jquery.js"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/dataTables.bootstrap.min.js') }}"></script>
</body>
</html>