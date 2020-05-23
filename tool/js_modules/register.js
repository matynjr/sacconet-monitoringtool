$(document).ready(function () {
	$("#btnsubmit").click(function () {
		$.ajax({
			type: "POST",
			url: "php_modules/register.php",
			data: {
				username: $("#username").val(),
				email: $("#email").val(),
				password: $("#password").val(),
				user_role: $("#user_role").val(),
			},
			success: function (result) {
				window.location.href = "register.php";
				console.log(result);
			},
			error: function (error) {
				alert("wrong something");
			},
		});
	});
});
