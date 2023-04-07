<?php
include '../conexao/conexao.php';

session_start();
// echo $_SESSION['email'];
$nome_logado = $_SESSION['email'];



$sql_nome = "SELECT nome, empresa, cnpj FROM empresas WHERE email = '$nome_logado'";
$result_nome = $conn->query($sql_nome);

if ($result_nome->num_rows > 0) {
    // Obtendo a linha de resultado como uma matriz associativa
    $row = $result_nome->fetch_assoc();

    // Atribuindo o valor do campo 'first_name' à variável $first_name
    $p_nome = $row["nome"];
    $empresa = $row["empresa"];
    $cnpj = $row["cnpj"];



};

$first_name = isset($p_nome) ? $p_nome : 'Entrar';
$v_logado = isset($p_nome) ? $p_nome : 'd-none';
$first_name = isset($p_nome) ? $p_nome : 'Entrar';

if(!isset($_SESSION["email"]) || !isset($_SESSION["email"]))
{
// Usuário não logado! Redireciona para a página de login
$logado = "deslogado";
$esconder_ = "d-none";
$cadastrar = "empresas/empresa__.php";
$cadastrar_texto = "Cadastre-se";
// exit;
} else
{
    // logado
    $logado = "logado";
    $esconder_entrar = "d-none";
    $cadastrar = "questionario/questionario2_.php";
    $cadastrar_texto = "Responder Questionario";
}


$nome_completo = "$first_name";
$palavras = explode(" ", $nome_completo);

$iniciais = "";
foreach ($palavras as $palavra) {
   $iniciais .= strtoupper(substr($palavra, 0, 1));
}

$duas_iniciais = substr($iniciais, 0, 2);

// echo $duas_iniciais; // Saída: JS





// echo $logado;

?>
