// Loads  at start up .
$(document).ready(() => {
  Allusers();
  Allinvoice();
  InvoiceNt();
  InvoiceSearch();
  AdminData();
  DeliverySearch();
  Alldeliveries();
  footerDate();
  Allshipments();
  SeaFreightData();
  AirFreightData();
  Pdata();
  AllNews();
  $('#invloading').css('display', 'none');
});

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

// global declaration
let shipmentuserid = '';
let shipmentbtn = '';
/* Triggers. these call function when the respective part of the dom is manipulated .. 
 This trigger calls the UserSearch()*/
$('#usersearch').on('keyup', () => UserSearch());
// this trigger calls the UserCard()
$(document).on('click', '.userid', function() {
  var userID = this;
  UserCard(userID);
});
// this trigger calls the UserDelete()
$(document).on('click', '.userdel', function() {
  var userID = this;
  UserDelete(userID);
});
// this trigger calls the invoiceFile()
$(document).on('click', '.invoice', function() {
  var invId = this;
  InvoiceComplete(invId);
});
// this trigger calls the InvoiceFile()
$(document).on('click', '.invfile', function() {
  var invoicefileID = this;
  InvoiceFile(invoicefileID);
});
// this trigger calls the InvoiceNotificationUpate()
$(document).on('click', '.nt', function() {
  var ntid = this;
  InvoiceNotificationUpdate(ntid);
});
// this trigger calls the NewsCreate()
$('#newsendbtn').on('click', () => {
  NewsCreate();
});
// this trigger calls the InvoiceView()
$(document).on('click', '.searchin', function() {
  var invId = this;
  InvoiceView(invId);
});
// this trigger calls the DeliveryView()
$(document).on('click', '.sdnt', function() {
  let delId = this;
  DeliveryView(delId);
});
// this trigger calls the DeliveryComplete()
$(document).on('click', '.devcheck', function() {
  var delId = this;
  DeliveryComplete(delId);
});

$(document).on('click', '.adminshipcollected', function() {
  let shipmentid = $(this).attr('id');
  let id = shipmentid.substring(9);
  ShipmentCompleted(id);
});
$(document).on('click', '.updatestatusbtn', function() {
  shipmentbtn = $(this).attr('id');
});
$('#updateshipmentbtn').click(() => ViewStatusChange());

$('#seaupdatebtn').on('click', () => SeaFreight());

$('#adminupdate').on('click', () => Adminupdate());

$('#airupdatebtn').on('click', () => AirFreight());

$(document).on('click', '.addshipment', function() {
  shipmentuserid = this;
  $('#errortracking').html(' ');
  $('#errorstatus').html(' ');
  $('#errorcharge').html(' ');
  $('#errordescription').html(' ');
  $('#errordate').html(' ');
  $('#errorrefrence').html(' ');
  $('#upstatus').val('Status');
  $('#upshipping').val('');
  $('#updescription').val('');
  $('#updeliverydate').val('');
  $('#upreference').val('');
  $('#uptracting').val('');
});
// This trigger calls the CreateShipment()
$('#sendshipment').on('click', () => CreateShipment());
// This trigger calls the UpdateShipmentSearch()
$('#updatesearchuser').on('keyup', () => UpdateShipmentSearch());

$('#adminsearchshipments').on('keyup', () => SearchShipments());

// End of triggers

footerDate = () => {
  var date = new Date();
  var year = date.getFullYear();
  $('#footerdate').html(`${year}`);
};
// this function returns all of the users
Allusers = () => {
  $.get('/admin/allusers', data => {
    var user = jQuery.parseJSON(data);
    AdminVerifiedUser(user);
    UsersShipment(user);
    AdminDeletedUsers(user);
    let text = '';
    let amount = user.length;
    $('#allusercount').html(`${amount}`);
    window.setInterval(() => {
      UserCheck(amount);
    }, 10000);
    for (let i = 0; i < amount; i++) {
      let deleted = user[i].deleted
        ? ''
        : `<a class="red-text userdel" data-toggle="tooltip" data-placement="top" title="Remove" id="use${
            user[i].id
          }"><i class="fas fa-times" ></i></a>`;
      text += `
					<tr>
					<th scope="row">${user[i].xl}</th>
					<td>${user[i].name}</td>
					<td>${user[i].telephone}</td>
					<td>${user[i].email}</td>
					<td>
					<a class="blue-text userid" data-toggle="tooltip" data-placement="top" title="View ${
            user[i].name
          }" id="user${user[i].id}"><i class="fas fa-user"></i></a>
           <a class="teal-text" data-toggle="tooltip" data-placement="top">  </a>
          ${deleted}
					</td>
          </tr>`;
      // <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
    }
    $('#usercount').html(`${user.length}`);
    $('#alluserbody').html(`${text}`);
  });
};

AdminVerifiedUser = users => {
  let verified = users.filter(n => n.verified === '').length;
  $('#verifieduserscount').html(`${verified}`);
  $('#totalusercount').html(`${users.length}`);
};

AdminDeletedUsers = users => {
  let deletedusers = users.filter(n => n.deleted).length;
  $('#deleteduserscount').html(`${deletedusers}`);
};

