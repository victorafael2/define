<?php
include '../conexao/conexao.php';

if (isset($_GET['email']) && isset($_GET['password'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    // Consulta no banco de dados
    $query = "SELECT senha FROM empresas WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['senha'];

        // Verifique a senha fornecida com o hash armazenado no banco de dados
        if (password_verify($password, $hashed_password)) {
            // A senha está correta, faça o login
            session_start();
            $_SESSION['email'] = $email;

            $url_destino = "../questionario/questionario.php?mensagem=Seja+bem-vindo!";
            header("Location: " . $url_destino);
            exit();
        } else {
            // Senha incorreta
            $message = "Usuário ou senha incorretos";
            echo "<script>alert('$message');</script>";
        }
    } else {
        // Usuário não encontrado
        $message = "Usuário não encontrado";
        echo "<script>alert('$message');</script>";
    }
}
?>
