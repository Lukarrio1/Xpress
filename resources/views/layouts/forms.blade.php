<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Argon CSS -->
<link href="{{asset('css/argone209.css')}}" rel="stylesheet">
<link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/env.css')}}">
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
  <script src="{{ asset('js/forms.js') }}"></script>
  <script>
  $('#showpasswords').on('click', () => ShowPassword());
  ShowPassword = () => {
    let type =$("#regpassword").attr('type')
  switch(type){
      case "password":
      $("#regpassword").attr('type','text')
      $("#regconfpassword").attr('type','text')
      $('#showpasswords').removeClass("fa-eye")
      $('#showpasswords').addClass("fa-eye-slash")
        break
      case "text":
      $("#regpassword").attr('type','password')
      $("#regconfpassword").attr('type','password')
      $('#showpasswords').removeClass("fa-eye-slash")
      $('#showpasswords').addClass("fa-eye")
        break 
    }
};
  </script>
</body>
</html>