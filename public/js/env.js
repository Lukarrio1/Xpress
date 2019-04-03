$(() => {
  //cache dom elements
  let $fileInput = $("#fileInput");
  let $navbarBtn = $(".button-collapse");
  let $pgkin = $("#pkg_in");

  //initilize module
  init();

  //events
  $fileInput.on("change", ev => {
    $("#fileNameOutput").val(ev.target.files[0].name);
  });

  $pgkin.on("change", env => {
    $("#pkg_out").val(env.target.files[0].name);
  });

  function init() {
    $navbarBtn.sideNav({
      edge: "left", // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on &lt;a&gt; clicks, useful for Angular/Meteor
      breakpoint: 1200 // Breakpoint for button collapse
    });
  }
});

// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector(".custom-scrollbar");
Ps.initialize(sideNavScrollbar);

// Data Picker Initialization
$(".datepicker").pickadate();

// Material Select Initialization
$(document).ready(function() {
  $(".mdb-select").material_select();
});
