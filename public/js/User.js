// runs  at start up..
$( document ).ready(()=>{ 
    Notification();
    Modaltimer();
    });

// runs every 20 seconds
window.setInterval(()=>{
    Notification();
    },20000);

//runs ever mininute 
window.setInterval(()=>{
    Modaltimer();
    }, 60000);

// checks if there is any new notification
Notification=()=>{
$.get( "/Notifications",( data )=>{
    var notification = jQuery.parseJSON(data);
    $('#notificount').html(""+notification.length+"");
    var text = "";
    for(i = 0; i<notification.length; i++){
    text +=`<a class='dropdown-item' href='/Notifications/${notification[i].id}'><i class='fas fa-money mr-2' aria-hidden='true'></i><span>${notification[i].name}</span> <span class='float-right'><i class='far  fa-clock' aria-hidden='true'></i> 13 min</span></a>`;
    }
    $("#notify").html(""+text+"");
});
}
// check to see if the modal has been clicked before
 Modaltimer=()=>{
$.get("/modal",(data)=>{
    var token = jQuery.parseJSON(data);
    var modal =token.token;
    if(modal==""){
    }else{
    $('#modal').click();
    }
});
}

// this function sends an ajax request to the back end of this application
$("#update_login_token").click(()=>{
$.ajax({
    url: '/modal',
    type: 'POST',
    data: {
    _token: CSRF_TOKEN, 
    id:id
    },
    dataType: 'text',
    success: (data)=> {
    if(response.indexOf('false')>=0){
        window.location="../user/login.php";
        }

    }
}); 
});
