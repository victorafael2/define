<?php
include '../conexao/conexao.php';

// Obter os valores dos campos do formulário
$nome = $_POST['nome'];
$nome_empresa = $_POST['nome_empresa'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$uf = $_POST['uf'];
$setor = $_POST['setor'];
$senha = $_POST['senha'];

// Preparar a consulta SQL para inserir os dados na tabela "clientes"
$sql = "INSERT INTO empresas (nome, empresa, cnpj, email, whatsapp, uf, setor, senha) VALUES ('$nome', '$nome_empresa', '$cnpj', '$email', '$whatsapp', '$uf', '$setor', '$senha')";

// Executar a consulta SQL e verificar se houve algum erro
if ($conn->query($sql) === TRUE) {
    // Se a inserção foi bem sucedida, enviar uma resposta JSON de sucesso
    echo json_encode(array('success' => true));
} else {
    // Verificar se o erro é devido à duplicidade de e-mail
    if ($conn->errno == 1062) {
        // Enviar uma resposta JSON indicando duplicidade de e-mail
        echo json_encode(array('success' => false, 'duplicateEmail' => true));
    } else {
        // Enviar uma resposta JSON indicando um erro genérico
        echo json_encode(array('success' => false, 'error' => $conn->error));
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
