// runs  at start up..
$( document ).ready(function() { 
    Notification();
    timer();
    });

// runs every 20 seconds
window.setInterval(function(){
    Notification();
    },20000);

//runs ever mininute 
window.setInterval(()=>{
    timer();
    }, 60000);

Notification=()=>{
$.get( "/Notifications", function( data ) {
    var notification = jQuery.parseJSON(data);
    $('#notificount').html(""+notification.length+"");
    var text = "";
    for(i = 0; i<notification.length; i++){
    text +=`<a class='dropdown-item' href='/Notifications/${notification[i].id}'><i class='fas fa-money mr-2' aria-hidden='true'></i><span>${notification[i].name}</span> <span class='float-right'><i class='far  fa-clock' aria-hidden='true'></i> 13 min</span></a>`;
    }
    $("#notify").html(""+text+"");
});
}

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


$("#update_login_token").click(function(){
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
