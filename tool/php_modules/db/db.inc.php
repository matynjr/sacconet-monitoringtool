 <?php
    $servername = "localhost";
    $username = "root";
    $password = "dzsq5pKD";
    $dbname = "sacco_monitoring_tool";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Failed to connect" . $conn->connect_error);
    }
