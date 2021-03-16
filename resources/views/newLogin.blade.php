<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                       {{-- <p align="center" style="font-size: 20pt">LOGIN</p> --}}
                    </a>
                </div>
                <div class="login-form">
                     <img src="{{asset('img/kejaksaan.png')}}" style="display: block; margin: 0 auto; text-align: center;" width="80" height="80" class="img-responsive">
                      <br>  
                    <form method="POST" class="user" action="{{ url('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email address</label>
                            <input id="email" type="email" class="form-control form-control-user
                            @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                            required autocomplete="email" autofocus placeholder="Email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control 
                            @error('password') is-invalid @enderror" name="password" 
                            required autocomplete="current-password" placeholder="Password">

                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="checkbox">
                            {{-- <label>
                                <input class="form-check-input custom-control-user" type="checkbox" name="remember" 
                                id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                            </label> --}}
                            {{-- <label class="pull-right">
                                <a href="{{ route('password.request') }}">Forgotten Password?</a>
                            </label> --}}
                        </div>
                        {{-- <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button> --}}
                        <br>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30 btn-user btn-block">
                            {{ __('Login') }}
                        </button>

                        
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="{{ url('new-register') }}"> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('style/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('style/js/popper.min.js')}}"></script>
    <script src="{{ asset('style/js/plugins.js')}}"></script>
    <script src="{{ asset('style/js/main.js')}}"></script>


</body>
</html>