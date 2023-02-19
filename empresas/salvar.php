<?php
// Incluir arquivo de conexão com o banco de dados
include '../conexao/conexao.php';

// Obter os valores dos campos do formulário
$nome = $_POST['nome'];
$nome_empresa = $_POST['nome_empresa'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$uf = $_POST['uf'];
$setor = $_POST['setor'];

// Preparar a consulta SQL para inserir os dados na tabela "clientes"
$sql = "INSERT INTO empresas (nome, empresa, cnpj, email, whatsapp, uf, setor) VALUES ('$nome', '$nome_empresa', '$cnpj', '$email', '$whatsapp', '$uf', '$setor')";

// Executar a consulta SQL e verificar se houve algum erro
if ($conn->query($sql) === TRUE) {
    // Se a inserção foi bem sucedida, redirecionar para a página de sucesso
    header('Location: ../empresas/sucess.php');
} else {
    // Se houve um erro na inserção, exibir uma mensagem de erro
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
