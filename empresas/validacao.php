<?php
// Verificar se a senha atende aos critérios de segurança
function validarSenha($senha) {
    // Verificar o comprimento da senha
    if (strlen($senha) < 8) {
        return false;
    }
    // Verificar se a senha contém pelo menos uma letra maiúscula
    if (!preg_match("/[A-Z]/", $senha)) {
        return false;
    }
    // Verificar se a senha contém pelo menos uma letra minúscula
    if (!preg_match("/[a-z]/", $senha)) {
        return false;
    }
    // Verificar se a senha contém pelo menos um número
    if (!preg_match("/[0-9]/", $senha)) {
        return false;
    }
    // Verificar se a senha contém pelo menos um caractere especial
    if (!preg_match("/[!@#$%^&*()\-_=+{};:,<.>]/", $senha)) {
        return false;
    }
    return true;
}

// Processar o formulário quando enviado
if (isset($_POST['enviar'])) {
    $senha = $_POST['senha'];

    if (validarSenha($senha)) {
        // A senha é forte o suficiente, continuar com o processamento do formulário
        // ...
    } else {
        // A senha não é forte o suficiente, exibir uma mensagem de erro
        $erroSenha = "A senha deve ter pelo menos 8 caracteres, incluindo pelo menos uma letra maiúscula, uma letra minúscula, um número e um caractere especial.";
    }
}
?>

<!-- Exibir o formulário -->
<form method="post" action="">
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>
    <?php if (isset($erroSenha)) { echo "<p>$erroSenha</p>"; } ?>
    <input type="submit" name="enviar" value="Enviar">
</form>
