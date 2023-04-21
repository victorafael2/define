<?php
// Define o tempo limite da sessão para 20 minutos
ini_set('session.gc_maxlifetime', 1200);
// date_default_timezone_set('America/Bahia');

session_start();






// echo date('Y-m-d H:i:s');





$url_base = htmlspecialchars(dirname($_SERVER['REQUEST_URI']), ENT_QUOTES, 'UTF-8');

$barra =  "/";

$diminuir = 2;

$url = $url_base.$barra;

$caractere = "/";

$stringParaRepetir = "../";

$contagem = substr_count($url, $caractere) - $diminuir;


// $url = str_repeat($stringParaRepetir, $contagem);

if ($contagem > 0) {
    $url = str_repeat($stringParaRepetir, $contagem);
  } else {

    $url = "";
  }


// echo $url;

$caminhobd = "conexao/conexao.php";

$caminho_full = $url.$caminhobd;

$index = "index.php";
$encerrar_sessao = "encerrar_sessao.php";

$url_encerrar_session = $url.$encerrar_sessao;


$url_index = $url.$index;
// echo $url_index;
include($caminho_full);




// Verifica se a sessão expirou
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1200)) {
    // A sessão expirou, destrói todas as variáveis de sessão
    session_unset();
    // Destroi a sessão
    session_destroy();
    // Redireciona o usuário para a página de login
    header('Location: ' . $url_index);
    exit;
}

// Atualiza a hora da última atividade
$_SESSION['LAST_ACTIVITY'] = time();


// // Verifica se a variável de sessão 'nome_logado' não está configurada
// if (!isset($_SESSION['email'])) {
//     // Verifica se o arquivo atual é index.php
//     if (basename($_SERVER['PHP_SELF']) == "index.php") {
//         // Faça outra coisa aqui
//     } else {
//         header("Location:  $url_index"); // Redireciona o usuário para a página inicial
//         exit(); // Encerra a execução do script atual
//     }
// }

// Verifica se a variável de sessão 'email' não está configurada
if (!isset($_SESSION['email'])) {
    // Verifica se o arquivo atual é index.php ou empresa.php
    $current_file = basename($_SERVER['PHP_SELF']);
    if ($current_file == "index.php" || $current_file == "empresa.php") {
      // Faça outra coisa aqui
    } else {
      // Redireciona o usuário para a página inicial
      header("Location: $url_index");
      exit(); // Encerra a execução do script atual
    }
  }





// // Verifica se a variável de sessão 'nome_logado' não está configurada
// if (!isset($_SESSION['email'])) {
//     header("Location: $url_index "); // Redireciona o usuário para a página inicial
//     exit(); // Encerra a execução do script atual
// }


$nome_logado = isset($_SESSION['email']) ? $_SESSION['email'] : '';



$sql_nome = "SELECT nome, empresa, cnpj, permissao FROM empresas WHERE email = '$nome_logado'";
$result_nome = $conn->query($sql_nome);

if ($result_nome->num_rows > 0) {
    // Obtendo a linha de resultado como uma matriz associativa
    $row = $result_nome->fetch_assoc();

    // Atribuindo o valor do campo 'first_name' à variável $first_name
    $p_nome = $row["nome"];
    $empresa = $row["empresa"];
    $cnpj = $row["cnpj"];
    $permissao = $row["permissao"];



};

$first_name = isset($p_nome) ? $p_nome : 'Entrar';
$v_logado = isset($p_nome) ? $p_nome : 'd-none';
$first_name = isset($p_nome) ? $p_nome : 'Entrar';
$permissao_1 = isset($permissao) ? $permissao : 'Entrar';
$permissao_class = $permissao_1 == "adm" ? "" : "d-none";

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
    // echo "No records found";
    // Define a variável como vazia
    $created = "";
};


// Criando um objeto DateTime com a data atual
$currentDate = new DateTime();

// Criando um objeto DateTime com a data que deseja comparar
$dateString = $created;
$compareDate = new DateTime($dateString);

// Calculando a diferença entre as duas datas
$dateInterval = $currentDate->diff($compareDate);

// Exibindo a diferença em dias
$days_time = $dateInterval->days;




//////4

// Defina a data de referência
$data_referencia = new DateTime($created);

// Obtenha a data e hora atual
$data_atual = new DateTime();

// Calcule a diferença entre as datas
$diferenca = date_diff($data_referencia, $data_atual);

