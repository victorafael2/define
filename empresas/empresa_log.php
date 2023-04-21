<?php
include '../conexao/conexao.php';

if (isset($_GET['email']) && isset($_GET['password'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    echo $email;
    echo $password;

    // Consulta no banco de dados
    $query = "SELECT * FROM empresas WHERE email = '$email' AND senha = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
      // Iniciar sessão
      session_start();
      $_SESSION['email'] = $email;
      // Redirecionar para a página principal
      // Adiciona o parâmetro 'mensagem' na URL
    $url_destino = "../questionario/questionario.php?mensagem=Seja+bem-vindo!";
    //   header("Location: ../questionario/questionario.php");
    // Redireciona para a página principal com o parâmetro adicionado na URL
    header("Location: " . $url_destino);
      exit();
    } else {
      // Login falhou
      // ...
      $message = "Usuario ou senha errados";
echo "<script>alert('$message');</script>";
    //   $erro = "erro";
    }
  }
?>