UserCheck = amount => {
  $.get('/admin/allusers', data => {
    var user = jQuery.parseJSON(data);
    if (amount != user.length) {
      Allusers();
    }
  });
};

UserSearch = () => {
  if ($('#usersearch').val().length > 3) {
    $('#alluserbody').html('');
    $.ajax({
      url: '/admin/search',
      type: 'POST',
      data: {
        _token: CSRF_TOKEN,
        search: $('#usersearch').val()
      },
      dataType: 'text',
      success: data => {
        let users = jQuery.parseJSON(data);
        let searches = '';
        for (let i = 0; i < users.length; i++) {
          let deleted = users[i].deleted
            ? ''
            : `<a class="red-text userdel" data-toggle="tooltip" data-placement="top" title="Remove" id="use${
                users[i].id
              }"><i class="fas fa-times" ></i></a>`;
          searches += `<tr>
								<th scope="row">${users[i].xl}</th>
								<td>${users[i].name}</td>
								<td>${users[i].telephone}</td>
								<td>${users[i].email}</td>
								<td>
								<a class="blue-text userid" data-toggle="tooltip" data-placement="top" title="${
                  users[i].name
                }" id="user${users[i].id}"><i
								class="fas fa-user"></i></a>
                ${deleted}
								</td>
								</tr>
                `;
          // <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
        }

        $('#alluserbody').html(`${searches}`);
      }
    });
  } else {
    Allusers();
  }
};

UserCard = userID => {
  let data = $(userID).attr('id');
  let id = data.substring(4);
  $.ajax({
    url: '/admin/allusers',
    type: 'POST',
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: 'text',
    success: data => {
      let user = jQuery.parseJSON(data);
      let deleted = user.deleted == 1 ? 'Account Deleted' : 'Account Active';
      let usercard = `<!-- Card -->
				<div class="card profile-card">
				<div class="avatar z-depth-1-half mb-4">
				<img src="/storage/Userimage/${user.image}" class="rounded-circle" alt="${
        user.image
      }">
				</div>
				<div class="card-body pt-0 mt-0" >
				<div class="text-center">
				<h3 class="mb-3 font-weight-bold"><strong>${user.name}</strong></h3>
				</div>
				<ul class="striped list-unstyled">
				<li><strong>XL#:</strong> ${user.xl}</li>
				<li><strong>E-mail address:</strong> ${user.email}</li>
        <li><strong>Phone number:</strong> ${user.telephone}</li>
        <li><strong>TRN:</strong> ${user.trn}</li>
				<li><strong>Country:</strong> ${user.country}</li>
				<li><strong>City:</strong> ${user.city}</li>
				<li><strong>Parish:</strong> ${user.parish}</li>
				<li><strong>Joined:</strong> ${user.created}</li>
        <li><strong>Updated:</strong> ${user.updated}</li>
        <li><strong> ${deleted}</strong></li>
				</ul>
				</div>
				</div>`;
      $('#usercardbody').html(`${usercard}`);
    }
  });
};

