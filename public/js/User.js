// runs notification at start up..
$( document ).ready(function() { 
 Notification();
});

// run notification every six seconds
window.setInterval(function(){
    Notification();
    },20000);



Notification=()=>{
$.get( "/Notifications", function( data ) {
    var notification = jQuery.parseJSON(data);
    $('#notificount').html(""+notification.length+"");
    var text = "";
    for(i = 0; i<notification.length; i++){
    text +="<a class='dropdown-item' href='/Notifications/"+notification[i].id+"'><i class='fas fa-money mr-2' aria-hidden='true'></i><span>"+notification[i].name+"</span> <span class='float-right'><i class='far  fa-clock' aria-hidden='true'></i> 13 min</span></a>";
    }
    $("#notify").html(""+text+"");
});
}