<?php
// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Receber as informações de usuário e senha
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  // Verificar se as informações estão corretas (aqui você deve implementar a lógica de autenticação do seu sistema)
  if ($usuario === 'admin' && $senha === 'senha123') {
    // Redirecionar o usuário para a página inicial do site
    header('Location: index.php');
    exit;
  } else {
    // Exibir mensagem de erro
    echo "Usuário ou senha incorretos.";
  }
}
?>
