<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="{{url('storage/xpress.png')}}"/>
    <title>{{config('app.name')}}</title>
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
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <!-- Argon JS -->
  <script src="{{ asset('js/forms.js') }}"></script>
<script src="{{asset('js/env.js')}}"></script>
</body>
</html>