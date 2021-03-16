<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') KEJAKSAAN TINGGI NEGERI BANJARMASIN</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    
    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <img src="{{asset('img/kejaksaan.png')}}"  width="60" height="60" class="img-responsive">
                <a class="navbar-brand" href="" style="font-size: 10pt" style="text-align: center">Sistem Informasi Surat Perintah</a>
                <a class="navbar-brand hidden" href="./"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    {{-- <li>
                        <a href="{{ url('home')}}"> <i class="menu-icon fa fa-home"></i>Home </a>
                    </li> --}}
                    {{-- <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="menu-icon fa fa-file"></i>Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-arrow-right"></i><a href=" {{ url('datapegawai') }}">Pegawai</a></li>
                            <li><i class="menu-icon fa fa-arrow-right"></i><a href=" {{ url('izincuti') }} ">Surat Perintah Mengikuti Pelatihan</a></li>
                            <li><i class="menu-icon fa fa-arrow-right"></i><a href=" {{ url('izinbelajar') }} ">Surat Perintah melaksanakan Tugas</a></li>
                            <li><i class="menu-icon fa fa-arrow-right"></i><a href=" {{ url('izinsakit') }} ">Surat Perintah Melaksanakan Tugas</a></li>
                            <li><i class="menu-icon fa fa-arrow-right"></i><a href=" {{ url('izinsakit') }} ">Surat Perintah Melaksanakan Tugas</a></li>
                            <li><i class="menu-icon fa fa-arrow-right"></i><a href=" {{ url('izinsakit') }} ">Kenaikan Gaji</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href=" {{ url('/') }}"> <i class="menu-icon fa fa-home"></i>Home </a>
                        
                    </li>
                    <li>
                        <a href="{{ url('new-register') }}"><i class="menu-icon fa fa-registered"></i>Register</a>
                    </li>
                    <li>
                        <a href="{{ url('new-login') }}"><i class="menu-icon fa fa-sign-in"></i>Login</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <table border="0">
                        <tr>
                            <td valign="center">
                                <font style="font-size: 15pt" style="text-align: center" style="font-family: arial, sans-serif;">KEJAKSAAN TINGGI KALIMANTAN SELATAN</font>
                            </td>
                        </tr>
                        
                    </table>
                </div>        
                
            </div>

        </header><!-- /header -->

        @yield('breadcrums')

        @yield('content')


    </div>
</body>
</html>