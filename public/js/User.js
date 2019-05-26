// runs  at start up..
$(document).ready(() => {
  TokenCheck();
  Modaltimer();
  Userinfo();
  shipments();
  spnotification();
  task();
});

// runs every 20 seconds
window.setInterval(() => {
  TokenCheck();
}, 20000);

//runs ever mininute
window.setInterval(() => {
  Modaltimer();
  shipments();
  spnotification();
}, 60000);

// checks to see if the user verified there email ('/','NotificationController@Token')
TokenCheck = () => {
  $.get("/Notifications", data => {
    var notification = jQuery.parseJSON(data);
    if (notification.notification == "") {
      $("#emailnotify").html("");
      var verify = 0;
      spnotification(verify);
    } else {
      $("#emailnotify").html(
        `<a  class='dropdown-item' href='#'>${
          notification.notification
        }<span class='float-right'>${notification.icon}</span></a>`
      );
      var verify = 1;
      spnotification(verify);
    }
    // for(i = 0; i<notification.length; i++){
    // text +=`<a class='dropdown-item' href='/Notifications/${notification[i].id}'><i class='fas fa-money mr-2' aria-hidden='true'></i><span>${notification[i].name}</span> <span class='float-right'><i class='far  fa-clock' aria-hidden='true'></i> 13 min</span></a>`;
    // }
  });
};

// check to see if the modal has been clicked /modal ('/modal', 'User\UserController@Modaltoken')
Modaltimer = () => {
  $.get("/modal", data => {
    var token = jQuery.parseJSON(data);
    var modal = token.token;
    $("#modalname").html(`${token.name}`);
    $("#modalxl").html(`${token.xl}`);
    if (modal == "") {
    } else {
      $("#modal").click();
    }
  });
};

// this function updates the login modal /modal ('/modal','User\UserController@modaltokenupdate')
$("#update_login_token").click(() => {
  $.ajax({
    url: "/modal",
    type: "POST",
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: "text",
    success: data => {}
  });
});

