<?php
include("db/db2.inc.php");

$query = "SELECT * FROM deposits";
$result = mysqli_query($conn, $query) or die();
$row = mysqli_fetch_array($result);
$num_records = mysqli_num_rows($result);

if ($num_records >= 1) {

    $numRec = array(
        'ajax' => 'more than 1 rows found',
        'numRec' => $num_records,
    );
    echo json_encode($numRec);

    exit;
}
