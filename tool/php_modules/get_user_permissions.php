<?php
include("db/db.inc.php");

$data = array();
$data1 = array();
$return_obj = array();
$query = "select * from user_permissions WHERE permissions_status = 1";
$query1 = "select * from permission_association WHERE permission_association_status = 1";


$rs_ = mysqli_query($conn, $query);
$rs1_ = mysqli_query($conn, $query1);

if (!$rs_) {
    echo 'an error occured' . mysqli_error($conn);
} else {
    while ($row = mysqli_fetch_assoc($rs_)) {
        $data[] = $row;
    }
    $return_obj[] = $data;
}

if (!$rs1_) {
    echo 'an error occured' . mysqli_error($conn);
} else {
    while ($row = mysqli_fetch_assoc($rs1_)) {
        $data1[] = $row;
    }
    $return_obj[] = $data1;
}
echo json_encode($return_obj);