$("#changeimg").click(() => {
  $.ajax({
    url: "/user/imgremove",
    type: "POST",
    data: {
      _token: CSRF_TOKEN,
      rm: "true"
    },
    dataType: "text",
    success: data => {
      $("#imgclose").click();
      $("#update").click();
    }
  });
});
//  this function updates the users information on the user/edit page ('/MyAccount','User\UserController@edit')->name('account.edit')
$("#updatebtn").html("Update");
$("#update").click(() => {
  let name = $("#name").val();
  let telephone = $("#telephone").val();
  let city = $("#city").val();
  let parish = $("#parish").val();
  let country = $("#country").val();
  let address = $("#address").val();
  // Validates the update user form
  if (name.length < 3) {
    $("#errorname").html("Name is too short");
  } else if (telephone.length < 10 || telephone.length > 12) {
    $("#errorphone").html("Number must be ten numbers");
  } else if (city.length < 3) {
    $("#errorcity").html("City name is too short");
  } else if (parish.length < 3) {
    $("#errorparish").html("Parish name is too short");
  } else if (country.length < 3) {
    $("#errorcountry").html("Country name is too short");
  } else if (address.length < 3) {
    $("#erroraddress").html("Address is too short");
  } else {
    // empties the error messages if validate is successfull
    $("#update").removeClass("btn btn-success");
    $("#updatebtn").html(
      "<div class='spinner-grow text-success' role='status'></div>"
    );
    $("#errorname").html("");
    $("#errorphone").html("");
    $("#errorcity").html("");
    $("#errorparish").html("");
    $("#errorcountry").html("");
    $("#erroraddress").html("");
    // if validation is successfull then an ajax request is sent to /Userinfo (/Userinfo','User\UserController@update)
    $.ajax({
      url: "/Userinfo",
      type: "Post",
      data: {
        _token: CSRF_TOKEN,
        name: name,
        telephone: telephone,
        city: city,
        parish: parish,
        country: country,
        address: address
      },
      dataType: "text",
      success: data => {
        Userinfo();
        // $("#updatesuccess").html("Updated Successfully.");
        // setTimeout(function(){ $("#updatesuccess").html(""); }, 5000);
        $("#updatebtn").html("Update");
        $("#update").addClass("btn btn-success");
        // iziToast
        iziToast.success({
          position: "topCenter",
          message: "Updated Successfully.."
        });
      }
    });
  }
});
// this function upates and sends a request to ('/Userinfo','User\UserController@index')
Userinfo = () => {
  $.get("/Userinfo", data => {
    let user = jQuery.parseJSON(data);
    Pdata();
    Object.keys(user).forEach(key => {
      $(`#${key}`).val(user[key]);
      // $(`#usercard${name}`).html(`${user[key]}`);
    });
    //   $("#email").val(user.email);
    //   $("#telephone").val(user.telephone);
    //   $("#city").val(user.city);
    //   $("#parish").val(user.parish);
    //   $("#country").val(user.country);
    //   $("#address").val(user.address);
    $("#usercardid").html(`${user.xl}`);
    $("#authusername").html(`${user.name}`);
    $("#usercardname").html(`${user.name}`);
    $("#usercardemail").html(`${user.email}`);
    $("#usercardphone").html(`${user.telephone}`);
    $("#usercardcity").html(`${user.city}`);
    $("#usercardparish").html(`${user.parish}`);
    $("#usercardcountry").html(`${user.country}`);
    $("#usercardaddress").html(`${user.address}`);
    $("#usercardtrn").html(`${user.trn}`);
    $("#usercardimage").html(
      `<img src="/storage/Userimage/${
        user.image
      }" class="rounded-circle" alt="${user.image}">`
    );
  });
};
// this funtion deletes user
$("#Deletebtn").click(() => {
  iziToast.question({
    backgroundColor: "red",
    messageColor: "white",
    titleColor: "white",
    timeout: 10000,
    close: false,
    overlay: true,
    displayMode: "once",
    id: "question",
    zindex: 999,
    title: "Hey",
    message: "Are you sure about that?",
    position: "center",
    buttons: [
      [
        '<button style="color:white;"><b>YES</b></button>',
        function(instance, toast) {
          $.ajax({
            type: "Post",
            url: "/Useraccountdel",
            data: {
              _token: CSRF_TOKEN,
              delete: true
            },
            dataType: "text",
            success: function(response) {
              window.location.href = "/";
            }
          });
          instance.hide({ transitionOut: "fadeOut" }, toast, "button");
        },
        true
      ],
      [
        '<button style="color:white;">NO</button>',
        function(instance, toast) {
          instance.hide({ transitionOut: "fadeOut" }, toast, "button");
        }
      ]
    ]
  });
});
//  all you need to know is that this function goes to the Pdata in UserController
Pdata = () => {
  $("#oldpass").val("");
  $("#pschbtn").click(() => {
    if ($("#oldpass").val().length < 6) {
      $("#oldpassword").html("Must be at least 6 characters");
    } else {
      $.ajax({
        type: "POST",
        url: "/pdata",
        data: {
          _token: CSRF_TOKEN,
          data: $("#oldpass").val()
        },
        dataType: "text",
        success: function(response) {
          var something = jQuery.parseJSON(response);
          if (something.passed == 0) {
            $("#oldpassword").html("Password doesn`t match");
          } else if ($("#newpass").val().length < 6) {
            $("#newpassword").html("Must be at least 6 characters");
          } else if ($("#confirmpass").val().length < 6) {
            $("#confirmpassword").html("Must be at least 6 characters");
          } else if ($("#newpass").val() != $("#confirmpass").val()) {
            $("#confirmpassword").html("Password dont match");
          } else {
            $("#pschbtn").addClass("disabled");
            $.ajax({
              type: "POST",
              url: "/passwordUpdate",
              data: {
                _token: CSRF_TOKEN,
                newpass: $("#newpass").val()
              },
              dataType: "text",
              success: function(response) {
                $("#pschbtn").removeClass("disabled");
                $("#oldpassword").html("");
                $("#newpassword").html("");
                $("#confirmpassword").html("");
                $("#oldpass").val("");
                $("#newpass").val("");
                $("#confirmpass").val("");
                $("#closepasswordmodal").click();
                iziToast.success({
                  position: "topCenter",
                  message: "Password Changed .."
                });
              }
            });
          }
        }
      });
    }
  });
};
// this is function will show all of the shipments
shipments = () => {
  $.get("/shipments/all", data => {
    var shipments = jQuery.parseJSON(data);
    let all_ship = "";
    for (i = 0; i < shipments.length; i++) {
      all_ship += `<tr class="">
                <th>${shipments[i].tracking_no}</th>
                <td>${shipments[i].reference_no}</td>
                <td>${shipments[i].recipient}</td>
                <td>${shipments[i].description}</td>
                <td>${shipments[i].delivery_date}</td>
                <td>${shipments[i].spcharge}</td>
                <td>${shipments[i].status}</td>
                <td>${shipments[i].created_at}</td>
                <td>${shipments[i].updated_at}</td>
              </tr>`;
    }
    $("#shipments").html(`${all_ship}`);
  });
};

