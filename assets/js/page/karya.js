var tipena = $("#tipena").val()

$(document).ready(function () {
	table = $('#list_karya').DataTable({
		"processing": true,
		"serverSide": true,
		"order": [],

		"ajax": {
			"url": baseUrl + 'admin/karya/data/' + tipena,
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
		],
	});
	getPublikasi()
	getSatker()
	getSubjek()

})

$('#list_karya').on('click', '#edit', function () {
	let id = $(this).data('id');
	$.ajax({
		url: baseUrl + 'admin/karya/get/' + id,
		type: "GET",
		success: function (result) {
			response = JSON.parse(result)
			$("#idData").val(response.id_karya)
			$("#nama_karya1").val(response.nama_karya)
			$("#keterangan1").val(response.keterangan)
			$("#modalEdit").modal('show')
		},
		error: function (error) {
			errorCode(error)
		}
	})
})



$("#formAddkarya").submit(function (e) {
	e.preventDefault();
	$.ajax({
		url: baseUrl + "admin/karya/insert",
		type: "POST",
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
				msgSweetError(response.msg)
			} else {
				table.ajax.reload(null, false)
				toastSuccess(response.msg)
				clearInput($("input"))
				$("#id_upk").val(upk)
				getJabatan()
				getUpk()
			}
		},
		error: function (event) {
			errorCode(event)
		}
	});
})

function getPublikasi() {
	$('#id_publikasi').find('option').remove().end()
	$('#id_publikasi').append("<option value='' selected disabled> -- Pilih Jenis -- </option>");
	$.ajax({
		dataType: "json",
		url: baseUrl + "admin/karya/getPublikasi",
		success: function (result) {
			let response = jQuery.parseJSON(JSON.stringify(result));
			response.forEach(item => {
				$('#id_publikasi').append(`<option value="${item.id_publikasi}">${item.nama_publikasi}</option>`);
			})
		}
	})
}

function getSatker() {
	$('#id_satker').find('option').remove().end()
	$('#id_satker').append("<option value='' selected disabled> -- Pilih Jenis -- </option>");
	$.ajax({
		dataType: "json",
		url: baseUrl + "admin/karya/getSatker",
		success: function (result) {
			let response = jQuery.parseJSON(JSON.stringify(result));
			response.forEach(item => {
				$('#id_satker').append(`<option value="${item.id_satker}">${item.nama_satker}</option>`);
			})
		}
	})
}

function getSubjek() {
	$('#id_subjek').find('option').remove().end()
	$('#id_subjek').append("<option value='' selected disabled> -- Pilih Jenis -- </option>");
	$.ajax({
		dataType: "json",
		url: baseUrl + "admin/karya/getSubjek",
		success: function (result) {
			let response = jQuery.parseJSON(JSON.stringify(result));
			response.forEach(item => {
				$('#id_subjek').append(`<option value="${item.id_subjek}">${item.nama_subjek}</option>`);
			})
		}
	})
}


$('#list_karya').on('click', '#delete', function () {
	let id = $(this).data('id');
	confirmSweet("Data akan terhapus secara permanen !")
		.then(result => {
			if (result) {
				$.ajax({
					url: baseUrl + 'admin/karya/delete/' + id,
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


$('#list_karya').on('click', '#confirm', function () {
    let id = $(this).data('id');
    confirmSweet("Ingin Mengkonfirmasi Karya ini?")
        .then(result => {
            if (result) {
                $.ajax({
                    url: baseUrl + 'admin/karya/set/' + id + "/konfirmasi",
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


$(document).delegate('#view', 'click', function(){
	let idNa = $(this).data('id');
	// alert(idNa)
	window.open(`${baseUrl}karya/lihat/${idNa}`, '_blank')
})