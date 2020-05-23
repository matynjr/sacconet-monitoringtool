<?php

include 'db/db.inc.php';

$sql = "INSERT INTO smt_accounts (username,email,password,user_role,user_status) VALUES 
('" . $_POST["username"] . "','" . $_POST["email"] . "','" . $_POST["password"] . "','" . $_POST["user_role"] . "',1)";

$result = $conn->query($sql);

$conn->close();

echo "saved";
