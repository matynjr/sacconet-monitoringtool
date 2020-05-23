<?php
include("db/db.inc.php");

$data = array();
$check = "select * from smt_accounts WHERE user_status = 1";


$rs_ = mysqli_query($conn, $check);
if (!$rs_) {
    echo 'an error occured' . mysqli_error($conn);
} else {
    while ($row = mysqli_fetch_assoc($rs_)) {
        $data[] = $row;
    }


    echo json_encode($data);
}