spnotification = verify => {
  $.get("/shipments/notification", data => {
    var spnotification = jQuery.parseJSON(data);
    let sp = spnotification.number;
    if (sp > 0) {
      $("#spnotify").html(
        `<a class='dropdown-item' href='/shipments'>New shipment added. <span class='float-right'> <i class="fas fa-box-open"></i></span></a>`
      );
    } else {
      sp = 0;
    }
    NotificationCounter(verify, sp);
  });
};
$("#savetodo").click(() => {
  let todo = $("#todotextarea").val();
  $.ajax({
    url: "/todo",
    type: "POST",
    data: {
      _token: CSRF_TOKEN,
      todo: todo
    },
    dataType: "text",
    success: data => {
      $("#todotextarea").val("");
      $("#closetodo").click();
      iziToast.success({
        position: "topCenter",
        message: "Task added.."
      });
      task();
    }
  });
});

task = () => {
  $.get("/todo", data => {
    let todo = jQuery.parseJSON(data);
    let todobody = "";
    if (todo.count == 0) {
      todobody += ` <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text " id="emptytask">Add your tasks here..</a>`;
    } else {
      for (let i = 0; i < todo.length; i++) {
        todobody += ` <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text ">${
          todo[i].todo
        }
      <i class="fas fa-trash ml-auto todo" data-toggle="tooltip" data-placement="top" title="Click to delete" id="todo${
        todo[i].id
      }"></i></a>`;
      }
    }
    $("#todosection").html(`${todobody}`);
  });
};

$(document).on("click", ".todo", function() {
  let todo = $(this).attr("id");
  let id = todo.substring(4);
  $.ajax({
    url: "/delete/todo",
    type: "POST",
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: "text",
    success: data => {
      iziToast.error({
        position: "topCenter",
        message: "Task deleted.."
      });
      task();
    }
  });
});
// this function counts and display the amount of notification that the user has via the notificount id in the nav bar onder notification.
NotificationCounter = (verify, sp) => {
  let sum = Number(verify) + Number(sp);
  $("#notificount").html(`${sum}`);
};

// testings: this get all the users in the database  ('/Allusers', 'NotificationController@Allusers')
// Allusers = verify => {
// 	$.get('/Allusers', data => {
// 		let text = '';
// 		var user = jQuery.parseJSON(data);
// 		var number = user.length;
// 		spnotification(number, verify);
// 		for (i = 0; i < user.length; i++) {
// 			text += `<a class='dropdown-item' href='/Notifications/${user[i]
// 				.id}'>${user[i].name}</span></a>`;
// 		}
// 		$('#allusersnotify').html(`${text}`);
// 	});
// };

// $('#preAlertSubmit').on('click', ev => {
// 	let name = $('#vendorname').val();
// 	let tnumber = $('#trackingnumber').val();
// 	let pkgname = $('#name_pkg').val();
// 	if (name.length < 2) {
// 		$('#errorvenname').html('Vendor name is too short..');
// 		ev.preventDefault();
// 	} else if (tnumber.length < 4) {
// 		$('#errortnumber').html('Tracking number is too is too short..');
// 		ev.preventDefault();
// 	} else if (pkgname.length < 3) {
// 		ev.preventDefault();
// 		$('#errorpkg').html('Package name is too short..');
// 	}
// });
// parseInt() this function will convert a string to a int...
//  parseFloat() this will convert a string to a float ..

// $(()=> {
//     let $createAlertForm = $('#createAlertForm')
//     let $submitBtn = $('#preAlertSubmit')

//     $submitBtn.on('click', (ev)=>{
//         ev.preventDefault()
//         // ev.stopPropagation()
//         postFormData()
//     })

//     function postFormData() {
//         let formData = new FormData()
//         let file = $('input[name="invoice"]')[0].files[0]
//         let elements = $createAlertForm.find('.form-control')
//         for(let i = 0; i < elements.length; i++)
//             formData.append($(elements[i]).name, $(elements[i]).val())

//         formData.append('file', file)
//         console.log(formData)
//         $.ajax({
//             url: '/shipments/update',
//             type: 'POST',
//             data: {
//                 _token: CSRF_TOKEN,
//                 data:formData,
//             },
//             contentType: false,
//             processData: false,
//             dataType: 'JSON',
//             success: (data)=> {

//             }
//         });

//     }
// })
