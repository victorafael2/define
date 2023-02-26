<?php
  // inicia a sessão
  session_start();

  // verifica se o campo oculto "encerrar_sessao" foi enviado
  if (isset($_POST['encerrar_sessao'])) {
    // limpa as variáveis de sessão
    $_SESSION = array();

    // destrói a sessão
    session_destroy();

    // redireciona para outra página
    header("Location: index.php");
    exit;
  }
?>
