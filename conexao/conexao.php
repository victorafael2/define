<?php

    // Seleciona as configurações do banco de dados com base no ambiente

    if ($_SERVER['SERVER_NAME'] === 'localhost') {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $connname = "define";
} else {
//     require('../ssh/phpseclib-master/phpseclib/Net/SSH2.php');


//     $ssh = new Net_SSH2('191.96.31.197'); // Substitua 'localhost' pelo endereço do servidor SSH remoto
// if (!$ssh->login('victorrafael', 'victor001@2023')) {
//     exit('Falha na autenticação SSH');
// }

    $servername = "45.152.44.103";
    $username = "u358437276_define";
    $password = "Vr88094852.";
    $connname = "u358437276_define";
            // $servidor = "localhost";
            // $usuario = "xpeer_adm";
            // $senha = "xpeer_adm_victor";
            // $dbname = "xpeer_adm";

}

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