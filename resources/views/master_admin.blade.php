<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tanitani - Dashboard</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('sufee/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{asset('sufee/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('sufee/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('sufee/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset('sufee/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{asset('sufee/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{asset('sufee/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('sufee/assets/scss/style.css') }}">
    <link rel="stylesheet" href="{{asset('sufee/assets/scss/modal.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Data Menu</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-th"></i><a href="{{ action('AdminController@index') }}">Data Desa</a></li>
                            <li><i class="fa fa-th"></i><a href="{{ action('PengepulController@tampil') }}">Data Petani</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>                        
                        <div class="col-sm-5">
                            <div class="user-area dropdown float-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                                </a>
                                <div class="user-menu dropdown-menu">
                                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>
                                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
                                        <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                                </div>
                            </div>
                            <div class="language-select dropdown" id="language-select">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                                    <i class="flag-icon flag-icon-us"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="language" >
                                    <div class="dropdown-item">
                                        <span class="flag-icon flag-icon-fr"></span>
                                    </div>
                                    <div class="dropdown-item">
                                        <i class="flag-icon flag-icon-es"></i>
                                    </div>
                                    <div class="dropdown-item">
                                        <i class="flag-icon flag-icon-us"></i>
                                    </div>
                                    <div class="dropdown-item">
                                        <i class="flag-icon flag-icon-it"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </header>
        @yield('content')

</div>
    <script src="{{asset('sufee/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{asset('sufee/assets/js/popper.min.js') }}"></script>
    <script src="{{asset('sufee/assets/js/plugins.js') }}"></script>
    <script src="{{asset('sufee/assets/js/main.js') }}"></script>
    <script src="{{asset('sufee/assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{asset('sufee/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{asset('sufee/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('sufee/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{asset('sufee/assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{asset('sufee/assets/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{asset('sufee/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{asset('sufee/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{asset('sufee/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{asset('sufee/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{asset('sufee/assets/js/lib/data-table/datatables-init.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#tombol').click(function(){
                $('#modal-kotak , #bg').fadeIn("slow");
            });
            $('#tombol-tutup').click(function(){
                $('#modal-kotak , #bg').fadeOut("slow");
            });
        });
    </script>



</body>
</html>
    
       