UserDelete = UserID => {
  let del = $(UserID).attr('id');
  let id = del.substring(3);
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
    message: 'Are you sure you want to delete this user?',
    position: 'center',
    buttons: [
      [
        '<button style="color:white;"><b>YES</b></button>',
        function(instance, toast) {
          $.ajax({
            type: 'Post',
            url: '/admin/user/delete',
            data: {
              _token: CSRF_TOKEN,
              delete: id
            },
            dataType: 'text',
            success: function(response) {
              Allusers();
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

Allinvoice = () => {
  $.get('/admin/invoices/all', data => {
    var formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD'
    });
    let inv = jQuery.parseJSON(data);
    AdminInvoiceIncompleted(inv);
    AdminCountInvoice(inv);
    AdmininvoiceValue(inv);
    let invoice = '';
    let maxinv = 0;
    window.setInterval(() => {
      InCheck(inv.length);
    }, 10000);
    for (let i = 0; i < inv.length; i++) {
      created_at = new Date(`${inv[i].created_at}`);
      created = created_at.toString().slice(0, 24);
      updated_at = new Date(`${inv[i].updated_at}`);
      updated = updated_at.toString().slice(0, 24);
      if (inv[i].token == 'true') {
        _class = "<tr class='table-info'>";
        updated = '';
        check = '';
        maxinv = maxinv + 1;
      } else {
        _class = '<tr class="">';
        check = 'checked';
      }
      invoice += `
		${_class}
		<th scope="row">
		  <input class="form-check-input invoice" type="checkbox"  ${check}  id="inv${
        inv[i].id
      }" value="true">
		  <label class="form-check-label" for="inv${
        inv[i].id
      }" class="label-table"></label>
		</th>
		<td>${inv[i].xl}</td>
		<td>${inv[i].name}</td>
		<td>${inv[i].email}</td>
		<td>${inv[i].vender}</td>
		<td>${inv[i].tracking}</td>
    <td>${inv[i].courier}</td>
    <td>${inv[i].pkgname}</td>
		<td>${inv[i].description}</td>
		<td>${formatter.format(parseInt(inv[i].value))}</td>
		<td>${inv[i].weight}lbs</td>
		<td><a class="invfile" id="invfile${inv[i].id}">${inv[i].invoice}</a></td>
    <td>${created}</td>
    <td>${inv[i].expected_date}</td>
		<td>${updated}</td>
	  </tr>`;
    }
    // changes made here
    if (maxinv == inv.length) {
      $('#completedinvcount').removeClass('green');
      $('#completedinvcount').addClass('badge blue');
    } else {
      $('#completedinvcount').removeClass('blue');
      $('#completedinvcount').addClass('badge green');
    }
    $('#completedinvcount').html(`${maxinv}`);
    $('#invoicebody1').html(`${invoice}`);
    $('#invcount').html(`${inv.length}`);
  });
};

AdminInvoiceIncompleted = invoice => {
  let incompleted = invoice.filter(n => n.token == 'true').length;
  $('#adminincompletedinvoice').html(`${incompleted}`);
};

AdminCountInvoice = invoices => {
  $('#admintotalinvoices').html(`${invoices.length}`);
};

AdmininvoiceValue = invoices => {
  let money = invoices.reduce((total, val) => total + parseInt(val.value), 0);
  var formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD'
  });
  let formatmoney = formatter.format(money);
  $('#adminInvoiceValue').html(formatmoney);
};

InvoiceFile = invoicefileID => {
  let invc = $(invoicefileID).attr('id');
  let id = invc.substring(7);
  $.ajax({
    url: '/admin/invoice/file',
    type: 'POST',
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: 'text',
    success: data => {
      let file = jQuery.parseJSON(data);
      let ext = file.ext;
      if (ext < 1) {
        $('#invfile').html(
          `<img src="/storage/Invoice/${file.file}" style="width:100%">`
        );
      } else {
        $('#invfile').html(
          `<embed src="/storage/Invoice/${
            file.file
          }" frameborder="0" width="100%" height="450px">`
        );
      }
      $('#modalinv').click();
    }
  });
};

InvoiceComplete = invId => {
  let invoice = $(invId).attr('id');
  let inval = $(invId).val();
  let id = invoice.substring(3);
  $.ajax({
    url: '/admin/invoice/update',
    type: 'POST',
    data: {
      _token: CSRF_TOKEN,
      id: id,
      inv: inval
    },
    dataType: 'text',
    success: data => {
      Allinvoice();
      iziToast.success({
        position: 'topCenter',
        message: 'Invoice viewed'
      });
    }
  });
};

InvoiceNt = () => {
  $.get('/admin/invoice/notification', data => {
    let notify = jQuery.parseJSON(data);
    let text = '';
    let invoice = notify.length;
    DeliveryNt(invoice);
    for (let i = 0; i < invoice; i++) {
      text += `
	<a class="dropdown-item" href="/admin/invoices">
	<i class="fas fa-file-invoice mr-2" aria-hidden="true"></i>
	<span id="nt${notify[i].id}" class="nt">${notify[i].notification}</span>
    </a>
	`;
    }
    $('#invoicent').html(`${text}`);
  });
};

InvoiceSearch = () => {
  $('#invoicesearch').on('keyup', function() {
    let search = $('#invoicesearch').val();
    if (search.length > 0) {
      $.ajax({
        url: '/admin/invoice/search',
        type: 'POST',
        data: {
          _token: CSRF_TOKEN,
          search: search
        },
        dataType: 'text',
        success: data => {
          let inv = jQuery.parseJSON(data);
          let invoice = '';
          let maxinv = 0;
          $('#searchcount').html(`${inv.length}`);
          for (let i = 0; i < inv.length; i++) {
            if (inv[i].token == 'true') {
              _class = "<tr class='table-info'>";
              maxinv = maxinv + 1;
              check = '';
            } else {
              _class = '<tr class="">';
              check = 'checked';
            }
            created_at = new Date(`${inv[i].created_at}`);
            created = created_at.toString().slice(0, 24);
            updated_at = new Date(`${inv[i].updated_at}`);
            updated = updated_at.toString().slice(0, 24);
            invoice += `
				${_class}
				<th scope="row">
					<input class="form-check-input searchin" type="checkbox"  ${check}  id="inv${
              inv[i].id
            }" value="true">
					<label class="form-check-label" for="inv${
            inv[i].id
          }" class="label-table"></label>
				</th>
				<td>${inv[i].xl}</td>
				<td>${inv[i].name}</td>
				<td>${inv[i].email}</td>
				<td>${inv[i].vender}</td>
				<td>${inv[i].tracking}</td>
				<td>${inv[i].courier}</td>
				<td>${inv[i].description}</td>
				<td>$${inv[i].value}</td>
				<td>${inv[i].weight}lbs</td>
				<td><a href="/storage/invoice/${inv[i].invoice}">${inv[i].invoice}</a></td>
        <td>${created}</td>
        <td>${inv[i].expected_date}</td>
				<td>${updated}</td>
				</tr>`;
          }
          if (maxinv == inv.length) {
            $('#completedinvcount').removeClass('green');
            $('#completedinvcount').addClass('badge red');
          } else {
            $('#completedinvcount').removeClass('red');
            $('#completedinvcount').addClass('badge green');
          }
          $('#completedinvcount').html(`${maxinv}`);
          $('#invoicebody1').html(`${invoice}`);
          $('#invcount').html(`${inv.length}`);
          $('#invoicebody1').html(`${invoice}`);
        }
      });
    } else {
      $('#searchcount').html(0);
      Allinvoice();
    }
  });
};

InvoiceNotificationUpdate = ntid => {
  let invoice = $(ntid).attr('id');
  let id = invoice.substring(2);
  $.ajax({
    url: '/admin/invoice/notification',
    type: 'POST',
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: 'text',
    success: data => {}
  });
};

DeliveryNt = invoice => {
  $.get('/admin/sheduledelivery/notification', data => {
    let notify = jQuery.parseJSON(data);
    let text = '';
    let sdnotify = notify.length;
    NotificationCount(invoice, sdnotify);
    notify.forEach(not => {
      text += `
	<a class="dropdown-item" href="/admin/delivery">
	<i class="fas fa-calendar-check mr-2" aria-hidden="true"></i>
	<span id="sdnt${not.id}" class="sdnt">${not.notification}</span>
    </a>
	`;
    });
    $('#deliverynt').html(`${text}`);
  });
};

DeliveryView = delId => {
  let delivery = $(delId).attr('id');
  let id = delivery.substring(4);
  $.ajax({
    url: '/admin/delivery/view',
    type: 'POST',
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: 'text',
    success: data => {}
  });
};

Alldeliveries = () => {
  $.get('/admin/all/delivery', data => {
    let dev = jQuery.parseJSON(data);
    AdminDisplayDelivery(dev);
    AdminDeliveryCount(dev);
    window.setInterval(() => {
      DevCheck(dev.length);
    }, 10000);
    let check = '';
    let mindev = 0;
    let express = '';
    let text = '';
    for (i = 0; i < dev.length; i++) {
      created_at = new Date(`${dev[i].created_at}`);
      created = created_at.toString().slice(0, 24);
      updated_at = new Date(`${dev[i].updated_at}`);
      updated = updated_at.toString().slice(0, 24);
      if (dev[i].token == 'true') {
        _class = "<tr class='table-info'>";
        updated = '';
        check = '';
        mindev = mindev + 1;
      } else {
        _class = '<tr class="">';
        check = 'checked';
      }
      if (dev[i].express == 'true') {
        express = 'Yes';
      } else {
        express = 'No';
      }
      text += `
      ${_class}
      <th scope="row">
		  <input class="form-check-input devcheck" type="checkbox" id="dev${
        dev[i].id
      }" value="true" ${check}>
		  <label class="form-check-label" for="dev${
        dev[i].id
      }" class="label-table"></label>
		</th>
		<td>${dev[i].firstname}</td>
		<td>${dev[i].lastname}</td>
		<td>${dev[i].address}</td>
		<td>${dev[i].phone}</td>
    <td>${express}</td>
    <td>${created}</td>
    <td>${updated}</td>
	  </tr>`;
    }
    if (mindev == dev.length) {
      $('#mindev').removeClass('green');
      $('#mindev').addClass('badge blue');
    } else {
      $('#mindev').removeClass('blue');
      $('#mindev').addClass('badge green');
    }
    $('#deliverytb').html(`${text}`);
    $('#mindev').html(`${mindev}`);
    $('#maxdev').html(`${dev.length}`);
  });
};

AdminDisplayDelivery = delivery => {
  let output = '';
  delivery.forEach((n, index) => {
    if (index < 2) {
      created_at = new Date(`${n.created_at}`);
      created = created_at.toString().slice(0, 24);
      output += `
    <tr>
    <td class="border-top-0">${n.firstname}&nbsp;${n.lastname}</td>
    <td class="border-top-0">${n.address}</td>
    <td class="border-top-0 hour">
      <span class="grey-text float-right">
        <i class="far fa-clock-o" aria-hidden="true"></i>${created}
      </span>
    </td>
  </tr>
    `;
    }
  });
  $('#adminincomedeliveries').html(`${output}`);
};

AdminDeliveryCount = deliveries => {
  let delcount = deliveries.filter(n => n.token == 'true').length;
  $('#undelivereddeliveries').html(`${delcount}`);
};

DeliveryComplete = delId => {
  let devid = $(delId).attr('id');
  let dev = $(delId).val();
  let id = devid.substring(3);
  $('#devsearchcount').html(0);
  $.ajax({
    url: '/admin/delivery/update',
    type: 'POST',
    data: {
      _token: CSRF_TOKEN,
      id: id,
      value: dev
    },
    dataType: 'text',
    success: data => {
      Alldeliveries();
      iziToast.success({
        position: 'topCenter',
        message: 'Schedule delivery delivered.'
      });
    }
  });
};

InCheck = invlen => {
  $.get('/admin/invoices/all', data => {
    let inv = jQuery.parseJSON(data);
    if (invlen != inv.length) {
      Allinvoice();
    }
  });
};

DevCheck = devlen => {
  $.get('/admin/all/delivery', data => {
    let dev = jQuery.parseJSON(data);
    if (devlen != dev.length) {
      Alldeliveries();
    }
  });
};

InvoiceView = invId => {
  let invoice = $(invId).attr('id');
  let inval = $(invId).val();
  let id = invoice.substring(3);
  $.ajax({
    url: '/admin/invoice/update',
    type: 'POST',
    data: {
      _token: CSRF_TOKEN,
      id: id,
      inv: inval
    },
    dataType: 'text',
    success: data => {
      Allinvoice();
      iziToast.success({
        position: 'topCenter',
        message: 'Invoice viewed'
      });
    }
  });
};

DeliverySearch = () => {
  $('#deliverysearch').on('keyup', function() {
    let search = $('#deliverysearch').val();
    if (search.length > 0) {
      $.ajax({
        url: '/admin/delivery/search',
        type: 'POST',
        data: {
          _token: CSRF_TOKEN,
          search: search
        },
        dataType: 'text',
        success: data => {
          let dev = jQuery.parseJSON(data);
          $('#devsearchcount').html(`${dev.length}`);
          let check = '';
          let mindev = 0;
          let express = '';
          let text = '';
          for (i = 0; i < dev.length; i++) {
            if (dev[i].token == 'true') {
              _class = "<tr class='table-info'>";
              check = '';
              mindev = mindev + 1;
            } else {
              _class = '<tr class="">';
              check = 'checked';
            }

            if (dev[i].express == 'true') {
              express = 'Yes';
            } else {
              express = 'No';
            }
            created_at = new Date(`${dev[i].created_at}`);
            created = created_at.toString().slice(0, 24);
            updated_at = new Date(`${dev[i].updated_at}`);
            updated = updated_at.toString().slice(0, 24);
            text += `
            ${_class}
            <th scope="row">
            <input class="form-check-input devcheck" type="checkbox" id="dev${
              dev[i].id
            }" value="true" ${check}>
            <label class="form-check-label" for="dev${
              dev[i].id
            }" class="label-table"></label>
          </th>
          <td>${dev[i].firstname}</td>
          <td>${dev[i].lastname}</td>
          <td>${dev[i].address}</td>
          <td>${dev[i].phone}</td>
          <td>${express}</td>
          <td>${created}</td>
          <td>${updated}</td>
          </tr>`;
          }
          if (mindev == dev.length) {
            $('#mindev').removeClass('green');
            $('#mindev').addClass('badge red');
          } else {
            $('#mindev').removeClass('red');
            $('#mindev').addClass('badge green');
          }
          $('#deliverytb').html(`${text}`);
          $('#mindev').html(`${mindev}`);
          $('#maxdev').html(`${dev.length}`);
        }
      });
    } else {
      Alldeliveries();
      $('#devsearchcount').html(0);
    }
  });
};

NewsCreate = () => {
  let subject = $('#newsubject').val();
  let body = $('#newsbody').val();
  if (subject.length < 3) {
    $('#errorsubject').html(`Error subject must be at least 3 character.`);
  } else if (body.length < 3) {
    $('#errorbody').html(`Error body must be at least 3 character.`);
  } else {
    $('#newsubject').val('');
    $('#newsbody').val('');
    $('#errorsubject').html(``);
    $('#errorbody').html(``);
    iziToast.success({
      position: 'topCenter',
      message: 'New news posted'
    });
    $.ajax({
      url: '/admin/news',
      type: 'POST',
      data: {
        _token: CSRF_TOKEN,
        subject: subject,
        body: body
      },
      dataType: 'text',
      success: data => {
        AllNews();
      }
    });
  }
};

AllNews = () => {
  $.get('/admin/news/all', data => {
    let news = jQuery.parseJSON(data);
    $('#admintotalnews').html(`${news.length}`);
  });
};

// this function gets the admin thats currently logged in .
AdminData = () => {
  $.get('/admin/edit/data', data => {
    admin = jQuery.parseJSON(data);
    $('#adminname').val(`${admin.name}`);
    $('#adminemail').val(`${admin.email}`);
    $('#admincardname').html(`${admin.name}`);
    $('#admincardemail').html(`${admin.email}`);
    $('#adminMainname').html(`${admin.name}`);
  });
};

CreateShipment = () => {
  let uid = $(shipmentuserid).attr('id');
  let id = uid.substring(4);
  let tracking = $('#uptracting').val();
  let reference = $('#upreference').val();
  let date = $('#updeliverydate').val();
  let description = $('#updescription').val();
  let charge = $('#upshipping').val();
  let status = $('#upstatus').val();
  if (tracking.length < 3) {
    $('#errortracking').html('Error, Invalid tracking number.');
  } else if (reference.length < 3) {
    $('#errorrefrence').html('Error, Invalid reference number.');
  } else if (date.length < 1) {
    $('#errordate').html('Error, Invalid date.');
  } else if (description.length < 3) {
    $('#errordescription').html('Error, Invalid description.');
  } else if (charge.length < 1) {
    $('#errorcharge').html('Error, Invalid charge.');
  } else if (status == 'status') {
    $('#errorstatus').html('Error, Invalid status.');
  } else {
    $('#errortracking').html(' ');
    $('#errorstatus').html(' ');
    $('#errorcharge').html(' ');
    $('#errordescription').html(' ');
    $('#errordate').html(' ');
    $('#errorrefrence').html(' ');
    $('#upstatus').val('Status');
    $('#upshipping').val('');
    $('#updescription').val('');
    $('#updeliverydate').val('');
    $('#upreference').val('');
    $('#uptracting').val('');
    $('#closespup').click();
    iziToast.success({
      position: 'topCenter',
      message: 'Shipment Added'
    });
    $.ajax({
      type: 'POST',
      url: '/admin/add/shipment',
      data: {
        _token: CSRF_TOKEN,
        id: id,
        tracking: tracking,
        reference: reference,
        date: date,
        description: description,
        charge: charge,
        status: status
      },
      dataType: 'text',
      success: function(response) {}
    });
  }
};

UsersShipment = users => {
  let output = '';
  users.forEach(user => {
    if (user.deleted) {
    } else {
      output += `  <tr>
    <th scope="row" />
    <td>${user.xl}</td>
    <td>${user.name}</td>
    <td>${user.email}</td>
    <td>${user.telephone}</td>
    <td>${user.trn}</td>
  
    <td>
      <button 
        id="upsh${user.id}"
        type="button"
        data-toggle="modal"
        data-target="#updateshipmentmodal"
        class="btn btn-outline-blue btn-rounded btn-md px-2 addshipment"
      >
        <i class="fas fa-pencil-alt mt-0" />
      </button>
      <div class="text-center" />
    </td>
  </tr>
  
  `;
    }
  });
  $('#addshipments').html(`${output}`);
};

UpdateShipmentSearch = () => {
  let search = $('#updatesearchuser').val();
  if (search.length > 0) {
    $.ajax({
      type: 'POST',
      url: '/admin/search',
      data: {
        _token: CSRF_TOKEN,
        search: search
      },
      dataType: 'text',
      success: function(response) {
        let users = jQuery.parseJSON(response);
        let count = users.filter(n => n.deleted == false);
        $('#updatesearchresult').html(`${count.length}`);
        let output = '';
        users.forEach(user => {
          if (user.deleted) {
          } else {
            output += `  <tr>
         <th scope="row" />
         <td>${user.xl}</td>
         <td>${user.name}</td>
          <td>${user.email}</td>
         <td>${user.telephone}</td>
          <td>${user.trn}</td>
         <td>
         <button 
        id="upsh${user.id}"
        type="button"
        data-toggle="modal"
        data-target="#updateshipmentmodal"
        class="btn btn-outline-blue btn-rounded btn-md px-2 addshipment"
       >
      <i class="fas fa-pencil-alt mt-0" />
      </button>
      <div class="text-center" />
      </td>
      </tr>
    `;
          }
        });
        $('#addshipments').html(`${output}`);
      }
    });
  } else {
    Allusers();
    $('#updatesearchresult').html('0');
  }
};

Allshipments = () => {
  $.get('/admin/shipments/all', data => {
    var formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD'
    });
    let shipment = jQuery.parseJSON(data);
    AdminCountShipments(shipment);
    AdminShipmentValue(shipment);
    let shipp = shipment.filter(n => n.collected == 0);
    $('#shipp').html(`${shipp.length}`);
    $('#shipa').html(`${shipment.length}`);
    if (shipp.length == shipment.length) {
      $('#shipp').removeClass('badge-success');
      $('#shipp').addClass('badge-primary');
    } else {
      $('#shipp').removeClass('badge-primary');
      $('#shipp').addClass('badge-success');
    }
    let output = '';
    shipment.forEach(n => {
      created_at = new Date(`${n.created_at.date}`);
      created = created_at.toString().slice(0, 24);
      updated_at = new Date(`${n.updated_at.date}`);
      updated = updated_at.toString().slice(0, 24);
      let collected = n.collected == 1 ? updated : '';
      let check = n.collected == 1 ? 'checked' : '';
      let _class = n.collected == 1 ? '<tr>' : " <tr class='table-info'>";
      let ischeck =
        n.status != 'Ready for Pick Up'
          ? ''
          : `<input class="form-check-input adminshipcollected" type="checkbox" ${check} id="adminship${
              n.id
            }" value="true">
      <label class="form-check-label" for="adminship${
        n.id
      }" class="label-table"></label>`;
      let action =
        n.status == 'Ready for Pick Up'
          ? ''
          : `
          <button
              id="shipstat${n.id}"
              type="button"
              data-toggle="modal"
              data-target="#viewshipmentstatus"
              class="btn btn-outline-blue btn-rounded btn-md px-2 updatestatusbtn"
             >
            <i class="fas fa-pencil-alt mt-0" />
            </button>`;
      output += `
    ${_class}
      <td>${ischeck}</td>
      <td>${n.xl}</td>
      <td>${n.tracking_no}</td>
      <td>${n.reference_no}</td>
      <td>${n.description}</td>
      <td>${n.delivery_date}</td>
      <td>${formatter.format(parseInt(n.spcharge))}</td>
      <td>${n.status}</td>
      <td>${created}</td>
      <td>${collected}</td>
      <td>${action}</td>
      </tr>`;
    });
    $('#adminshipments').html(`${output}`);
  });
};

SearchShipments = () => {
  let search = $('#adminsearchshipments').val();
  if (search.length > 0) {
    $.ajax({
      type: 'POST',
      url: '/admin/search/shipments',
      data: {
        _token: CSRF_TOKEN,
        search: search
      },
      dataType: 'text',
      success: function(response) {
        var formatter = new Intl.NumberFormat('en-US', {
          style: 'currency',
          currency: 'USD'
        });
        let shipment = jQuery.parseJSON(response)
        let shipp = shipment.filter(n => n.collected == 0);
        $('#shipp').html(`${shipp.length}`);
        $('#shipa').html(`${shipment.length}`);
        if (shipp.length == shipment.length) {
          $('#shipp').removeClass('badge-success');
          $('#shipp').addClass('badge-primary');
        } else {
          $('#shipp').removeClass('badge-primary');
          $('#shipp').addClass('badge-success');
        }
        let output = '';
        shipment.forEach(n => {
          created_at = new Date(`${n.created_at.date}`);
          created = created_at.toString().slice(0, 24);
          updated_at = new Date(`${n.updated_at.date}`);
          updated = updated_at.toString().slice(0, 24);
          let collected = n.collected == 1 ? updated : '';
          let check = n.collected == 1 ? 'checked' : '';
          let _class = n.collected == 1 ? '<tr>' : " <tr class='table-info'>";
          let ischeck =
            n.status != 'Ready for Pick Up'
              ? ''
              : `<input class="form-check-input adminshipcollected" type="checkbox" ${check} id="adminship${
                  n.id
                }" value="true">
          <label class="form-check-label" for="adminship${
            n.id
          }" class="label-table"></label>`;
          let action =
            n.status == 'Ready for Pick Up'
              ? ''
              : `
              <button
                  id="shipstat${n.id}"
                  type="button"
                  data-toggle="modal"
                  data-target="#viewshipmentstatus"
                  class="btn btn-outline-blue btn-rounded btn-md px-2 updatestatusbtn"
                 >
                <i class="fas fa-pencil-alt mt-0" />
                </button>`;
          output += `
        ${_class}
          <td>${ischeck}</td>
          <td>${n.xl}</td>
          <td>${n.tracking_no}</td>
          <td>${n.reference_no}</td>
          <td>${n.description}</td>
          <td>${n.delivery_date}</td>
          <td>${formatter.format(parseInt(n.spcharge))}</td>
          <td>${n.status}</td>
          <td>${created}</td>
          <td>${collected}</td>
          <td>${action}</td>
          </tr>`;
        });
        $('#adminshipments').html(`${output}`);
      }
    });
  } else {
    Allshipments();
  }
};

AdminCountShipments = shipments => {
  let shipmentcount = shipments.length;
  $('#admintotalshipment').html(`${shipmentcount}`);
};

AdminShipmentValue = shipments => {
  var formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD'
  });
  let money = shipments.reduce(
    (total, val) => total + parseInt(val.spcharge),
    0
  );
  let formatmoney = formatter.format(money);
  $('#adminshipmentvalue').html(formatmoney);
};

