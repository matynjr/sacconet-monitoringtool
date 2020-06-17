<?php
include("db/db.inc.php");

$data = array();
$query = "select * from user_roles WHERE user_role_status = 1";


$rs_ = mysqli_query($conn, $query);
if (!$rs_) {
    echo 'an error occured' . mysqli_error($conn);
} else {
    while ($row = mysqli_fetch_assoc($rs_)) {
        $data[] = $row;
    }


    echo json_encode($data);
}
