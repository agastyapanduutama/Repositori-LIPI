$(document).ready(function () {
	table = $('#list_user').DataTable({
		"processing": true,
		"serverSide": true,
		"order": [],

		"ajax": {
			"url": baseUrl + 'admin/user/data',
			"type": "POST",
			"error": function (error) {
				errorCode(error)
			}
		},

		"columnDefs": [{
				"sClass": "text-center",
				"targets": [0],
				"orderable": false
			},
			{
				"targets": [1],
				"orderable": true
			},
			{
				"targets": [2],
				"orderable": true
			},
			{
				"sClass": "text-center",
				"targets": [4],
				"orderable": false
			},
		],
	});
})

$('#list_user').on('click', '#edit', function () {
	let id = $(this).data('id');
	$.ajax({
		url: baseUrl + 'admin/user/get/' + id,
		type: "GET",
		success: function (result) {
			response = JSON.parse(result)
			$("#idData").val(response.id)
			$("#nama_user1").val(response.nama_user)
			$("#username1").val(response.username)
			// $("#email1").val(response.email)
			$('#id_upk1').val(response.id_upk).change();
			$("#modalEdit").modal('show')
		},
		error: function (error) {
			errorCode(error)
		}
	})
})

$('#list_user').on('click', '#delete', function () {
	let id = $(this).data('id');
	// alert(id)
	confirmSweet("Data akan terhapus secara permanen !")
	.then(result => {
		if (result) {
			$.ajax({
				url: baseUrl + 'admin/user/delete/' + id,
				type: "GET",
				success: function (result) {
					response = JSON.parse(result)
					if (response.status == 'ok') {
						table.ajax.reload(null, false)
						// msgSweetSuccess(response.msg)
						toastSuccess(response.msg)
					} else {
						// msgSweetWarning(response.msg)
						toastWarning(response.msg)
					}
				},
				error: function (error) {
					errorCode(error)
				}
			})
		}
	})
})

$('#list_user').on('click', '#on', function () {
	let id = $(this).data('id');
	confirmSweet("Akun akan dinon-aktifkan  !")
		.then(result => {
			if (result) {
				$.ajax({
					url: baseUrl + 'admin/user/set/' + id + "/off",
					type: "GET",
					success: function (result) {
						response = JSON.parse(result)
						if (response.status == 'ok') {
							table.ajax.reload(null, false)
							// msgSweetSuccess(response.msg)
							toastSuccess(response.msg)
						} else {
							// msgSweetWarning(response.msg)
							toastWarning(response.msg)
						}
					},
					error: function (error) {
						errorCode(error)
					}
				})
			}
		})
})

$('#list_user').on('click', '#off', function () {
	let id = $(this).data('id');
	confirmSweet("Akun akan diaktifkan  !")
	.then(result => {
		if (result) {
			$.ajax({
				url: baseUrl + 'admin/user/set/' + id + "/on",
				type: "GET",
				success: function (result) {
					response = JSON.parse(result)
					if (response.status == 'ok') {
						table.ajax.reload(null, false)
						// msgSweetSuccess(response.msg)
						toastSuccess(response.msg)
					} else {
						// msgSweetWarning(response.msg)
						toastWarning(response.msg)
					}
				},
				error: function (error) {
					errorCode(error)
				}
			})
		}
	})
})

$('#list_user').on('click', '#reset', function () {
	let id = $(this).data('id');
	confirmSweet("Kata Sandi Akun akan direset !")
		.then(result => {
			if (result) {
				$.ajax({
					url: baseUrl + 'admin/user/set/' + id + "/reset",
					type: "GET",
					success: function (result) {
						response = JSON.parse(result)
						if (response.status == 'ok') {
							table.ajax.reload(null, false)
							// msgSweetSuccess(response.msg)
							toastSuccess(response.msg)
						} else {
							// msgSweetWarning(response.msg)
							toastWarning(response.msg)
						}
					},
					error: function (error) {
						errorCode(error)
					}
				})
			}
		})
})

$("#formAddUser").submit(function (e) {
	e.preventDefault();
	$.ajax({
		url: baseUrl + "admin/user/insert",
		type: "post",
		data: new FormData(this),
		processData: false,
		contentType: false,
		cache: false,
		beforeSend: function () {
			disableButton()
		},
		complete: function () {
			enableButton()
		},
		success: function (result) {
			let response = JSON.parse(result)
			if (response.status == "fail") {
				msgSweetError(response.msg, "Nama Pengguna sudah ada !")
			} else {
				table.ajax.reload(null, false)
				toastSuccess(response.msg)
				clearInput($("input"))
			}
		},
		error: function (event) {
			errorCode(event)
		}
	});
})

$("#formEditUser").submit(function (e) {
	e.preventDefault();
	$.ajax({
		url: baseUrl + "admin/user/update",
		type: "post",
		data: new FormData(this),
		processData: false,
		contentType: false,
		cache: false,
		beforeSend: function () {
			disableButton()
		},
		complete: function () {
			enableButton()
		},
		success: function (result) {
			let response = JSON.parse(result)
			if (response.status == "fail") {
				// msgSweetError(response.msg)
				clearInput($("input"))
				$("#modalEdit").modal('hide')
			} else {
				table.ajax.reload(null, false)
				toastSuccess(response.msg)
				clearInput($("input"))
				$("#modalEdit").modal('hide')
			}
		},
		error: function (event) {
			errorCode(event)
		}
	});
})

setInterval(() => {
	table.ajax.reload(null, false);
}, 30000);