ShipmentCompleted = id => {
  $.ajax({
    type: 'Post',
    url: '/admin/shipment/completed',
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: 'text',
    success: function(response) {
      Allshipments();
      iziToast.success({
        position: 'topCenter',
        message: 'Shipment Delivered'
      });
    }
  });
};

SeaFreight = () => {
  let exrate =
    $('#exchangerate').val().length < 1 ? 0 : $('#exchangerate').val();
  let percentage =
    $('#percentage').val().length < 1 ? 0 : $('#percentage').val();
  $.ajax({
    type: 'POST',
    url: '/admin/shipmentcalculator',
    data: {
      _token: CSRF_TOKEN,
      exrate: parseFloat(exrate),
      percentage: parseInt(percentage)
    },
    dataType: 'text',
    success: function(response) {
      $('#exchangerate').val('');
      $('#percentage').val('');
      iziToast.success({
        position: 'topCenter',
        message: 'Rates Updated'
      });
      SeaFreightData();
    }
  });
};

AirFreight = () => {
  let exchange =
    $('#Aexchangerate').val().length > 0 ? $('#Aexchangerate').val() : 0;
  let shw1 =
    $('#shippingweight1').val().length > 0 ? $('#shippingweight1').val() : 0;
  let shw2 =
    $('#shippingweight2').val().length > 0 ? $('#shippingweight2').val() : 0;
  let shw3 =
    $('#shippingweight3').val().length > 0 ? $('#shippingweight3').val() : 0;
  let shw4 =
    $('#shippingweight4').val().length > 0 ? $('#shippingweight4').val() : 0;
  let shw5 =
    $('#shippingweight5').val().length > 0 ? $('#shippingweight5').val() : 0;
  let shw6 =
    $('#shippingweight6').val().length > 0 ? $('#shippingweight6').val() : 0;
  let shw7 =
    $('#shippingweight7').val().length > 0 ? $('#shippingweight7').val() : 0;
  let shw8 =
    $('#shippingweight8').val().length > 0 ? $('#shippingweight8').val() : 0;
  let shw9 =
    $('#shippingweight9').val().length > 0 ? $('#shippingweight9').val() : 0;
  let shw10 =
    $('#shippingweight10').val().length > 0 ? $('#shippingweight10').val() : 0;
  $.ajax({
    type: 'POST',
    url: '/admin/shipmentcalculator/air',
    data: {
      _token: CSRF_TOKEN,
      exrate: exchange,
      shw10: shw10,
      shw9: shw9,
      shw8: shw8,
      shw7: shw7,
      shw6: shw6,
      shw5: shw5,
      shw4: shw4,
      shw3: shw3,
      shw2: shw2,
      shw1: shw1
    },
    dataType: 'text',
    success: function(response) {
      AirFreightData();
      iziToast.success({
        position: 'topCenter',
        message: 'Air freight rates updated'
      });
    }
  });
};

