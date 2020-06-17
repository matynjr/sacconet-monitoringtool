$(document).ready(function () {
    $.ajax({
        url: "php_modules/get_user_roles.php",
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
                var index = 1;
                $("#results").empty();

                for (i = 0; i < res.length; i++) {
                    console.log("data" + i);
                    $("#results").append(
                        '<tr><td scope="row">' +
                        index +
                        "</td><td>" +
                        res[i].user_role +
                        "</td><td><a class='btn btn-primary' href='assign-permissions.php?role_id=" + res[i].role_id + "'>Edit Permissions" + "</a></td>"
                    );
                    index++;
                }
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        },
    });
});
