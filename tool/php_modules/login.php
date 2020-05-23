<?php
include 'db/db.inc.php';
session_start();

$sql = "SELECT Q.*,(SELECT R.user_role FROM user_roles R WHERE R.role_id=Q.role_id) 
AS user_role FROM smt_accounts Q where Q.username = '" . $_POST["username"] . "' 
and Q.password ='" . $_POST["password"] . "'";
$result = $conn->query($sql);
if (!$result) {
    echo mysqli_error($conn);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $select = "SELECT Q.*,(SELECT P.permissions FROM user_permissions P WHERE P.permission_id=Q.permission_id)
     AS permission FROM permission_association Q WHERE Q.role_id= '" . $row["role_id"] . "'";
    $result1 = $conn->query($select);
    $temporary_permissions = array();

    while ($i = $result1->fetch_assoc()) {
        array_push($temporary_permissions, $i);
    }
    $permissions = array_column($temporary_permissions, "permission");
    // echo json_encode($permissions);
    $_SESSION["user"] = json_encode($row);
    $_SESSION["permissions"] = json_encode($permissions);

    echo "success";
} else {
    echo "failed";
}
