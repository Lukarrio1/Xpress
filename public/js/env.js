$(() => {
  //cache dom elements
  let $fileInput = $('#fileInput');
  let $navbarBtn = $('.button-collapse');
  let $pgkin = $('#pkg_in');

  //initilize module
  init();

  //events
  $fileInput.on('change', ev => {
    $('#fileNameOutput').val(ev.target.files[0].name);
  });

  $pgkin.on('change', env => {
    $('#pkg_out').val(env.target.files[0].name);
  });

  function init() {
    $navbarBtn.sideNav({
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on &lt;a&gt; clicks, useful for Angular/Meteor
      breakpoint: 1200 // Breakpoint for button collapse
    });
  }
});

// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar);

// Data Picker Initialization
$('.datepicker').pickadate();

// Material Select Initialization
$(document).ready(function() {
  $('.mdb-select').material_select();
});

validateEmail = email => {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
};

initcalculator = () => {
  $.ajax({
    type: 'POST',
    url: '/admin/shipmentcalculator/air',
    data: {
      _token: CSRF_TOKEN,
      exrate: 0,
      shw10: 0,
      shw9: 0,
      shw8: 0,
      shw7: 0,
      shw6: 0,
      shw5: 0,
      shw4: 0,
      shw3: 0,
      shw2: 0,
      shw1: 0
    },
    dataType: 'text',
    success: function(response) {
      AirFreightData();
    }
  });
  $.ajax({
    type: 'POST',
    url: '/admin/shipmentcalculator',
    data: {
      _token: CSRF_TOKEN,
      exrate: 0,
      percentage: 0
    },
    dataType: 'text',
    success: function(response) {
      SeaFreightData();
    }
  });
};
