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
        @yield('content')
    </div>   
   <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
   {{-- <script src="{{ asset('js/jquery-jvectormap-world-mill.js') }}"></script>
   <script src="{{ asset('js/jquery-jvectormap-2.0.3.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
 // SideNav Button Initialization
// Show sideNav
$('.button-collapse').sideNav('show');
// Hide sideNav
$('.button-collapse').sideNav('hide');
    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

  <!-- Charts -->
    // Small chart
    $(function () {
      $('.min-chart#chart-sales').easyPieChart({
        barColor: "#FF5252",
        onStep: function (from, to, percent) {
          $(this.el).find('.percent').text(Math.round(percent));
        }
      });
    });

    //Main chart
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
          label: "My First dataset",
          fillColor: "#fff",
          backgroundColor: 'rgba(255, 255, 255, .3)',
          borderColor: 'rgba(255, 255, 255)',
          data: [0, 10, 5, 2, 20, 30, 45],
        }]
      },
      options: {
        legend: {
          labels: {
            fontColor: "#fff",
          }
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: true,
              color: "rgba(255,255,255,.25)"
            },
            ticks: {
              fontColor: "#fff",
            },
          }],
          yAxes: [{
            display: true,
            gridLines: {
              display: true,
              color: "rgba(255,255,255,.25)"
            },
            ticks: {
              fontColor: "#fff",
            },
          }],
        }
      }
    }
    );
 </script>
 <script>
  // runs notification at start up..
  $( document ).ready(function() { 
    $.get( "/Notifications", function( data ) {
      var obj = jQuery.parseJSON(data);
      $('#notificount').html(""+obj.length+"");
      var text = "";
     for(i = 0; i<obj.length; i++){
      text +="<a class='dropdown-item' href='/Notification/"+obj[i].id+"'><i class='fas fa-money mr-2' aria-hidden='true'></i><span>"+obj[i].name+"</span> <span class='float-right'><i class='far  fa-clock' aria-hidden='true'></i> 13 min</span></a>";
     }
     $("#notify").html(""+text+"");
});
});
// run notification every six seconds
window.setInterval(function(){
  $.get( "/Notifications", function( data ) {
      var obj = jQuery.parseJSON(data);
      $('#notificount').html(""+obj.length+"");
      var text = "";
     for(i = 0; i<obj.length; i++){
      text +="<a class='dropdown-item' href='/Notification/"+obj[i].id+"'><i class='fas fa-money mr-2' aria-hidden='true'></i><span>"+obj[i].name+"</span> <span class='float-right'><i class='far  fa-clock' aria-hidden='true'></i> 13 min</span></a>";
     }
     $("#notify").html(""+text+"");
});
    },20000);
 </script>
</body>
</html>
