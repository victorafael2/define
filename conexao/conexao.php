<?php $servername = "define.cduh3xdezln5.us-east-1.rds.amazonaws.com";
$username = "admindefine";
$password = "vr88094852";
$dbname = "define";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>