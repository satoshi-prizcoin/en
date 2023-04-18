// REGISTER
$(document).ready(function () {
	$("#register_account").submit(function (e) {
		e.preventDefault();
		const values = $(this).serialize();
		let p_number = $("#p_number").val();
		// console.log(values);
		// return false;
		var getUrl = window.location;
		var url =
			getUrl.protocol +
			"//" +
			getUrl.host +
			"/" +
			getUrl.pathname.split("/")[1];
		$.ajax({
			url: url + "/auth/cek_p_number",
			method: "GET",
			data: { p_number: p_number },
			dataType: "json",
			success: function (data) {
				if (!data || data == null) {
					$.ajax({
						url: url + "/auth/registerAkun",
						method: "POST",
						data: values,
						beforeSend: function () {
							$(".spinner-border").show();
						},
						success: function (data) {
							Swal.fire({
								icon: "success",
								title: "Akun berhasil dibuat, silahkan login",
								showConfirmButton: false,
								timer: 1500,
							});

							window.location.reload();
						},
						complete: function () {
							$(".spinner-border").hide();
						},
						error: function () {
							Swal.fire({
								icon: "error",
								title: "Akun gagal tersimpan",
								showConfirmButton: true,
							});
						},
					});
				} else {
					Swal.fire({
						icon: "error",
						title: "Akun ini sudah ada",
						showConfirmButton: true,
					});
				}
			},
		});
	});

	// EDIT PROFILE
	$(document).on("click", "#tombol_edit", function () {
		$(this).hide();
		$("#tombol_save").show();

		// FULLNAME
		$("#fullname").prop("readonly", false);
		$("#fullname").prop("required", true);
		$("#fullname").trigger("focus");

		// NICKNAME
		$("#nickname").prop("readonly", false);
		$("#nickname").prop("required", true);

		// NICKNAME
		$("#no_telp").prop("readonly", false);
		$("#no_telp").prop("required", true);
	});

	$("#submit_profile").submit(function (e) {
		e.preventDefault();
		const values = $(this).serialize();
		var getUrl = window.location;
		var url =
			getUrl.protocol +
			"//" +
			getUrl.host +
			"/" +
			getUrl.pathname.split("/")[1];
		$.ajax({
			url: url + "/user/editMyProfile",
			method: "POST",
			data: values,
			beforeSend: function () {
				$(".spinner-border").show();
			},
			success: function (data) {
				Swal.fire({
					icon: "success",
					title: "Profile berhasil diubah",
					showConfirmButton: false,
					timer: 1500,
				});

				window.location.reload();
			},
			complete: function () {
				$(".spinner-border").hide();
			},
			error: function () {
				Swal.fire({
					icon: "error",
					title: "Profile gagal tersimpan",
					showConfirmButton: true,
				});
			},
		});
	});
});

// alert("test");

$(document).ready(function () {
	jQuery('a[data-toggle="tab"]').on("show.bs.tab", function (e) {
		localStorage.setItem("activeTab", jQuery(e.target).attr("href"));
	});
	var activeTab = localStorage.getItem("activeTab");
	// alert(activeTab);
	if (activeTab) {
		jQuery('#tab_no_back_default a[href="' + activeTab + '"]').tab("show");
	}
});

// LINK COPY TO CLIPBOARD
const copyBtn = document.getElementById("copyBtn");
const copyText = document.getElementById("copyText");

copyBtn.onclick = () => {
	copyText.select(); // Selects the text inside the input
	document.execCommand("copy"); // Simply copies the selected text to clipboard
	Swal.fire({
		//displays a pop up with sweetalert
		icon: "success",
		title: "Text copied to clipboard",
		showConfirmButton: false,
		timer: 1500,
	});
};
