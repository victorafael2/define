<?php
// Conectar ao banco de dados
include '../../conexao/conexao.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Atualizar o perfil do usuário na tabela
$id = $_POST["id"];
$novoValor = $_POST['valor'];

$sql = "UPDATE questionario2 SET relato='".$novoValor."' WHERE id=".$id;

if (mysqli_query($conn, $sql)) {
    // Exibe a mensagem de sucesso
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Atualização concluída',
            text: 'O valor foi atualizado com sucesso.'
        }).then(() => {
            window.location.href = 'pagina.php';
        });
    </script>";
} else {
    // Exibe a mensagem de erro
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: 'Houve um erro ao atualizar o valor. Por favor, tente novamente.'
        });
    </script>";
}
}


mysqli_close($conn);
?>
