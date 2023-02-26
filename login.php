<?php
include 'conexao/conexao.php';



if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta no banco de dados
    $query = "SELECT * FROM empresas WHERE email = '$email' AND senha = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
      // Iniciar sessão
      session_start();
      $_SESSION['email'] = $email;

      // Redirecionar para a página principal
      header("Location: index.php");
      exit();
    } else {
      // Login falhou
      // ...
      $erro = "erro";
    }
  }


?>



<form action="login.php" method="POST">
  <label for="username">Nome de Usuário:</label>
  <input type="email" id="email" name="email"><br>
<?php echo $erro ?>
  <label for="password">Senha:</label>
  <input type="password" id="password" name="password"><br>

  <input type="submit" value="Entrar">
</form>