AirFreightData = () => {
  $.get('/admin/air/data', data => {
    let res = jQuery.parseJSON(data);
    $('#Aexchangerate').val(`${res.exrate}`);
    $('#shippingweight1').val(`${res.w1lb}`);
    $('#shippingweight2').val(`${res.w2lb}`);
    $('#shippingweight3').val(`${res.w3lb}`);
    $('#shippingweight4').val(`${res.w4lb}`);
    $('#shippingweight5').val(`${res.w5lb}`);
    $('#shippingweight6').val(`${res.w6lb}`);
    $('#shippingweight7').val(`${res.w7lb}`);
    $('#shippingweight8').val(`${res.w8lb}`);
    $('#shippingweight9').val(`${res.w9lb}`);
    $('#shippingweight10').val(`${res.w10lb}`);
  });
};

SeaFreightData = () => {
  $.get('/admin/sea/data', data => {
    let res = jQuery.parseJSON(data);
    $('#exchangerate').val(`${res.exrate}`);
    $('#percentage').val(`${res.prerate}`);
  });
};

ViewStatusChange = () => {
  let status = $('#updatesentstatus').val();
  let id = shipmentbtn.substring(8);
  if (status == 'status') {
    iziToast.error({
      position: 'topCenter',
      message: 'Error, Invalid status.'
    });
  } else {
    $.ajax({
      type: 'Post',
      url: '/admin/shipment/status',
      data: {
        _token: CSRF_TOKEN,
        id: id,
        status: status
      },
      dataType: 'text',
      success: function(response) {
        Allshipments();
        iziToast.success({
          position: 'topCenter',
          message: 'Status Changed.'
        });
      }
    });
  }
};

