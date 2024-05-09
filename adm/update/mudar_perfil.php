<?php
// Conectar ao banco de dados
include '../../conexao/conexao.php';

$conn = mysqli_connect($servername, $username, $password, $connname);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Atualizar o perfil do usuário na tabela
$id = $_POST["id"];
$perfil = $_POST["perfil"];

$sql = "UPDATE empresas SET permissao='".$perfil."' WHERE id=".$id;

if (mysqli_query($conn, $sql)) {
    echo "Perfil atualizado com sucesso!";
} else {
    echo "Erro ao atualizar o perfil: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
