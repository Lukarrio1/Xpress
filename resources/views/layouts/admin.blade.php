<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{config('app.name')}} @yield('title')</title>

<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/all.css') }}">
<link rel="stylesheet" href="{{ asset('css/iziToast.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  
  
</head>

<body>
@yield('content')

<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{ asset('js/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{{-- do not touch here wihout asking me  --}}
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{ asset ('js/app.js') }}"></script>
<script src="{{asset('js/iziToast.js')}}"></script>
<script src="{{asset('js/env.js')}}"></script>
<script src="{{asset('js/User.js')}}"></script>
<script>

</body>
</html>