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
<script src="{{ asset('js/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script>
// SideNav Button Initialization
$(".button-collapse").sideNav();
// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar);
// SideNav Options
$('.button-collapse').sideNav({
  edge: 'left', // Choose the horizontal origin
  closeOnClick: false, // Closes side-nav on &lt;a&gt; clicks, useful for Angular/Meteor
  breakpoint: 1200 // Breakpoint for button collapse
});
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
<script src="{{asset('js/User.js')}}"></script>
<script type="text/javascript" src="{{ asset ('js/app.js') }}"></script>
<script>
$(document).ready(function () {
  timer();
});

window.setInterval(() => {
  timer();
}, 60000);


function timer(){
$.get("/modal",(data)=>{
  var token = jQuery.parseJSON(data);
  var modal =token.token;
  if(modal==""){

  }else{
    $('#modal').click();
  }
 
});
}

$(document).ready(function () {
$("#learned").add("#cancel").click(function(){
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  var id = {{Auth::user()->id}};
      $.ajax({
          /* the route pointing to the post function */
          url: '/modal',
          type: 'POST',
          /* send the csrf-token and the input to the controller */
          data: {
          _token: CSRF_TOKEN, 
          id:id
          },
          dataType: 'text',
          /* remind that 'data' is the response of the AjaxController */
          success: function (data) { 
          }
      }); 
  });
});


</script>
 </body>
</html>
