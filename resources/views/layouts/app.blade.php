<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
<link rel="stylesheet" href="{{asset('css/iziToast.css')}}">

   
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="fixed-sn white-skin">
    <div id="app">
      @include('inc.navbar')
      <main>
        @yield('content')
      </main>
    </div>   
   <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script>
   
    $(()=>{
      //cache dom elements
      let $fileInput = $('#fileInput');
      let $navbarBtn = $(".button-collapse")

      //initilize module
      init()

      //events
      $fileInput.on('change', (ev)=>{
        $('#fileNameOutput').val(ev.target.files[0].name);
      })

      function init() {
        $navbarBtn.sideNav({
          edge: 'left', // Choose the horizontal origin
          closeOnClick: true, // Closes side-nav on &lt;a&gt; clicks, useful for Angular/Meteor
          breakpoint: 1200 // Breakpoint for button collapse
        });
      }
    })

// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar);



    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

 </script>

<script type="text/javascript" src="{{ asset ('js/app.js') }}"></script>
<script src="{{asset('js/iziToast.js')}}"></script>
{{-- do not touch here wihout asking me  --}}
<script src="{{asset('js/User.js')}}"></script>
<script>
  var id ={{ Auth::user()->id }};
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
</script>
{{-- dont touch  --}}
 </body>
</html>