Adminupdate = () => {
  let name = $('#adminname').val();
  let email = $('#adminemail').val();
  if (name.length < 3) {
    $('#adminerrorname').html('Error, invalid name.');
  } else if (!validateEmail(email)) {
    $('#adminerroremail').html('Error, Invalid Email');
  } else {
    $.ajax({
      type: 'POST',
      url: '/admin/update/admin',
      data: {
        name: name,
        email: email,
        _token: CSRF_TOKEN
      },
      dataType: 'text',
      success: function(response) {
        $('#adminerrorname').html(' ');
        $('#adminerroremail').html(' ');
        AdminData();
        iziToast.success({
          position: 'topCenter',
          message: 'Admin account updated.'
        });
      }
    });
  }
};

Pdata = () => {
  $('#adminoldpass').val('');
  $('#adminpschbtn').click(() => {
    if ($('#adminoldpass').val().length < 6) {
      $('#erroroldpassword').html('Must be at least 6 characters');
    } else {
      $.ajax({
        type: 'POST',
        url: '/admin/pdata',
        data: {
          _token: CSRF_TOKEN,
          data: $('#adminoldpass').val()
        },
        dataType: 'text',
        success: function(response) {
          var something = jQuery.parseJSON(response);
          if (something.passed == 0) {
            $('#erroroldpassword').html('Password doesn`t match');
          } else if ($('#adminnewpass').val().length < 6) {
            $('#adminnewpassword').html('Must be at least 6 characters');
          } else if ($('#adminconfirmpass').val().length < 6) {
            $('#errorconfirmpassword').html('Must be at least 6 characters');
          } else if ($('#adminnewpass').val() != $('#adminconfirmpass').val()) {
            $('#erroroldpassword').html('Password dont match');
          } else {
            $('#adminpschbtn').addClass('disabled');
            $.ajax({
              type: 'POST',
              url: '/admin/passwordUpdate',
              data: {
                _token: CSRF_TOKEN,
                newpass: $('#adminnewpass').val()
              },
              dataType: 'text',
              success: function(response) {
                $('#pschbtn').removeClass('disabled');
                $('#erroroldpassword').html('');
                $('#adminnewpassword').html('');
                $('#errorconfirmpassword').html('');
                $('#adminoldpass').val('');
                $('#adminnewpass').val('');
                $('#adminconfirmpass').val('');
                $('#adminclosepasswordmodal').click();
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

NotificationCount = (invoice = 0, delivery = 0) => {
  let sum = 0;
  sum = parseInt(invoice) + parseInt(delivery);
  $('#invoicentc').html(`${sum}`);
};

window.setInterval(() => {
  InvoiceNt();
}, 10000);
