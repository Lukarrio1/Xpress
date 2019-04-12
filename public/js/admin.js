// Loads  at start up ..
$(document).ready(() => {
	Allusers();
});

// this function returns all of the users
Allusers = () => {
	$.get('/admin/allusers', data => {
		var user = jQuery.parseJSON(data);
		let text = '';
		let amount = user.length;
		console.log('Current user' + amount);
		for (let i = 0; i < user.length; i++) {
			text += `
					<tr>
					<th scope="row">${user[i].xl}</th>
					<td>${user[i].name}</td>
					<td>${user[i].telephone}</td>
					<td>${user[i].email}</td>
					<td>
					<a class="blue-text userid" data-toggle="tooltip" data-placement="top" title="View ${user[
						i
					].name}" id="user${user[i].id}"><i class="fas fa-user"></i></a>
					<a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
					<a class="red-text userdel" data-toggle="tooltip" data-placement="top" title="Remove" id="use${user[
						i
					].id}"><i class="fas fa-times" ></i></a>
					</td>
					</tr>`;
		}
		$('#alluserbody').html(`${text}`);
	});
};

$('#usersearch').on('keyup', () => {
	if ($('#usersearch').val().length > 3) {
		$('#alluserbody').html('');
		$.ajax({
			url: '/admin/search',
			type: 'POST',
			data: {
				_token: CSRF_TOKEN,
				search: $('#usersearch').val(),
			},
			dataType: 'text',
			success: data => {
				let users = jQuery.parseJSON(data);
				let searchres = '';
				for (let i = 0; i < users.length; i++) {
					searchres += `<tr>
								<th scope="row">${users[i].xl}</th>
								<td>${users[i].name}</td>
								<td>${users[i].telephone}</td>
								<td>${users[i].email}</td>
								<td>
								<a class="blue-text userid" data-toggle="tooltip" data-placement="top" title="${users[
									i
								].name}" id="user${users[i].id}"><i
								class="fas fa-user"></i></a>
								<a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
								<a class="red-text userdel" data-toggle="tooltip" data-placement="top" title="Delete user" id="del${users[
									i
								].id}"><i class="fas fa-times"></i></a>
								</td>
								</tr>
								`;
				}
				$('#alluserbody').html(`${searchres}`);
			},
		});
	} else {
		Allusers();
	}
});

// this function gets the id of the user on click
$(document).on('click', '.userid', function() {
	let data = $(this).attr('id');
	let id = data.substring(4);
	$.ajax({
		url: '/admin/allusers',
		type: 'POST',
		data: {
			_token: CSRF_TOKEN,
			id: id,
		},
		dataType: 'text',
		success: data => {
			let user = jQuery.parseJSON(data);
			let usercard = `<!-- Card -->
				<div class="card profile-card">

				<!-- Avatar -->
				<div class="avatar z-depth-1-half mb-4">
				<img src="/storage/Userimage/${user.image}" class="rounded-circle" alt="First sample avatar image">
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
			$('#usercardbody').html(`${usercard}`);
		},
	});
});

// this function will delete a user from the database
$(document).on('click', '.userdel', function() {
	let del = $(this).attr('id');
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
							delete: id,
						},
						dataType: 'text',
						success: function(response) {
							Allusers();
						},
					});
					instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
				},
				true,
			],
			[
				'<button style="color:white;">NO</button>',
				function(instance, toast) {
					instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
				},
			],
		],
	});
});
// Checks every 10 seconds more
window.setInterval(() => {}, 10000);
