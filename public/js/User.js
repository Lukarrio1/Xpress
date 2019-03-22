// runs  at start up..
$( document ).ready(()=>{ 
    Notification();
    Modaltimer();
    Userinfo();
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
    if(notification==""){

    }else{
     $("#notify").html(`${notification.icon} ${notification.notification}`);
    }
    $('#notificount').html("1");
    // for(i = 0; i<notification.length; i++){
    // text +=`<a class='dropdown-item' href='/Notifications/${notification[i].id}'><i class='fas fa-money mr-2' aria-hidden='true'></i><span>${notification[i].name}</span> <span class='float-right'><i class='far  fa-clock' aria-hidden='true'></i> 13 min</span></a>`;
    // }
   
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
 
    }
}); 
});



//  this function sends an ajax request to the back end of this application
$("#updatebtn").html("Update");
$("#update").click(()=>{
    // let image = document.getElementById("userimage").files[0]; 
    let name = $("#name").val();
    let telephone=$("#telephone").val();
    let city=$("#city").val();
    let parish=$("#parish").val();
    let country = $("#country").val();
    let address= $("#address").val();
 
    // Update  form validations
    if(name.length<3){
    $("#errorname").html("Name is too short");
    }else if(telephone.length<10 || telephone.length>11){
    $("#errorphone").html("Number must be ten numbers");
    }else if(city.length<3){
        $("#errorcity").html("City name is too short");
    }else if(parish.length<3){
        $("#errorparish").html("Parish name is too short");
    }else if(country.length<3){
        $("#errorcountry").html("Country name is too short");
    }else if(address.length<3){
        $("#erroraddress").html("Address is too short");
    }else{
    // empties the error messages if validate is successfull
    $("#update").removeClass("btn btn-success");
    $("#updatebtn").html("<div class='spinner-grow text-success' role='status'></div>");
    $("#errorname").html("");
    $("#errorphone").html("");
    // $("#erroremail").html("");
    $("#errorcity").html("");
    $("#errorparish").html("");
    $("#errorcountry").html("");
    $("#erroraddress").html("");
    $.ajax({
        url: '/Userinfo',
        type: 'Post',
        data: {
        _token: CSRF_TOKEN, 
        name:name,
        telephone:telephone,
        city:city,
        parish:parish,
        country:country,
        address:address
        },
        dataType: 'text',
        success: (data)=> {
        Userinfo();
        // $("#updatesuccess").html("Updated Successfully.");
        // setTimeout(function(){ $("#updatesuccess").html(""); }, 5000);
        $("#updatebtn").html("Update");
        $("#update").addClass("btn btn-success");
        // iziToast 
        iziToast.success({
            position:'topCenter',
            // title:'',
            message:'Updated Successfully..',
        });
        }
    });
    }
    });

Userinfo=()=>{
    $.get("/Userinfo",(data)=>{
        let user = jQuery.parseJSON(data);
        Object.keys(user).forEach((key)=>{
            $(`#${key}`).val(user[key]);
            // $(`#usercard${name}`).html(`${user[key]}`);
        })
      
    //   $("#email").val(user.email);
    //   $("#telephone").val(user.telephone);
    //   $("#city").val(user.city);
    //   $("#parish").val(user.parish);
    //   $("#country").val(user.country);
    //   $("#address").val(user.address);

      $("#authusername").html(`${user.name}`);
      $("#usercardname").html(`${user.name}`);
      $("#usercardemail").html(`${user.email}`);
      $("#usercardphone").html(`${user.telephone}`);
      $("#usercardcity").html(`${user.city}`);
      $("#usercardparish").html(`${user.parish}`);
      $("#usercardcountry").html(`${user.country}`);
      $("#usercardaddress").html(`${user.address}`);
    }); 
    }
    $("#Deletebtn").click(()=>{
        iziToast.question({
            backgroundColor:'red',
            messageColor:'white',
            titleColor:'white',
            timeout: 10000,
            close: false,
            overlay: true,
            displayMode: 'once',
            id: 'question',
            zindex: 999,
            title: 'Hey',
            message: 'Are you sure about that?',
            position: 'center',
            buttons: [
            ['<button style="color:white;"><b>YES</b></button>', function (instance, toast) {
            $.ajax({
            type: "Post",
            url: "/Useraccountdel",
            data:{
                _token: CSRF_TOKEN, 
            delete:true,
            },
            dataType: "text",
            success: function (response) {
            window.location.href = "/";
            }
            });
            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }, true],
            ['<button style="color:white;">NO</button>', function (instance, toast) {

            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
            ],
        });
    });


   
