
<?php
// sacconet managment dashboard

$servername = "localhost";
$username = "root";
$pass = "dzsq5pKD";
$db_name = "uccfs_management";
$conn = mysqli_connect($servername, $username, $pass, $db_name);
if (!$conn) {
    die("error connection to db server" . mysqli_connect_error());
}
