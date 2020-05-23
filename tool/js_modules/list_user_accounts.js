$(document).ready(function () {
	$.ajax({
		url: "php_modules/list_user_accounts.php",
		type: "post",
		data: "",
		success: function (response) {
			var res = JSON.parse(response);
			console.log(res);
			if (res == "none") {
				$("#error_handler").hide();
				$("#results").empty();
				$("#alert").append(
					'<div id="error_handler" class="alert alert-danger alert-dismissible show" role="alert" style="border: 1px solid #eee;">Customer not found, please try again<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
				);
			} else if (res == "error") {
				$("#alert").append(
					'<div id="error_handler" class="alert alert-danger alert-dismissible show" role="alert" style="border: 1px solid #eee;">an error occured, contact admin<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
				);
			} else {
				var xy = 1;
				$("#results").empty();

				for (i = 0; i < res.length; i++) {
					console.log("data" + i);
					$("#results").append(
						'<tr><th scope="row">' +
							xy +
							"</th><td>" +
							res[i].username +
							"</td><td>" +
							res[i].email +
							"</td><td>" +
							res[i].password
					);
					xy++;
				}
			}
		},
		error: function (jqXHR, textStatus, errorThrown) {
			console.log(textStatus, errorThrown);
		},
	});
});
