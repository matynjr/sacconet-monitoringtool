$.ajax({
	url: "php_modules/count_saccos.php",
	type: "POST",
	data: "",
	dataType: "json",
	success: function (result) {
		// alert(result["ajax"]); // "Hello world!" alerted
		console.log(result["numRec"]); // The value of your php $row['adverts'] will be displayed
		$("#count_saccos").html(result["numRec"]);
	},
	error: function () {
		alert("error");
	},
});
