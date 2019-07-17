$(document).ready(() => {
  TokenCheck();
  Modaltimer();
  Userinfo();
  shipments();
  spnotification();
  task();
  News();
  // footerDate();
  SuccesMessageRemove();
  ScheduleRec();
  PreAlertsRec();
  SpReadyForPickup();
});

// runs every 20 seconds
window.setInterval(() => {
  TokenCheck();
  spnotification();
}, 20000);

//runs ever mininute
window.setInterval(() => {
  Modaltimer();
  shipments();
  News();
  ScheduleRec();
  PreAlertsRec();
}, 60000);

/* Triggers start here */
// this function updates the login modal /modal ('/modal','User\UserController@modaltokenupdate')
$('#update_login_token').click(() => {
  ModalUpdate();
});

// This trigger calls the ProfileImageRemove()
$('#changeimg').click(() => {
  ProfileImageRemove();
});

// This trigger calls the ProfileUpate()
$('#updatebtn').html('Update');
$('#update').click(() => {
  ProfileUpdate();
});

// This trigger calls the ProfileDelete()
$('#Deletebtn').click(() => {
  ProfileDelete();
});
// This trigger calls the NewTask()
$('#savetodo').click(() => {
  NewTask();
});
// This trigger calls the MakeDelivery()
$('#devsubmit').on('click', () => {
  MakeDelivery();
});
// This trigger calls DeleteTask()
$(document).on('click', '.todo', function() {
  let delId = this;
  DeleteTask(delId);
});
// This trigger calls the NewsModal()
$(document).on('click', '.newsmodal', function() {
  let mdid = this;
  $('#newsmodaltype').removeClass('modal-lg');
  $('#newsmodaltype').removeClass('modal-fluid');
  NewsModal(mdid);
});
// This trigger calls the ViewTask()
$(document).on('click', '.task', function() {
  let taskId = this;
  ViewTask(taskId);
});
// This trigger calls the Completetask()
$(document).on('click', '.completedtask', function() {
  let taskId = this;
  CompleteTask(taskId);
});

$(document).on('click', '.scheduleactivity', function() {
  let schid = $(this).attr('id');
  let id = schid.substring(5);
  ViewSchActivity(id);
});

$(document).on('click', '.prealertactivity', function() {
  let preid = $(this).attr('id');
  let id = preid.substring(5);
  ViewPreActivity(id);
});

$('#calculateair').on('click', () => AirFreightCalculator());

$('#calculatesea').on('click', () => SeaFreightCalculator());

setTimeout(() => RemoveErrors(), 10000);

/* Triggers end here */

// this function updates the date of the footer every year .
// footerDate = () => {
//   var date = new Date();
//   var year = date.getFullYear();
//   $('#footerdate').html(`${year}`);
// };

// this message removes the Success message from the prealerts page after 5000 milliseconds
SuccesMessageRemove = () => {
  let timeout = setInterval(() => {
    $('#successmessage').remove();
    StopInterval(timeout);
  }, 5000);
};

// this function stops the SuccessMessageRemove() from running after 5 seconds
StopInterval = id => {
  clearInterval(id);
};

RemoveErrors = () => {
  let errors = document.querySelectorAll('.pre-error');
  errors.forEach(err => err.remove());
};

// checks to see if the user verified there email ('/','NotificationController@Token')
TokenCheck = () => {
  $.get('/Notifications', data => {
    var notification = jQuery.parseJSON(data);
    if (notification.notification == '') {
      $('#emailnotify').html('');
      var verify = 0;
      spnotification(verify);
    } else {
      $('#emailnotify').html(
        `<a  class='dropdown-item' href='#'>${
          notification.notification
        }<span class='float-right'>${notification.icon}</span></a>`
      );
      var verify = 1;
      spnotification(verify);
    }
  });
};

