<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Taller System</title>
     <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('plantilla_adminlte/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plantilla_adminlte/css/font-awesome.css')}}">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('plantilla_adminlte/css/AdminLTE.min.css')}}">   
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plantilla_adminlte/css/blue.css')}}">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">Styles -->
    
</head>
<body class="hold-transition skin-red login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>pruebaa system taller</b></a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">        
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{asset('plantilla_adminlte/js/app.js')}}"></script>
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('plantilla_adminlte/js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('plantilla_adminlte/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('plantilla_adminlte/js/icheck.min.js')}}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>
</html>
