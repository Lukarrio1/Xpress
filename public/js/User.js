// runs notification at start up..
$( document ).ready(function() { 
    $.get( "/Notifications", function( data ) {
      var notification = jQuery.parseJSON(data);
      $('#notificount').html(""+notification.length+"");
      var text = "";
     for(i = 0; i<notification.length; i++){
      text +="<a class='dropdown-item' href='/Notifications/"+notification[i].id+"'><i class='fas fa-money mr-2' aria-hidden='true'></i><span>"+notification[i].name+"</span> <span class='float-right'><i class='far  fa-clock' aria-hidden='true'></i> 13 min</span></a>";
     }
     $("#notify").html(""+text+"");
});
});
// run notification every six seconds
window.setInterval(function(){
  $.get( "/Notifications", function( data ) {
      var notification = jQuery.parseJSON(data);
      // this is a new way to console log data ... 
      // console.table([notification]);
      $('#notificount').html(""+notification.length+"");
      var text = "";
     for(i = 0; i<notification.length; i++){
      text +="<a class='dropdown-item' href='/Notifications/"+notification[i].id+"'><i class='fas fa-money mr-2' aria-hidden='true'></i><span>"+notification[i].name+"</span> <span class='float-right'><i class='far  fa-clock' aria-hidden='true'></i> 13 min</span></a>";
     }
     $("#notify").html(""+text+"");
});
    },20000);