Modaltimer = () => {
  $.get('/modal', data => {
    var token = jQuery.parseJSON(data);
    var modal = token.token;
    $('#modalname').html(`${token.name}`);
    $('#modalxl').html(`${token.xl}`);
    if (modal == '') {
    } else {
      $('#tutmodal').click();
    }
  });
};

ModalUpdate = () => {
  $.ajax({
    url: '/modal',
    type: 'POST',
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: 'text',
    success: data => {}
  });
};

ProfileImageRemove = () => {
  $.ajax({
    url: '/user/imgremove',
    type: 'POST',
    data: {
      _token: CSRF_TOKEN,
      rm: 'true'
    },
    dataType: 'text',
    success: data => {
      $('#imgclose').click();
      $('#update').click();
    }
  });
};

ProfileUpdate = () => {
  let name = $('#name').val();
  let telephone = $('#telephone').val();
  let city = $('#city').val();
  let parish = $('#parish').val();
  let country = $('#country').val();
  let address = $('#address').val();
  // Validates the update user form
  if (name.length < 3) {
    $('#errorname').html('Name is too short');
  } else if (telephone.length < 10 || telephone.length > 12) {
    $('#errorphone').html('Number must be ten numbers');
  } else if (city.length < 3) {
    $('#errorcity').html('City name is too short');
  } else if (parish.length < 3) {
    $('#errorparish').html('Parish name is too short');
  } else if (country.length < 3) {
    $('#errorcountry').html('Country name is too short');
  } else if (address.length < 3) {
    $('#erroraddress').html('Address is too short');
  } else {
    // empties the error messages if validate is successfull
    $('#update').removeClass('btn btn-success');
    $('#updatebtn').html(
      "<div class='spinner-grow text-success' role='status'></div>"
    );
    $('#errorname').html('');
    $('#errorphone').html('');
    $('#errorcity').html('');
    $('#errorparish').html('');
    $('#errorcountry').html('');
    $('#erroraddress').html('');
    $.ajax({
      url: '/Userinfo',
      type: 'Post',
      data: {
        _token: CSRF_TOKEN,
        name: name,
        telephone: telephone,
        city: city,
        parish: parish,
        country: country,
        address: address
      },
      dataType: 'text',
      success: data => {
        Userinfo();
        $('#updatebtn').html('Update');
        $('#update').addClass('btn btn-success');
        // iziToast
        iziToast.success({
          position: 'topCenter',
          message: 'Updated Successfully..'
        });
      }
    });
  }
};

Userinfo = () => {
  $.get('/Userinfo', data => {
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
    $('#usercardid').html(`${user.xl}`);
    $('#authusername').html(`${user.name}`);
    $('#usercardname').html(`${user.name}`);
    $('#usercardemail').html(`${user.email}`);
    $('#usercardphone').html(`${user.telephone}`);
    $('#usercardcity').html(`${user.city}`);
    $('#usercardparish').html(`${user.parish}`);
    $('#usercardcountry').html(`${user.country}`);
    $('#usercardaddress').html(`${user.address}`);
    $('#usercardtrn').html(`${user.trn}`);
    $('#usercardimage').html(
      `<img src="/storage/Userimage/${
        user.image
      }" class="rounded-circle" alt="${user.image}">`
    );
  });
};

