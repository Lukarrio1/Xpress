<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
<link href="{{asset('css/nucleo.css')}}" rel="stylesheet">
        <!-- Argon CSS -->
<link type="text/css" href="{{asset('css/argone209.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/argon.css') }}">
<link type="text/css" href="{{asset('css/app.css')}}" rel="stylesheet">
 </head>  
<body class="bg-danger">
    @yield('content')
     <!-- Scripts -->
<!-- Compiled and minified JavaScript -->
<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <!-- Argon JS -->
  <script src="{{ asset('js/argon209.js') }}"></script>
  <script src="{{ asset('js/demo.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('js/jquery.lavalamp.min.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery.scollbar.min.js') }}"></script>
</body>
</html>