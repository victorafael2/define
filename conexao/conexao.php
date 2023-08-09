<?php $servername = "define.cduh3xdezln5.us-east-1.rds.amazonaws.com";
$username = "admindefine";
$password = "vr88094852";
$connname = "define";

// Create connection
$conn = new mysqli($servername, $username, $password, $connname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    // echo "sucess";

//     $result = mysqli_query($conn, "SELECT id, senha FROM empresas");

// while ($row = mysqli_fetch_assoc($result)) {
//     $hashedPassword = password_hash($row['senha'], $hashAlgo);

//     $updateQuery = "UPDATE empresas SET senha = '$hashedPassword' WHERE id = {$row['id']}";
//     mysqli_query($conn, $updateQuery);
// }


}

?>