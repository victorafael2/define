<?php
// Conectar ao banco de dados
include '../../conexao/conexao.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexão
if (!$conn) {
	die("Conexão falhou: " . mysqli_connect_error());
}

// Processar os dados do formulário
$item = $_POST['item'];
$video_id = $_POST['video_id'];

// Inserir o vídeo na base de dados
$sql = "INSERT INTO videos (item, video_id) VALUES ('$item', '$video_id')";

if (mysqli_query($conn, $sql)) {
	header('Location: index.php?status=success');
} else {
        echo "Erro ao cadastrar o vídeo: " . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
