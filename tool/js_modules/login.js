$(document).ready(function () {
	$("#btnsubmit").click(function () {
		$.ajax({
			type: "POST",
			url: "php_modules/login.php",
			data: {
				username: $("#username").val(),
				password: $("#password").val(),
			},
			success: function (result) {
				if (result.trim() == "success") {
					window.location.href = "dashboard.php";
					console.log(result);
				} else {
					alert("wrong combination of username and password");
				}
			},
			error: function (error) {
				alert("wrong something");
			},
		});
	});
});