ProfileDelete = () => {
  iziToast.question({
    backgroundColor: 'red',
    messageColor: 'white',
    titleColor: 'white',
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
      [
        '<button style="color:white;"><b>YES</b></button>',
        function(instance, toast) {
          $.ajax({
            type: 'Post',
            url: '/Useraccountdel',
            data: {
              _token: CSRF_TOKEN,
              delete: true
            },
            dataType: 'text',
            success: function(response) {
              window.location.href = '/';
            }
          });
          instance.hide(
            {
              transitionOut: 'fadeOut'
            },
            toast,
            'button'
          );
        },
        true
      ],
      [
        '<button style="color:white;">NO</button>',
        function(instance, toast) {
          instance.hide(
            {
              transitionOut: 'fadeOut'
            },
            toast,
            'button'
          );
        }
      ]
    ]
  });
};
//  all you need to know is that this function goes to the Pdata in UserController
Pdata = () => {
  $('#oldpass').val('');
  $('#pschbtn').click(() => {
    if ($('#oldpass').val().length < 6) {
      $('#oldpassword').html('Must be at least 6 characters');
    } else {
      $.ajax({
        type: 'POST',
        url: '/pdata',
        data: {
          _token: CSRF_TOKEN,
          data: $('#oldpass').val()
        },
        dataType: 'text',
        success: function(response) {
          var something = jQuery.parseJSON(response);
          if (something.passed == 0) {
            $('#oldpassword').html('Password doesn`t match');
          } else if ($('#newpass').val().length < 6) {
            $('#newpassword').html('Must be at least 6 characters');
          } else if ($('#confirmpass').val().length < 6) {
            $('#confirmpassword').html('Must be at least 6 characters');
          } else if ($('#newpass').val() != $('#confirmpass').val()) {
            $('#confirmpassword').html('Password dont match');
          } else {
            $('#pschbtn').addClass('disabled');
            $.ajax({
              type: 'POST',
              url: '/passwordUpdate',
              data: {
                _token: CSRF_TOKEN,
                newpass: $('#newpass').val()
              },
              dataType: 'text',
              success: function(response) {
                $('#pschbtn').removeClass('disabled');
                $('#oldpassword').html('');
                $('#newpassword').html('');
                $('#confirmpassword').html('');
                $('#oldpass').val('');
                $('#newpass').val('');
                $('#confirmpass').val('');
                $('#closepasswordmodal').click();
                iziToast.success({
                  position: 'topCenter',
                  message: 'Password Changed ..'
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
  $.get('/shipments/all', data => {
    var formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD'
    });
    var shp = jQuery.parseJSON(data);
    ShipmentCount(shp);
    let all_ship = '';
    for (i = 0; i < shp.length; i++) {
      created_at = new Date(`${shp[i].created_at}`);
      created = created_at.toString().slice(0, 24);
      updated_at = new Date(`${shp[i].updated_at}`);
      let _class = shp[i].collected == 0 ? "<tr class='table-info'>" : ' <tr>';
      updated =
        shp[i].collected == 1 ? updated_at.toString().slice(0, 24) : ' ';
      all_ship += `${_class}
                <th>${shp[i].tracking_no}</th>
                <td>${shp[i].reference_no}</td>
                <td>${shp[i].description}</td>
                <td>${shp[i].delivery_date}</td>
                <td>${formatter.format(parseInt(shp[i].spcharge))}</td>
                <td>${shp[i].status}</td>
                <td>${created}</td>
                <td>${updated}</td>
              </tr>`;
    }
    $('#shpcount').html(`${shp.length}`);
    $('#shipments').html(`${all_ship}`);
  });
};

spnotification = verify => {
  $.get('/shipments/notification', data => {
    let sp = data;
    if (sp > 0) {
      shipments();
      $('#spnotify').html(
        `<a class='dropdown-item' href='/shipments'>New shipment added. <span class='float-right'>
         <i class="fas fa-box-open"></i></span></a>`
      );
    } else {
      sp = 0;
    }
    SpReadyForPickup(verify, sp);
  });
};

SpReadyForPickup = (verify, sp) => {
  $.get('/shipments/notification/data', data => {
    let res = jQuery.parseJSON(data);
    let count = res.completed ? 1 : 0;
    res.completed
      ? $('#spready')
          .html(`<a class='dropdown-item' href='/shipments'>A shipment is ready for pick up.<span class='float-right'>
         <i class="fas fa-box-open"></i></span></a>`)
      : '';
    NotificationCounter(verify, sp, count);
  });
};

NewTask = () => {
  let todo = $('#todotextarea').val();
  if (todo.length < 1 || todo.length > 200) {
    $('#errortask').html(`Error, invalid task!`);
  } else {
    $.ajax({
      url: '/todo',
      type: 'POST',
      data: {
        _token: CSRF_TOKEN,
        todo: todo
      },
      dataType: 'text',
      success: data => {
        $('#todotextarea').val('');
        $('#closetodo').click();
        $('#taskmodal').click(() => $('#errortask').html(' '));
        task();
        iziToast.success({
          position: 'topCenter',
          message: 'Task added..'
        });
      }
    });
  }
};

task = () => {
  $.get('/todo', data => {
    let todo = jQuery.parseJSON(data);
    let todobody = '';
    let _class = '';
    if (todo.count == 0) {
      todobody += ` <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text " id="emptytask">Add your tasks here..</a>`;
    } else {
      todo.forEach(n => {
        _class = n.completed ? 'completed' : ' ';
        todobody += ` <a href="#" class="list-group-item d-flex task justify-content-between dark-grey-text ${_class}" id="task${
          n.id
        }">${n.todo}
      <i class="fas fa-trash ml-auto todo text-danger" data-toggle="tooltip" data-placement="top" title="Click to delete" id="todo${
        n.id
      }"></i></a>`;
      });
    }
    $('#todosection').html(`${todobody}`);
  });
};

ViewTask = taskid => {
  let task = $(taskid).attr('id');
  let id = task.substring(4);
  $.get(`/todo/${id}`, data => {
    let task = jQuery.parseJSON(data);
    if (task != null) {
      created_at = new Date(`${task.created_at}`);
      created = created_at.toString().slice(0, 24);
      let com = task.completed
        ? `<i class="fas fa-check"></i >`
        : `<i class="far fa-square"></i>`;
      $('#taskbody').html(`${task.todo}`);
      $('#tasktime').html(`${created}`);
      $('#taskcompleted')
        .html(`<button type="button" class="btn btn-primary completedtask" id="completedTask${id}">
      ${com}
     </button>`);
      $('#viewTASK').click();
    }
  });
};

CompleteTask = taskId => {
  let taskID = $(taskId).attr('id');
  let id = taskID.substring(13);
  $.ajax({
    type: 'POST',
    url: '/todo/completed',
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: 'text',
    success: function(response) {
      iziToast.success({
        position: 'topCenter',
        message: 'Task Completed'
      });
      $('#closetaskmodal').click();
      window.setTimeout(() => task(), 1000);
    }
  });
};

DeleteTask = delId => {
  let todo = $(delId).attr('id');
  let id = todo.substring(4);
  $.ajax({
    url: '/delete/todo',
    type: 'POST',
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: 'text',
    success: data => {
      iziToast.error({
        position: 'topCenter',
        message: 'Task deleted..'
      });
      window.setTimeout(() => task(), 1000);
    }
  });
};

MakeDelivery = () => {
  let firstname = $('#devfname').val();
  let lastname = $('#devlname').val();
  let devaddress = $('#deliveryaddress').val();
  let devphone = $('#devphone').val();
  let express = $('#expressdelivery').prop('checked');
  if (firstname.length < 3) {
    $('#errorfname').html(
      'Invalid firstname, It should be at least 3 characters.'
    );
  } else if (lastname.length < 3) {
    $('#errorlname').html(
      'Invalid lastname, It should be at least 3 characters.'
    );
  } else if (devaddress.length < 4) {
    $('#errordelivery').html(
      'Invalid delivery address, It should be at least 4 characters.'
    );
  } else if (devphone.length < 10 || devphone.length >= 11) {
    $('#errorphone').html(
      'Invalid phone number, It should be at 10 characters.'
    );
  } else {
    $.ajax({
      url: '/scheduledelivery',
      type: 'POST',
      data: {
        _token: CSRF_TOKEN,
        firstname: firstname,
        lastname: lastname,
        address: devaddress,
        phone: devphone,
        express: express
      },
      dataType: 'text',
      success: data => {
        iziToast.success({
          position: 'topCenter',
          message: 'Shedule delivery submitted.'
        });
        $('#errorfname').html('');
        $('#errorlname').html('');
        $('#errordelivery').html('');
        $('#errorphone').html('');
        $('#devfname').val('');
        $('#devlname').val('');
        $('#deliveryaddress').val('');
        $('#devphone').val('');
      }
    });
  }
};

News = () => {
  $.get('/news', data => {
    let news = jQuery.parseJSON(data);
    let text = '';
    news.forEach(n => {
      text += `<a href="#" class="list-group-item d-flex justify-content-between dark-grey-text newsmodal" id="news${
        n.id
      }">${n.subject.length > 37 ? n.subject.slice(0, 37) + '...' : n.subject}
      </a>`;
    });
    $('#allnews').html(`${text}`);
    $('#newscount').html(`${news.length}`);
  });
};

NewsModal = mdid => {
  let news = $(mdid).attr('id');
  let id = news.substring(4);
  $.ajax({
    url: '/news',
    type: 'POST',
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: 'text',
    success: data => {
      let singlenews = jQuery.parseJSON(data);
      singlenews.id == 0
        ? News()
        : $('#newmessage').html(`
     <div class="text-center">
     <span class="h2">${singlenews.subject}</span>
     </div>
     <br>
    <span class="h5">${singlenews.body}</span>
     `);
      created_at = new Date(`${singlenews.created_at}`);
      created = created_at.toString().slice(0, 24);
      let modal = singlenews.subject.length > 40 ? 'modal-fluid' : 'modal-lg';
      $('#newsmodaltype').addClass(`${modal}`);
      $('#newtime').html(`${created}`);
      $('#newsbtn').click();
    }
  });
};

ShipmentCount = shipment => {
  let count = shipment.filter(n => n.collected == 1);
  let all = shipment.length;
  let percent = count.length > 0 ? (count.length / all) * 100 : 0;
  let formpercent = percent == 0 ? 0 : percent.toPrecision(3);
  $('#shipmentscount').html(`${count.length}/${all}`);
  $('#shipmentpercent').html(`${formpercent}`);
  $('#shipmentbar').css('width', `${percent}%`);
  Shipmentvalue(shipment);
};

Shipmentvalue = value => {
  var formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD'
  });
  let money = value.reduce((total, val) => total + parseInt(val.spcharge), 0);
  let formatmoney = formatter.format(money);
  $('#shipmentvalue').html(`${formatmoney}`);
  Shipmentotaldue(value);
};

Shipmentotaldue = due => {
  var formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD'
  });
  let shpdue = due
    .filter(n => n.collected == 0)
    .reduce((total, val) => total + parseInt(val.spcharge), 0);
  let formatshpdue = formatter.format(shpdue);
  $('#shipmentddue').html(`${formatshpdue}`);
};

ScheduleRec = () => {
  $.get('/scheduledelivery/all', res => {
    let sch = jQuery.parseJSON(res);
    let output = '';
    sch.forEach((n, index) => {
      created_at = new Date(`${n.created_at}`);
      created = created_at.toString().slice(0, 24);
      updated_at = new Date(`${n.updated_at}`);
      if (index < 2) {
        output += `
        <button type="button" class="list-group-item d-flex justify-content-between dark-grey-text scheduleactivity" data-toggle="modal"
       data-target="#activitymodal" id="schac${n.id}">
       Sent schedule delivery on ${created}
       </button>`;
      }
    });
    $('#recentsch').html(`${output}`);
  });
};
{
  /* <button href="#" class="list-group-item d-flex justify-content-between dark-grey-text"  data-target="#activitymodal"></button> */
}
PreAlertsRec = () => {
  $.get('/prealerts/all', data => {
    let pre = jQuery.parseJSON(data);
    let output = '';
    pre.forEach((n, index) => {
      created_at = new Date(`${n.created_at}`);
      created = created_at.toString().slice(0, 24);
      updated_at = new Date(`${n.updated_at}`);
      if (index < 2) {
        output += `
        <button type="button" class="list-group-item d-flex justify-content-between dark-grey-text prealertactivity" data-toggle="modal"
        data-target="#activitymodal" id="preac${n.id}">
        Sent prealerts on ${created}
        </button>`;
      }
    });
    $('#recentpre').html(`${output}`);
  });
};

ViewSchActivity = id => {
  $.get(`/scheduledelivery/${id}`, data => {
    let sch = jQuery.parseJSON(data);
    created_at = new Date(`${sch.created_at}`);
    created = created_at.toString().slice(0, 24);
    let express = '';
    if (sch.express == 'true') {
      express = 'Yes';
    } else {
      express = 'No';
    }
    let output = `<table class="table table-striped w-100 table-responsive  text-nowrap">
    <thead>
      <tr>
      <th class="th-lg"><a>First Name <i class=" ml-1"></i></a></th>
      <th class="th-lg"><a>Last Name<i class=" ml-1"></i></a></th>
      <th class="th-lg"><a>Delivery Address<i class=" ml-1"></i></a></th>
      <th class="th-lg"><a>Phone Number<i class=" ml-1"></i></a></th>
      <th class="th-lg"><a>Express Delivery<i class=" ml-1"></i></a></th>
      </tr>
    </thead>
    <tbody>
    <td>${sch.firstname}</td>
		<td>${sch.lastname}</td>
		<td>${sch.address}</td>
		<td>${sch.phone}</td>
    <td>${express}</td>
        </tbody>
  </table>`;
    $('#activitytitle').html(`Recent Schdule delivery`);
    $('#recentevent').html(`${created}`);
    $('#activitybody').html(`${output}`);
  });
};

ViewPreActivity = id => {
  $.get(`/prealerts/${id}`, data => {
    let pre = jQuery.parseJSON(data);
    let output = ` 
    <div class="table-responsive text-nowrap" style="overflow-y: hidden">
    <!-- Table -->
    <table class="table table-hover mb-0 table-sm">
      <!-- Table head -->
      <thead>
        <tr>
          <th class="th-lg"><a>Vendor Name<i class=" ml-1"></i></a></th>
          <th class="th-lg"><a>Tracking No.<i class=" ml-1"></i></a></th>
          <th class="th-lg"><a>Courier<i class=" ml-1"></i></a></th>
          <th class="th-lg"><a>Product Name<i class=" ml-1"></i></a></th>
          <th class="th-lg"><a>Product Description<i class=" ml-1"></i></a></th>
          <th class="th-lg"><a>Value<i class=" ml-1"></i></a></th>
          <th class="th-lg"><a>Weight<i class=" ml-1"></i></a></th>
          <th class="th-lg"><a>Invoice<i class=" ml-1"></i></a></th>
          <th class="th-lg"><a>Expected Date<i class=" ml-1"></i></a></th>
          </tr>
      </thead>
      <tbody>
      <td>${pre.vender}</td>
      <td>${pre.tracking}</td>
      <td>${pre.courier}</td>
      <td>${pre.pkgname}</td>
      <td>${pre.description}</td>
      <td>$${pre.value}</td>
      <td>${pre.weight}lbs</td>
      <td><a class="invfile" id="invfile${pre.id}">
      ${pre.invoice}</a></td>
      <td>${pre.expected_date}</td>
      </tbody>
    </table>
  </div>`;
    created_at = new Date(`${pre.created_at}`);
    created = created_at.toString().slice(0, 24);
    $('#activitytitle').html(`Recent Prealert`);
    $('#recentevent').html(`${created}`);
    $('#activitybody').html(`${output}`);
  });
};

SeaFreightCalculator = () => {
  var formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD'
  });
  let length =
    $('#shippinglength').val().length > 0
      ? parseInt($('#shippinglength').val())
      : 0;
  let width =
    $('#shippingwidth').val().length > 0
      ? parseInt($('#shippingwidth').val())
      : 0;
  let height =
    $('#shippingheight').val().length > 0
      ? parseInt($('#shippingheight').val())
      : 0;
  let price =
    $('#itemprice').val().length > 0 ? parseInt($('#itemprice').val()) : 0;
  $.get('/shippingcalculator/data', data => {
    let fcharge = 0;
    let scharge = 0;
    let total = 0;
    let res = jQuery.parseJSON(data);
    let lwh = Number(length) * Number(width) * Number(height);
    fcharge = lwh / Number(res.exrate);
    let formatefcharge = fcharge * res.exrate;
    $('#fcharge').html(`${formatter.format(formatefcharge)}`);
    let prerate = parseFloat(res.prerate) / 100;
    scharge = price * prerate;
    let formatscharge = scharge * res.exrate;
    $('#scharge').html(`${formatter.format(formatscharge)}`);
    total = Number(fcharge) + Number(scharge);
    let formattotal = total * Number(res.exrate);
    $('#fctotal').html(`${formatter.format(formattotal)}`);
    $('#shippinglength').val('');
    $('#shippingwidth').val('');
    $('#shippingheight').val('');
    $('#itemprice').val('');
  });
};

AirFreightCalculator = () => {
  $.get('/shippingcalculator/air/data', data => {
    var formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD'
    });
    let lb = jQuery.parseJSON(data);
    let weight = parseInt($('#Airweight').val()) || 0;
    let price = parseFloat($('#Airitemprice').val()) || 0;
    let exrate = lb.exrate;
    let Freight = 0;
    let charge = 0;
    if (price > 0) {
      let cost = price >= 50.0 ? 5.0 : 1.5;
      if (weight <= 10) {
        switch (weight) {
          case 1:
            Freight = Number(cost) + Number(lb.w1lb);
            break;
          case 2:
            Freight = Number(cost) + Number(lb.w2lb);
            break;
          case 3:
            Freight = Number(cost) + Number(lb.w3lb);
            break;
          case 4:
            Freight = Number(cost) + Number(lb.w4lb);
            break;
          case 5:
            Freight = Number(cost) + Number(lb.w5lb);
            break;
          case 6:
            Freight = Number(cost) + Number(lb.w6lb);
            break;
          case 7:
            Freight = Number(cost) + Number(lb.w7lb);
            break;
          case 8:
            Freight = Number(cost) + Number(lb.w8lb);
            break;
          case 9:
            Freight = Number(cost) + lb.w9lb;
            break;
          case 10:
            Freight = Number(cost) + Number(lb.w10lb);
            break;
        }
      } else {
        over = Number(weight) - 10;
        if (over < 10) {
          lb11 = over * Number(lb.w11lbup);
          Freight = cost + Number(lb.w10lb) + Number(lb11);
        } else {
          lb21 = over * Number(lb.w21lbup);
          Freight = cost + Number(lb.w10lb) + Number(lb21);
        }
      }
      $('#airfreifee').html(`${formatter.format(Freight * Number(exrate))}`);
      console.log('Freight fee', Freight * exrate);
      $('#airprocfee').html(`${formatter.format(cost * Number(exrate))}`);
      console.log('processing fee', cost * exrate);
      $('#airtotal').html(
        `${formatter.format((Freight + cost) * Number(exrate))}`
      );
      console.log('total', (Freight + cost) * exrate);
    }
  });
};

NotificationCounter = (verify = 0, sp = 0, count = 0) => {
  let vers = 0,
    spts = 0;
  vers = Number.isNaN(verify) ? 0 : verify;
  spts = Number.isNaN(sp) ? 0 : sp;
  let sum = Number(vers) + Number(spts) + Number(count);
  $('#notificount').html(`${sum}`);
};
