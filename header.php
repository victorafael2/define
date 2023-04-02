<?php
$url_base = htmlspecialchars(dirname($_SERVER['REQUEST_URI']), ENT_QUOTES, 'UTF-8');

$barra =  "/";

$diminuir = 2;

$url = $url_base.$barra;

$caractere = "/";

$stringParaRepetir = "../";

$contagem = substr_count($url, $caractere) - $diminuir;


$url = str_repeat($stringParaRepetir, $contagem);


// echo $url;

$caminhobd = "conexao/conexao.php";

$caminho_full = $url.$caminhobd;


include($caminho_full);

session_start();


$nome_logado = isset($_SESSION['email']) ? $_SESSION['email'] : '';



$sql_nome = "SELECT nome, empresa, cnpj FROM empresas WHERE email = '$nome_logado'";
$result_nome = $conn->query($sql_nome);

if ($result_nome->num_rows > 0) {
    // Obtendo a linha de resultado como uma matriz associativa
    $row = $result_nome->fetch_assoc();

    // Atribuindo o valor do campo 'first_name' à variável $first_name
    $first_name = $row["nome"];
    $empresa = $row["empresa"];
    $cnpj = $row["cnpj"];


};
// Fechando a conexão com o banco de dados
// $conn->close();

$sql_nome = "SELECT nome, empresa, cnpj, uf,email,whatsapp FROM empresas WHERE email = '$nome_logado'";
$result_nome = $conn->query($sql_nome);

if ($result_nome->num_rows > 0) {
    // Obtendo a linha de resultado como uma matriz associativa
    $row = $result_nome->fetch_assoc();

    // Atribuindo o valor do campo 'first_name' à variável $first_name
    $first_name = $row["nome"];
    $empresa = $row["empresa"];
    $cnpj = $row["cnpj"];
    $uf = $row["uf"];
    $email = $row["email"];
    $whatsapp = $row["whatsapp"];


};
// Fechando a conexão com o banco de dados
// $conn->close();

// Consulta SQL para selecionar o último registro inserido na tabela 'users'
$sql_ultimo_quest = "SELECT created FROM questionario2 WHERE USER = '$nome_logado' ORDER BY id DESC LIMIT 1";
$result_ultimo_quest = $conn->query($sql_ultimo_quest);

if ($result_ultimo_quest->num_rows > 0) {
    // Obtendo a linha de resultado como uma matriz associativa
    $row = $result_ultimo_quest->fetch_assoc();
    $created = $row["created"];
} else {
    echo "No records found";
};


// Criando um objeto DateTime com a data atual
$currentDate = new DateTime();

// Criando um objeto DateTime com a data que deseja comparar
$dateString = $created;
$compareDate = new DateTime($dateString);

// Calculando a diferença entre as duas datas
$dateInterval = $currentDate->diff($compareDate);

// Exibindo a diferença em dias
$days = $dateInterval->days;





// Consulta SQL para selecionar o último registro inserido na tabela 'users'
$sql_contagem = "SELECT COUNT(id) AS total FROM questionario2 WHERE USER = '$nome_logado'";
$result_contagem = $conn->query($sql_contagem);

if ($result_contagem->num_rows > 0) {
    // Obtendo a linha de resultado como uma matriz associativa
    $row = $result_contagem->fetch_assoc();
    $contagem_questionarios = $row["total"];
} else {
    echo "No records found";
};







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
    $cadastrar = "questionario/questionario.php";
    $cadastrar_texto = "Responder Questionario";
}

if(isset($_SESSION['email'])) {
    $logado = "logado";
} else {
    // a sessão não está ativa, redirecione o usuário para a página de login
   $logado = "deslogado";
}


// $logadao = isset($_SESSION['email']) ?  $_SESSION['email'] : "deslogado";


// echo $logado;

// echo $logado;



// echo $url;


?>



<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>D.E.F.I.N.E</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url ?>assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url ?>assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url ?>assets/img/favicons/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $url ?>assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?php echo $url ?>assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?php echo $url ?>assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="<?php echo $url ?>vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo $url ?>vendors/simplebar/simplebar.min.js"></script>
    <script src="<?php echo $url ?>assets/js/config.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.2.0/vanilla-masker.min.js"></script>



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="<?php echo $url ?>vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="<?php echo $url ?>assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="<?php echo $url ?>assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="<?php echo $url ?>assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="<?php echo $url ?>assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="<?php echo $url ?>vendors/choices/choices.min.css" rel="stylesheet" />
    <script>
    var phoenixIsRTL = JSON.parse(localStorage.getItem('phoenixIsRTL'));
    if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }
    </script>
</head>