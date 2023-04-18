<?php
// Conexão com o banco de dados
include '../../conexao/conexao.php';

// $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}

// Obter os dados enviados pela solicitação AJAX
$id = $_POST['id'];
$youtubeLink = $_POST['youtube_link'];
$outroCampo = $_POST['outro_campo'];

// Atualizar o registro no banco de dados
$sql = "UPDATE tabelas SET sim='$youtubeLink', nao='$outroCampo' WHERE id=$id";

// echo $sql;

if (mysqli_query($conn, $sql)) {
  echo "Dados atualizados com sucesso!";
} else {
  echo "Erro ao atualizar os dados: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