// Obtenha a quantidade de dias e minutos
$dias = $diferenca->days;
$minutos = $diferenca->i;

// Exiba a quantidade de dias e minutos



/////




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
$cadastrar = "empresas/empresa.php";
$cadastrar_texto = "Cadastre-se e tenha acesso a oportundiades";
$botao_login = '<a class="btn btn-phoenix-secondary d-flex flex-center w-100"
href="' . $url . 'pages/authentication/simple/sign-in.php"> <span class="me-2"
    data-feather="log-in"> </span>

</a>' ;
// exit;
} else
{
    // logado
    $logado = "logado";
    $esconder_entrar = "d-none";
    $cadastrar = "questionario/questionario.php";
    $cadastrar_texto = "Responda o questionario e veja como podemos te ajudar";
    $botao_login = ' <form class="<?php echo $esconder_ ?>" method="post"
    action=" ' . $url . 'encerrar_sessao.php">
    <input type="hidden" name="encerrar_sessao" value="1">
    <input class="btn btn-phoenix-danger d-flex flex-center w-100" type="submit" value="Encerrar sessão">
</form>';
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


$nome_completo = "$first_name";
$palavras = explode(" ", $nome_completo);

$iniciais = "";
foreach ($palavras as $palavra) {
   $iniciais .= strtoupper(substr($palavra, 0, 1));
}

$duas_iniciais = substr($iniciais, 0, 2);

// echo $duas_iniciais; // Saída: JS



?>



<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">




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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $url ?>assets/img/favicons/favicon.png">
    <link rel="manifest" href="<?php echo $url ?>assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?php echo $url ?>assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="<?php echo $url ?>vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo $url ?>vendors/simplebar/simplebar.min.js"></script>
    <script src="<?php echo $url ?>assets/js/config.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.2.0/vanilla-masker.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">


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



<script>
// // Agende um "toast" para exibir uma mensagem para o usuário quando a sessão estiver prestes a expirar
// setTimeout(function() {
//     window.alert('Sua sessão está prestes a expirar em 2 minutos. Por favor, salve seu trabalho e faça login novamente.');
// }, 300); // 2 minutos



// Definindo o tempo limite de inatividade em minutos
const timeout = 15;

// Definindo a função que exibe o SweetAlert2
function exibirAlerta() {
  Swal.fire({
    title: 'Sessão prestes a expirar!',
    text: 'Sua sessão será encerrada em breve. Deseja continuar?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Sim',
    cancelButtonText: 'Não'
  }).then((result) => {
    if (result.isConfirmed) {
      // Se o usuário confirmar, reinicie o contador de inatividade
      reiniciarTempoInatividade();
    } else {
      // Se o usuário clicar em cancelar, redirecione para a página de login ou encerre a sessão
      // ...


      // Redireciona o usuário para a página de login
      window.location.href = "<?php echo $url_encerrar_session; ?>";
    }
  });
}

// Definindo a função que reinicia o contador de inatividade
function reiniciarTempoInatividade() {
  clearTimeout(contadorInatividade);
  contadorInatividade = setTimeout(exibirAlerta, timeout * 60 * 1000);
}

// Definindo a variável que armazena o tempo de inatividade
let contadorInatividade = setTimeout(exibirAlerta, timeout * 60 * 1000);

// Definindo os eventos que reiniciam o contador de inatividade
document.addEventListener('mousemove', reiniciarTempoInatividade);
document.addEventListener('keydown', reiniciarTempoInatividade);
document.addEventListener('click', reiniciarTempoInatividade);


</script>





<script src="<?php echo $url ?>vendors/popper/popper.min.js"></script>
<script src="<?php echo $url ?>vendors/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo $url ?>vendors/anchorjs/anchor.min.js"></script>
<script src="<?php echo $url ?>vendors/is/is.min.js"></script>
<script src="<?php echo $url ?>vendors/fontawesome/all.min.js"></script>
<script src="<?php echo $url ?>vendors/lodash/lodash.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="<?php echo $url ?>vendors/list.js/list.min.js"></script>
<script src="<?php echo $url ?>vendors/feather-icons/feather.min.js"></script>
<script src="<?php echo $url ?>vendors/dayjs/dayjs.min.js"></script>
<script src="<?php echo $url ?>assets/js/phoenix.js"></script>
</head>





