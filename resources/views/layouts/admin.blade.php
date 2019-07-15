<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="appurl" content="{{ config('app.url') }}" />
    <link rel="shortcut icon" type="image/png" href="{{url('storage/xpress.png')}}"/>
    <title>{{ config('app.name') }}</title>
   

    <link rel="stylesheet" href="{{ asset('css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/iziToast.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/env.css') }}" />
    <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
    </script>
  </head>
  <body class="fixed-sn light-skin">
    @include('inc.adminnav')
    <main>
      @yield('content')
    </main>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    {{-- do not touch here wihout asking me  --}}
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/iziToast.js') }}"></script>
    <script src="{{ asset('js/env.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script>
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    </script>
  </body>
</html>
