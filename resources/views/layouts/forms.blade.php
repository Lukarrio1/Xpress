<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
<link href="{{asset('css/nucleo.css')}}" rel="stylesheet">
        <!-- Argon CSS -->
<link type="text/css" href="{{asset('css/argone209.css')}}" rel="stylesheet">
<link type="text/css" href="{{asset('css/app.css')}}" rel="stylesheet">
 </head>  
<body class="bg-danger">
    @yield('content')
     <!-- Scripts -->
<!-- Compiled and minified JavaScript -->
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="argon/vendor/jquery/dist/jquery.min.js"></script>
<script src="argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="argon/vendor/js-cookie/js.cookie.js"></script>
<script src="argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<script src="argon/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
<script src="argon/vendor/chart.js/dist/Chart.min.js"></script>
<script src="argon/vendor/chart.js/dist/Chart.extension.js"></script>

        
<!-- Argon JS -->
<script src="argon/js/argone209.js?v=1.0.0"></script>
<script src="argon/js/demo.min.js"></script>      
</body>
</html>