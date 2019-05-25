// Loads  at start up ..
$(document).ready(() => {
  Allusers();
  Allinvoice();
  InvoiceNt();
  InvoiceSearch();
  $("#invloading").css("display", "none");
  // $(document).ajaxStart(function() {
  // 	$('#invloading').css('display', 'block');
  // });
  // $(document).ajaxComplete(function() {
  // 	$('#invloading').css('display', 'none');
  // });
});

// this function returns all of the users
Allusers = () => {
  $.get("/admin/allusers", data => {
    var user = jQuery.parseJSON(data);
    let text = "";
    let amount = user.length;
    $("#allusercount").html(`${user.length}`);
    window.setInterval(() => {
      UserCheck(amount);
    }, 10000);
    for (let i = 0; i < amount; i++) {
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
					<a class="red-text userdel" data-toggle="tooltip" data-placement="top" title="Remove" id="use${
            user[i].id
          }"><i class="fas fa-times" ></i></a>
					</td>
          </tr>`;
      // <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
    }
    $("#alluserbody").html(`${text}`);
  });
};

UserCheck = amount => {
  $.get("/admin/allusers", data => {
    var user = jQuery.parseJSON(data);
    if (amount != user.length) {
      Allusers();
    }
  });
};

$("#usersearch").on("keyup", () => {
  if ($("#usersearch").val().length > 3) {
    $("#alluserbody").html("");
    $.ajax({
      url: "/admin/search",
      type: "POST",
      data: {
        _token: CSRF_TOKEN,
        search: $("#usersearch").val()
      },
      dataType: "text",
      success: data => {
        let users = jQuery.parseJSON(data);
        let searches = "";
        for (let i = 0; i < users.length; i++) {
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
								
								<a class="red-text userdel" data-toggle="tooltip" data-placement="top" title="Delete user" id="del${
                  users[i].id
                }"><i class="fas fa-times"></i></a>
								</td>
								</tr>
                `;
          // <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
        }

        $("#alluserbody").html(`${searches}`);
      }
    });
  } else {
    Allusers();
  }
});

// this function gets the id of the user on click
$(document).on("click", ".userid", function() {
  let data = $(this).attr("id");
  let id = data.substring(4);
  $.ajax({
    url: "/admin/allusers",
    type: "POST",
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: "text",
    success: data => {
      let user = jQuery.parseJSON(data);
      let usercard = `<!-- Card -->
				<div class="card profile-card">

				<!-- Avatar -->
				<div class="avatar z-depth-1-half mb-4">
				<img src="/storage/Userimage/${
          user.image
        }" class="rounded-circle" alt="First sample avatar image">
				</div>

				<div class="card-body pt-0 mt-0" >
				<div class="text-center">
				<h3 class="mb-3 font-weight-bold"><strong>${user.name}</strong></h3>
				</div>

				<ul class="striped list-unstyled">
				<li><strong>XL#:</strong> ${user.xl}</li>

				<li><strong>E-mail address:</strong> ${user.email}</li>

				<li><strong>Phone number:</strong> ${user.telephone}</li>

				<li><strong>Country:</strong> ${user.country}</li>

				<li><strong>City:</strong> ${user.city}</li>

				<li><strong>Parish:</strong> ${user.parish}</li>

				<li><strong>Joined:</strong> ${user.created}</li>

				<li><strong>Updated:</strong> ${user.updated}</li>
				</ul>
				<!-- Name -->


				</div>

				</div>`;
      $("#usercardbody").html(`${usercard}`);
    }
  });
});

