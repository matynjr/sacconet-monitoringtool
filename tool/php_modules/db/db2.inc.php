
<?php
// sacconet main dashboard connection

$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "uccfs";
$conn = mysqli_connect($servername, $username, $pass, $db_name);
if (!$conn) {
    die("error connection to db server" . mysqli_connect_error());
}
