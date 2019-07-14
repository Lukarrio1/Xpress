$('#showpasswords').on('click', () => ShowPassword());
ShowPassword = () => {
  let type = $('#regpassword').attr('type');
  switch (type) {
    case 'password':
      $('#regpassword').attr('type', 'text');
      $('#regconfpassword').attr('type', 'text');
      $('#showpasswords').removeClass('fa-eye');
      $('#showpasswords').addClass('fa-eye-slash');
      break;
    case 'text':
      $('#regpassword').attr('type', 'password');
      $('#regconfpassword').attr('type', 'password');
      $('#showpasswords').removeClass('fa-eye-slash');
      $('#showpasswords').addClass('fa-eye');
      break;
  }
};
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
