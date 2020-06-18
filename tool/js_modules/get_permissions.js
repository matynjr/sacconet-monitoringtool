$(document).ready(function () {
    $.ajax({
        url: "php_modules/get_user_permissions.php",
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
                let allpermissions = res[0];
                let assignedpermissions = res[1];

                if (assignedpermissions.length > 0) {
                    for (i = 0; i < assignedpermissions.length; i++) {
                        let existingpermission = allpermissions.find(val => val.permission_id = assignedpermissions[i].permission_id);
                        $("#assigned").append(
                            '<input type="checkbox" class="js-switch" checked /> ' + existingpermission.permissions
                        );
                        if (existingpermission) {
                            allpermissions.splice(
                                allpermissions.indexOf(existingpermission), 1
                            )
                        }
                    }
                }
                if (allpermissions.length > 0) {
                    for (i = 0; i < allpermissions.length; i++) {
                        $("#available").append(
                            '<input type="checkbox" class="js-switch" id="' + 1 + ')" /> ' + allpermissions[i].permissions
                        );
                        index++;
                    }
                }
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        },
    });
 
});