// this function will delete a user from the database
$(document).on("click", ".userdel", function() {
  let del = $(this).attr("id");
  let id = del.substring(3);
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
    message: "Are you sure you want to delete this user?",
    position: "center",
    buttons: [
      [
        '<button style="color:white;"><b>YES</b></button>',
        function(instance, toast) {
          $.ajax({
            type: "Post",
            url: "/admin/user/delete",
            data: {
              _token: CSRF_TOKEN,
              delete: id
            },
            dataType: "text",
            success: function(response) {
              Allusers();
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
// this function shows all of the pre-alerts to the admin
Allinvoice = () => {
  $.get("/admin/invoices/all", data => {
    let inv = jQuery.parseJSON(data);
    let invoice = "";
    let maxinv = 0;
    window.setInterval(() => {
      InCheck(inv.length);
    }, 10000);
    for (let i = 0; i < inv.length; i++) {
      if (inv[i].token == "true") {
        _class = "<tr class='table-info'>";
        check = "";
        maxinv = maxinv + 1;
      } else {
        _class = '<tr class="">';
        check = "checked";
      }
      created_at = new Date(`${inv[i].created_at}`);
      created = created_at.toString().slice(0, 24);
      updated_at = new Date(`${inv[i].updated_at}`);
      updated = updated_at.toString().slice(0, 24);
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
		<td>${inv[i].description}</td>
		<td>$${inv[i].value}</td>
		<td>${inv[i].weight}lbs</td>
		<td><a href="/storage/invoice/${inv[i].invoice}">${inv[i].invoice}</a></td>
		<td>${created}</td>
		<td>${updated}</td>
	  </tr>`;
    }
    if (maxinv == inv.length) {
      $("#completedinvcount").removeClass("green");
      $("#completedinvcount").addClass("badge red");
    } else {
      $("#completedinvcount").removeClass("red");
      $("#completedinvcount").addClass("badge green");
    }
    $("#completedinvcount").html(`${maxinv}`);
    $("#invoicebody1").html(`${invoice}`);
    $("#invcount").html(`${inv.length}`);
  });
};
$(document).on("click", ".invoice", function() {
  let invoice = $(this).attr("id");
  let inval = $(this).val();
  let id = invoice.substring(3);
  $.ajax({
    url: "/admin/invoice/update",
    type: "POST",
    data: {
      _token: CSRF_TOKEN,
      id: id,
      inv: inval
    },
    dataType: "text",
    success: data => {
      Allinvoice();
      iziToast.success({
        position: "topCenter",
        message: "Invoice viewed"
      });
    }
  });
});

InvoiceNt = () => {
  $.get("/admin/invoice/notification", data => {
    let notify = jQuery.parseJSON(data);
    let text = "";
    let invoice = notify.length;
    NotificationCount(invoice);
    for (let i = 0; i < notify.length; i++) {
      text += `
	<a class="dropdown-item" href="admin/invoices">
	<i class="fas fa-file-invoice mr-2" aria-hidden="true"></i>
	<span id="nt${notify[i].id}" class="nt">${notify[i].notification}</span>
    </a>
	`;
    }
    $("#invoicent").html(`${text}`);
  });
};

$(document).on("click", ".nt", function() {
  let invoice = $(this).attr("id");
  let id = invoice.substring(2);
  $.ajax({
    url: "/admin/invoice/notification",
    type: "POST",
    data: {
      _token: CSRF_TOKEN,
      id: id
    },
    dataType: "text",
    success: data => {}
  });
});

InCheck = invlen => {
  $.get("/admin/invoices/all", data => {
    let inv = jQuery.parseJSON(data);
    if (invlen != inv.length) {
      Allinvoice();
    }
  });
};

NotificationCount = invoice => {
  let sum = 0;
  sum = invoice;
  $("#invoicentc").html(`${sum}`);
};

InvoiceSearch = () => {
  $("#invoicesearch").on("keyup", function() {
    let search = $("#invoicesearch").val();
    if (search.length > 0) {
      $.ajax({
        url: "/admin/invoice/search",
        type: "POST",
        data: {
          _token: CSRF_TOKEN,
          search: search
        },
        dataType: "text",
        success: data => {
          let inv = jQuery.parseJSON(data);
          let invoice = "";
          $("#searchcount").html(`${inv.length}`);
          for (let i = 0; i < inv.length; i++) {
            if (inv[i].token == "true") {
              _class = "<tr class='table-info'>";
              check = "";
            } else {
              _class = '<tr class="">';
              check = "checked";
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
				<td>${updated}</td>
				</tr>`;
          }
          $("#invoicebody1").html(`${invoice}`);
        }
      });
    } else {
      $("#searchcount").html(0);
      Allinvoice();
    }
  });
};

$(document).on("click", ".searchin", function() {
  let invoice = $(this).attr("id");
  let inval = $(this).val();
  let id = invoice.substring(3);
  $.ajax({
    url: "/admin/invoice/update",
    type: "POST",
    data: {
      _token: CSRF_TOKEN,
      id: id,
      inv: inval
    },
    dataType: "text",
    success: data => {
      Allinvoice();
      iziToast.success({
        position: "topCenter",
        message: "Invoice viewed"
      });
    }
  });
});
// Checks every 10 seconds more
window.setInterval(() => {
  InvoiceNt();
}, 10000);
