<?php
include '../header.php';
// include '../conexao/conexao.php';
// session_start();
// echo $_SESSION['email'];
error_reporting(0);
ini_set('display_errors', 0);


// $outro_email = $_GET["email"];

// $email =  $_SESSION['email'];

$email = empty($_GET["email"]) ? $_SESSION['email'] : $_GET["email"];

$diag = $_GET['id'];

if (empty($diag)) {
    echo '<script>window.location.href = "../adm/questionarios_respondidos.php";</script>';
    exit();
  }

// echo $conn;

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


$sql_usuario = "SELECT * FROM adm_setores AS setores

WHERE id = (SELECT setor FROM empresas WHERE email = '$email')";
$result_usuario = mysqli_query($conn, $sql_usuario);
// Verificar se a consulta retornou algum resultado
if (mysqli_num_rows($result_usuario) > 0) {
    // Exibir os resultados
    while($row = mysqli_fetch_assoc($result_usuario)) {

        $setor = $row["setor"];
        $link = $row["link"];
        $nova_string = str_replace(";", ",", $link);

    }};

    // echo $setor;
//     SELECT tab.id,tab.descricao AS desc_inf, busca.descricao, tab.sim, tab.nao,

//     IFNULL(busca.icon , 'novo') as icon

// FROM tabelas AS tab

//     LEFT JOIN (SELECT * FROM tabelas WHERE id IN ($nova_string)) AS busca ON tab.id = busca.id

    $sql_setores = "SELECT tab.id,tab.descricao AS desc_inf, busca.descricao, tab.sim, tab.nao,

    IFNULL(busca.icon , 'novo') as icon_1,

    lei_do_bem.regime_tributario AS lei_do_bem,
    uf.uf AS pro_startup,
    early.faturamento AS early,
    bonus.faturamento AS bonus,
    ufbonus.uf AS ufbonus,

    case
	 when lei_do_bem.regime_tributario = 'lucro_real' then 'icone_verde'
	 when uf.uf = 'PE' AND early.faturamento = 'early_stage' then 'icone_verde'
	 when ufbonus.uf = 'PE' and bonus.faturamento <> 'grande_empresa' then 'icone_verde'
	 ELSE IFNULL(busca.icon , 'novo')
	 END AS icon

FROM tabelas AS tab

    LEFT JOIN (SELECT * FROM tabelas WHERE id IN ($nova_string)) AS busca ON tab.id = busca.id


LEFT JOIN (SELECT id,
       CASE
         WHEN id <> '' THEN 3
         ELSE ''
       END AS STATUS, regime_tributario FROM questionario2

WHERE id = $diag) AS lei_do_bem ON tab.id = lei_do_bem.status

LEFT JOIN(
SELECT
       CASE
         WHEN id <> '' THEN 9
         ELSE ''
       END AS id, uf FROM empresas

WHERE email = '$email') AS uf ON tab.id = uf.id


LEFT JOIN(
SELECT id,
       CASE
         WHEN id <> '' THEN 9
         ELSE ''
       END AS id_early, faturamento FROM questionario2

WHERE id = $diag) AS early ON tab.id = early.id_early

LEFT JOIN(SELECT
       CASE
         WHEN id <> '' THEN 10
         ELSE ''
       END AS idbonus, faturamento FROM questionario2

WHERE id = $diag
) AS bonus ON tab.id = bonus.idbonus

LEFT JOIN(
SELECT
       CASE
         WHEN id <> '' THEN 10
         ELSE ''
       END AS idufbonus, uf FROM empresas

WHERE email = '$email') AS ufbonus ON tab.id = ufbonus.idufbonus

WHERE tab.id <> 9 AND tab.id <> 10";



echo $sql_setores;


$result_setores = mysqli_query($conn, $sql_setores);






// Verificar se houve algum erro na conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Executar a consulta
// $sql = "SELECT * FROM questionario2 where id = '$diag'";


$sql = "SELECT TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(tecnologia, ',', 1), ',', -1)) AS tecnologia,
TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(potencial_tecnologico, ',', 1), ',', -1)) AS potencial_tecnologico,
TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(tipologia_inovacao, ',', 1), ',', -1)) AS tipologia_inovacao,
TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(risco_tecnologico, ',', 1), ',', -1)) AS risco_tecnologico,
TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(impacto_tecnologico, ',', 1), ',', -1)) AS impacto_tecnologico,
TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(infraestrutura_empresa, ',', 1), ',', -1)) AS infraestrutura_empresa,
impactos_gerais,
TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(equipe, ',', 1), ',', -1)) AS equipe,
beneficio_inovacao,
parcerias
 FROM questionario2 where id = '$diag'";
$result = mysqli_query($conn, $sql);

// Verificar se a consulta retornou algum resultado
if (mysqli_num_rows($result) > 0) {
    // Exibir os resultados
    while($row = mysqli_fetch_assoc($result)) {
        // echo "ID: " . $row["id"] . " - Nome: " . $row["tecnologia"] . "<br>";

        $tecnologia = round($row["tecnologia"]);
        $potencial_tecnologico = round($row["potencial_tecnologico"]);
        $tipologia_inovacao = round($row["tipologia_inovacao"]);
        $risco_tecnologico = $row["risco_tecnologico"];
        $impacto_cientifico_tecnologico = $row["impacto_tecnologico"];
        $infraestrutura_empresa = round($row["infraestrutura_empresa"]);

        // $valores_impactos_gerais = $row["impactos_gerais"];
        $string_impactos_gerais = "$row[impactos_gerais]";
        $valores_impactos_gerais = explode(",",$string_impactos_gerais);
            // Calcular a média
            $contador_impactos_gerais= count($valores_impactos_gerais);
            $soma_impactos_gerais = array_sum($valores_impactos_gerais);
            $impactos_gerais = $soma_impactos_gerais / $contador_impactos_gerais;





        $equipe = round($row["equipe"]);
        $string_beneficios = "$row[beneficio_inovacao]";
        $valores_beneficio_inovacao = explode(",",$string_beneficios);

        // echo $array;
            // Calcular a média
            $contador_beneficio_inovacao= count($valores_beneficio_inovacao);
            $soma_beneficio_inovacao = array_sum($valores_beneficio_inovacao);
            $beneficio_inovacao = round($soma_beneficio_inovacao / $contador_beneficio_inovacao);


            // parcerias
            // $parcerias = round($row["parcerias"]);
            $string_parcerias = "$row[parcerias]";
            $valores_parcerias = explode(",",$string_parcerias);

            // echo $array;
                // Calcular a média
                $contador_parcerias= count($valores_parcerias);
                $soma_parcerias = array_sum($valores_parcerias);
                $parcerias = $soma_parcerias / $contador_parcerias;




        $dados = array($tecnologia, $potencial_tecnologico, $tipologia_inovacao, $risco_tecnologico, $impacto_cientifico_tecnologico, $infraestrutura_empresa, $parcerias, $impactos_gerais, $equipe, $beneficio_inovacao);
        $linha = implode(", ", $dados);
        // echo $linha."<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}



// Executar a consulta
$sql_2 = "SELECT * FROM tabelas where id in ('1,2')";
$result_2 = mysqli_query($conn, $sql_2);



// Fechar a conexão com o banco de dados
// mysqli_close($conn);




// valores para grafico de bolha

// faturamento porte
$sql_grafico_bolha = "select * from questionario2 WHERE USER = '$email'";
$sql_grafico_bolha_result = mysqli_query($conn, $sql_grafico_bolha);

if (mysqli_num_rows($result_usuario) > 0) {
    // Exibir os resultados
    while($row = mysqli_fetch_assoc($sql_grafico_bolha_result)) {

        $faturamento = $row["faturamento"];
        $lucro = $row["regime_tributario"];
        $g_inovacao = $row["beneficio_inovacao"];
        $p_inovacao = $row["potencial_tecnologico"];
        $t_inovacao = $row["tipologia_inovacao"];
        $r_tecnologico = $row["risco_tecnologico"];
        $i_tecnologico = $row["impacto_tecnologico"];
        $i_da_empresa = $row["infraestrutura_empresa"];
        $parceria = $row["parcerias"];
        $e_equipe = $row["equipe"];





        $nova_string = str_replace(";", ",", $link);

    }};


?>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


<!-- Inclua a biblioteca do Magnific Popup -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<style>
.dialog {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1;
}

.dialog2 {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1;
}

.trigger:hover .dialog {
    display: block;
}

.trigger2:hover .dialog2 {
    display: block;
}


.tooltip {
    position: relative;
    display: inline-block;
    cursor: pointer;
}

.tooltip::before,
.tooltip::after {
    content: '';
    position: absolute;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.2s;
}

.tooltip::before {
    content: attr(data-tooltip);
    background-color: #555;
    color: #fff;
    padding: 4px 8px;
    font-size: 14px;
    border-radius: 4px;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
}

.tooltip::after {
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
    bottom: 90%;
    left: 50%;
    transform: translateX(-50%);
}

.tooltip:hover::before,
.tooltip:hover::after {
    visibility: visible;
    opacity: 1;
}



@keyframes pulse {
    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.2);
    }

    100% {
        transform: scale(1);
    }
}

.animated {
    animation-name: pulse;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}

@media (max-width: 768px) {
    #chart23 .apexcharts-data-labels {
        display: none !important;
    }
}
</style>



<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main>


        <?php include '../nav.php' ?>





        <div class="container py-10">

            <!-- <?php echo $sql_setores; ?> -->

            <div class="row g-3 ">
                <div class="col-12">
                    <div class="row text-center">
                        <div class="container py-1">
                            <h2><b>Diagnóstico:</b>
                                <p class="text-muted"><?php echo $first_name ?> - <?php echo $empresa ?></p>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row g-0 mb-0 align-items-center">
                    <div class="col-5 col-md-6">
                        <!-- <h4 class="mb-0 text-1100 fw-bold fs-md-2"><span
                                class="calendar-day d-block d-md-inline mb-1">Tuesday</span><span
                                class="px-3 fw-thin text-400 d-none d-md-inline">|</span><span class="calendar-date">9
                                May, 2023</span></h4> -->
                    </div>
                    <div class="col-7 col-md-6 d-flex justify-content-end">

                        <a class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                            href="../adm/questionarios_respondidos.php" data-bs-target="#addEventModal"><i
                                class="fa-regular fa-rectangle-list pe-2 fs--2"></i> Meus Relatórios </a>
                    </div>
                </div>
                <div class="row g-3 ">
                    <div class="col-12 col-lg-6">
                        <div class="card h100">
                            <div class="card-body">
                                <div class="row align-items-center g-3 text-center text-xxl-start">
                                    <div class="container py-1">
                                        <div class="row">

                                            <div class="container py-1">
                                                <h3>Diagnóstico de Fomento</h3>


                                                <!-- <div id="chart1"> -->




                                                <div id="chart23"></div>


                                                <!-- <div class="modal fade" tabindex="-1" role="dialog" id="youtubeModal">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Fomento</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="ratio ratio-16x9">
                                                                    <iframe class="embed-responsive-item"
                                                                        id="youtubeVideo" width="100%" height="315"
                                                                        frameborder="0"
                                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                        allowfullscreen></iframe>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div> -->







                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-6col-12 col-lg-6">
                        <div class="card h100">
                            <div class="card-body">
                                <div class="row align-items-center g-3 text-center text-xxl-start">
                                    <div class="container py-1">
                                        <div class="row">

                                            <div class="container py-1">


                                                <h3>Diagnóstico</h3>


                                                <div id="chart2"></div>


                                                <div class="modal fade" tabindex="-1" role="dialog" id="youtubeModal">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Oportunidade</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="ratio ratio-16x9">
                                                                    <iframe class="embed-responsive-item"
                                                                        id="youtubeVideo" width="100%" height="315"
                                                                        frameborder="0"
                                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                        allowfullscreen></iframe>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>



                                                <div id="bubble-chart"></div>


                                                <div class="modal fade" id="videoModal" tabindex="-1">
                                                    <div class="modal-dialog  modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Vídeo do YouTube</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="embed-responsive embed-responsive-16by9">
                                                                    <iframe id="youtube-video"
                                                                        class="embed-responsive-item" width="100%"
                                                                        height="315" frameborder="0"
                                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                        allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <?php


                                                                                            // Query SQL
                                                                                            $sql_graf_2 = "SELECT
                                                                                            CASE WHEN regime_tributario = 'lucro_real' THEN 5 ELSE 3 end as regime_tributario,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(tecnologia, ',', 2), ',', -1))*1 AS g_inovacao_x,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(tecnologia, ',', 3), ',', -1))*1 AS g_inovacao_z,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(potencial_tecnologico, ',', 2), ',', -1))*1 AS potencial_tecnologico_x,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(potencial_tecnologico, ',', 3), ',', -1))*1 AS potencial_tecnologico_y,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(tipologia_inovacao, ',', 2), ',', -1))*1 AS tipologia_inovacao_x,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(tipologia_inovacao, ',', 3), ',', -1))*1 AS tipologia_inovacao_y,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(risco_tecnologico, ',', 2), ',', -1))*1 AS risco_tecnologico_x,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(risco_tecnologico, ',', 3), ',', -1))*1 AS risco_tecnologico_y,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(impacto_tecnologico, ',', 2), ',', -1))*1 AS impacto_tecnologico_x,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(impacto_tecnologico, ',', 3), ',', -1))*1 AS impacto_tecnologico_y,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(infraestrutura_empresa, ',', 2), ',', -1))*1 AS infraestrutura_empresa_x,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(infraestrutura_empresa, ',', 3), ',', -1))*1 AS infraestrutura_empresa_y,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(parcerias, ',', 2), ',', -1))*1 AS parcerias_x,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(parcerias, ',', 3), ',', -1))*1 AS parcerias_y,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(equipe, ',', 2), ',', -1))*1 AS equipe_x,
                                                                                            TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(equipe, ',', 3), ',', -1))*1 AS equipe_y
                                                                                            FROM questionario2 WHERE id = '$diag'";


                                                                                            $resultado = $conn->query($sql_graf_2);

                                                                                            if (mysqli_num_rows($resultado) > 0) {
                                                                                                // Retorna o primeiro resultado como um array associativo
                                                                                                $row = mysqli_fetch_assoc($resultado);
                                                                                                // chave do array associativo
                                                                                                $regime_tributario = $row["regime_tributario"];
                                                                                                $g_inovacao_x = $row["g_inovacao_x"];
                                                                                                $g_inovacao_z = $row["g_inovacao_z"];
                                                                                                $potencial_tecnologico_x = $row["potencial_tecnologico_x"];
                                                                                                $potencial_tecnologico_y = $row["potencial_tecnologico_y"];
                                                                                                $tipologia_inovacao_x = $row["tipologia_inovacao_x"];
                                                                                                $tipologia_inovacao_y = $row["tipologia_inovacao_y"];
                                                                                                $risco_tecnologico_x = $row["risco_tecnologico_x"];
                                                                                                $risco_tecnologico_y = $row["risco_tecnologico_y"];
                                                                                                $impacto_tecnologico_x = $row["impacto_tecnologico_x"];
                                                                                                $impacto_tecnologico_y = $row["impacto_tecnologico_y"];
                                                                                                $infraestrutura_empresa_x = $row["infraestrutura_empresa_x"];
                                                                                                $infraestrutura_empresa_y = $row["infraestrutura_empresa_y"];
                                                                                                $parcerias_x = $row["parcerias_x"];
                                                                                                $parcerias_y = $row["parcerias_y"];
                                                                                                $equipe_x = $row["equipe_x"];
                                                                                                $equipe_y = $row["equipe_y"];

                                                                                                // Calcular a média dos campos que terminam com "x"
                                                                                                $media_x = round(($g_inovacao_x + $potencial_tecnologico_x + $tipologia_inovacao_x +
                                                                                                $risco_tecnologico_x + $impacto_tecnologico_x + $infraestrutura_empresa_x +
                                                                                                $parcerias_x + $equipe_x) / 8,0);

                                                                                                // Calcular a média dos campos que terminam com "y"
                                                                                                $media_y = round(($g_inovacao_z + $potencial_tecnologico_y + $tipologia_inovacao_y + $risco_tecnologico_y +
                                                                                                $impacto_tecnologico_y + $infraestrutura_empresa_y + $parcerias_y +
                                                                                                $equipe_y) / 8,0);


                                                                                                // echo $media_x;
                                                                                                // echo "</br>";
                                                                                                // echo $media_y;

                                                                                                } else {
                                                                                                echo "Não foram encontrados resultados.";
                                                                                                }

                                                                                            ?>




                                                <script>
                                                // const videos = [
                                                //     'https://www.youtube.com/embed/0Qzcw64Bwu0',

                                                // ];

                                                const data = [{
                                                    x: <?php echo $media_x ?>,
                                                    y: <?php echo $media_y ?>,
                                                    z: 1,
                                                    img: 'https://link.da.imagem1.com',
                                                    url: "https://www.youtube.com/embed/0Qzcw64Bwu0"
                                                }, {
                                                    x: 0,
                                                    y: 0,
                                                    z: 0
                                                }, {
                                                    x: 1,
                                                    y: 0,
                                                    z: 0
                                                }, {
                                                    x: 2,
                                                    y: 0,
                                                    z: 0
                                                }];

                                                data.sort(function(a, b) {
                                                    return a.x - b.x;
                                                });

                                                const options = {


                                                    chart: {
                                                        type: "bubble",
                                                        height: 500,
                                                        toolbar: {
                                                            show: false
                                                        },





                                                        // events: {
                                                        //     markerClick: function(event, chartContext, {
                                                        //         seriesIndex,
                                                        //         dataPointIndex
                                                        //     }) {
                                                        //         const videoUrl = data[dataPointIndex].url;
                                                        //         $("#youtubeVideo").attr("src", videoUrl);
                                                        //         $("#youtubeModal").modal("show");
                                                        //     },
                                                        // },
                                                    },


                                                    series: [{
                                                        name: 'Ponto',
                                                        data: data,
                                                    }],


                                                    markers: {
                                                        size: 8,
                                                        image: {
                                                            width: 32,
                                                            height: 32
                                                        }
                                                    },


                                                    plotOptions: {
                                                        bubble: {
                                                            minBubbleRadius: 5,
                                                            maxBubbleRadius: 40,
                                                        },
                                                    },
                                                    xaxis: {
                                                        title: {
                                                            text: 'Potencial de Inovação'
                                                        },
                                                        tickInterval: 1,
                                                        min: 0,
                                                        max: 5,
                                                        // labels: {
                                                        //     formatter: function(val) {
                                                        //         return Math.abs(val)
                                                        //     }
                                                        // }
                                                    },
                                                    yaxis: {
                                                        title: {
                                                            text: 'Potencial de Fomento'
                                                        },
                                                        tickInterval: 1,
                                                        min: 0,
                                                        max: 5,
                                                        // labels: {
                                                        //     formatter: function(val) {
                                                        //         return Math.abs(val)
                                                        //     }
                                                        // }
                                                    },
                                                    zaxis: {
                                                        show: false,
                                                    },
                                                };

                                                const chart = new ApexCharts(document.getElementById(
                                                        'bubble-chart'),
                                                    options);
                                                chart.render();
                                                </script>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" mb-3">
                <div class="card-body">
                    <div class="row align-items-center g-3 text-center text-xxl-start">
                        <div class="container py-5">
                            <div class="row">

                                <div class="container py-0">
                                    <div class="table-responsive scrollbar ms-n1 px1">

                                        <div class="d-flex justify-content-center py-3">
                                            <h3>Mecanismos de fomento para inovação</h3>

                                        </div>
                                        <table class="table table-striped table-bordered">

                                            <!-- <tr>
                                                <th style="text-align: center;">Recurso Não Reembolsável <sup><span
                                                            class="fa-solid fa-circle-info text-info  "></span></sup>
                                                </th>
                                                <th style="text-align: center;">Recurso Reembolsável <sup><span
                                                            class="fa-solid fa-circle-info text-info  "></span></sup>
                                                </th>
                                                <th style="text-align: center;">Lei do Bem <sup><span
                                                            class="fa-solid fa-circle-info text-info  "></span></sup>
                                                </th>
                                                <th style="text-align: center;">Rota 2030 <sup><span
                                                            class="fa-solid fa-circle-info text-info  "></span></sup>
                                                </th>
                                                <th style="text-align: center;">Lei de Informática <sup><span
                                                            class="fa-solid fa-circle-info text-info  "></span></sup>
                                                </th>
                                                <th style="text-align: center;">ANP <sup><span
                                                            class="fa-solid fa-circle-info text-info  "></span></sup>
                                                </th>
                                                <th style="text-align: center;">ANEEL <sup><span
                                                            class="fa-solid fa-circle-info text-info  "></span></sup>
                                                </th>
                                                <th style="text-align: center;">Embrapii <sup><span
                                                            class="fa-solid fa-circle-info text-info  "></span></sup>
                                                </th>

                                            </tr> -->

                                            <!-- <tr>
                                                <th style="text-align: center;"><a
                                                        href="https://www.youtube.com/watch?v=VIDEO_ID"
                                                        class="video-link">Recurso Não Reembolsável</a></th>
                                                <th style="text-align: center;"><a
                                                        href="https://www.youtube.com/watch?v=VIDEO_ID"
                                                        class="video-link">Recurso Reembolsável</a></th>
                                                <th style="text-align: center;"><a
                                                        href="https://www.youtube.com/watch?v=VIDEO_ID"
                                                        class="video-link">Lei do Bem</a></th>
                                                <th style="text-align: center;"><a
                                                        href="https://www.youtube.com/watch?v=VIDEO_ID"
                                                        class="video-link">Rota 2030</a></th>
                                                <th style="text-align: center;"><a
                                                        href="https://www.youtube.com/watch?v=VIDEO_ID"
                                                        class="video-link">Lei de Informática</a></th>
                                                <th style="text-align: center;"><a
                                                        href="https://www.youtube.com/watch?v=VIDEO_ID"
                                                        class="video-link">ANP</a></th>
                                                <th style="text-align: center;"><a
                                                        href="https://www.youtube.com/watch?v=VIDEO_ID"
                                                        class="video-link">ANEEL</a></th>
                                                <th style="text-align: center;"><a
                                                        href="https://www.youtube.com/watch?v=VIDEO_ID"
                                                        class="video-link">Embrapii</a></th>
                                            </tr> -->
                                                <?php
                                                                                            // Executa o SELECT
                                                $sql = "SELECT descricao, sim FROM tabelas";
                                                $result = $conn->query($sql);

                                                // Verifica se há resultados
                                                if ($result->num_rows > 0) {
                                                    echo "<tr>";
                                                    // Itera sobre os resultados e constrói cada <th> da tabela
                                                    while ($row = $result->fetch_assoc()) {
                                                        $nome_coluna = $row["descricao"];
                                                        $video =  $row["sim"];

                                                        // Constrói o <th> para cada linha do banco de dados
                                                        echo "<th style='text-align: center;'><a href='https://www.youtube.com/watch?v=$video' class='video-link dropdown-item fs--1'>$nome_coluna <img src='../assets/gif/video-player.png' width='18' height='18' class='animated'></a></th>";
                                                    }
                                                    echo "</tr>";
                                                } else {
                                                    echo "Nenhum resultado encontrado.";
                                                }
                                                ?>


                                                            <script>
                                                                $(document).ready(function() {
                                                                $('.video-link').magnificPopup({
                                                                    type: 'iframe',
                                                                    iframe: {
                                                                    patterns: {
                                                                        youtube: {
                                                                        index: 'youtube.com/',
                                                                        id: 'v=',
                                                                        src: 'https://www.youtube.com/embed/%id%?autoplay=1' // Defina autoplay como 1 para iniciar automaticamente o vídeo
                                                                        }
                                                                    }
                                                                    },
                                                                    callbacks: {
                                                                    open: function() {
                                                                        var magnificPopup = $.magnificPopup.instance;
                                                                        // Verifica se o conteúdo é um vídeo do YouTube
                                                                        if (magnificPopup.content.find('iframe').length > 0) {
                                                                        // Pausa qualquer vídeo existente antes de iniciar o novo vídeo
                                                                        magnificPopup.content.find('iframe').each(function() {
                                                                            this.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
                                                                        });
                                                                        }
                                                                    }
                                                                    }
                                                                });
                                                                });
                                                            </script>


                                            <tr>




                                                <?php
                                                // Inicializa o contador
                                            $contador = 0;
                                            // Loop para percorrer os resultados da consulta e criar as linhas da tabela
                                            while ($row = mysqli_fetch_assoc($result_setores)) {
                                                // <span class="gif"></span>
                                                // <span class="far fa-check-circle text-success fs-2"></span>
                                                // $gif = '<img src="../assets/gif/video-player.png" width="32" height="32" class="animated">';
                                                $gif = '<span class="far fa-check-circle text-success fs-3"></span>';
                                                $gif_atention = '<i class="fa-solid fa-circle-info text-info fs-3"></i>';

                                                $resultado = ($row['icon'] === 'novo') ? '' : ($row['icon'] === 'icone_verde' ? $gif :$gif);
                                                $link = ($row['icon'] === 'novo') ? $row['nao'] : $row['sim'];
                                                $youtube = 'https://www.youtube.com/embed/';

                                                // echo $youtube.$link.";";



                                                            // echo "<td class='text-center trigger". $contador . "'>" . $resultado . "</td>";

                                                            echo '<td class="text-center">

                                                            <button type="button" class="btn btn-ligth " data-bs-toggle="modal" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-target="#videoModal' . $contador . '">

                                                            ' . $resultado . '

                                                        </button>
                                                            </td>';

                                                                    echo ' <div class="modal fade" id="videoModal' . $contador . '" tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">' . $row['desc_inf'] . '</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="ratio ratio-16x9" id="player' . $contador . '">
                                                                                    <iframe src="https://www.youtube.com/embed/'.$link.'"
                                                                                        allowfullscreen></iframe>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal" onclick="pauseVideo()">Fechar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>';

                                                                // echo '<script>';
                                                                // echo 'var player;';
                                                                // echo 'function onYouTubeIframeAPIReady() {';
                                                                // echo '  player = new YT.Player(\'player'. $contador .'\', {';
                                                                // echo '    videoId: \''. $link .'\'';
                                                                // echo '  });';
                                                                // echo '}';
                                                                // echo 'function pauseVideo'. $contador .'() {';
                                                                // echo '  player.pauseVideo'. $contador .'();';
                                                                // echo '}';
                                                                // echo '</script>';




                                                                    echo '     </script>';



                                                        // Incrementa o contador
                                                        $contador++;
                                                    }

                                                    // Exibe o valor final do contador
                                                    // echo "O loop while foi executado $contador vezes.";
                                            ?>


                                            </tr>
                                        </table>
                                    </div>



                                    <!-- <?php echo $linha ?> -->





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


















        <?php include '../footer.php' ?>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <?php
$sql_grafico_2 = "SELECT CASE WHEN regime_tributario = 'lucro_real' THEN 5 ELSE 3 end as regime_tributario,
TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(tecnologia, ',', 2), ',', -1)) AS g_inovacao_x,
TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(tecnologia, ',', 3), ',', -1)) AS g_inovacao_y

 FROM questionario2 where id = '$diag'";

$result_sql_grafico_2 = mysqli_query($conn, $sql_grafico_2);
if (mysqli_num_rows($result_sql_grafico_2) > 0) {
    // Exibir os resultados
    while($row = mysqli_fetch_assoc($result_sql_grafico_2)) {
        $regime_tributario = $row["regime_tributario"];
        $g_inovacao_x = $row["g_inovacao_x"];
        $g_inovacao_y = $row["g_inovacao_y"];

   } } else {
        echo "Nenhum resultado encontrado.";
    }




?>


    <script src="https://www.youtube.com/iframe_api"></script>

    <script>
    var players = [];

    function onYouTubeIframeAPIReady() {
        players.push(new YT.Player('player0', {
            videoId: 'G6oGbQrXLjE'
        }));
        players.push(new YT.Player('player1', {
            videoId: 'bI834H6ZklE'
        }));
        players.push(new YT.Player('player2', {
            videoId: '2Q3iY3ElPdU'
        }));
        players.push(new YT.Player('player3', {
            videoId: '1m4Ex7rC8Ik'
        }));
        players.push(new YT.Player('player4', {
            videoId: 'j3MpT043uPQ'
        }));
        players.push(new YT.Player('player5', {
            videoId: '7zftaLNpeJw'
        }));
        players.push(new YT.Player('player6', {
            videoId: 'RrX0qPELsRA'
        }));
        players.push(new YT.Player('player7', {
            videoId: 'VFrIzp_ThMk'
        }));
    }

    function pauseAllVideos() {
        players.forEach(function(player) {
            player.pauseVideo();
        });
    }

    var closeButtons = document.querySelectorAll('[data-bs-dismiss="modal"]');
    closeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            pauseAllVideos();
        });
    });
    </script>


    <script>
    // const data = [{
    //         name: "Faturamento/Porte",
    //         x: 5,
    //         y: 5,
    //         z: 3,
    //         url: "https://www.youtube.com/embed/VIDEO_ID_1"
    //     },
    //     {
    //         name: "Lucro",
    //         x:  0,
    //         y: <?php echo $regime_tributario ?>,
    //         z: 4,
    //         url: "https://www.youtube.com/embed/VIDEO_ID_2"
    //     }
    //     ,
    //     {
    //         name: "Lucro",
    //         x:  0,
    //         y: 4,
    //         z: 4,
    //         url: "https://www.youtube.com/embed/VIDEO_ID_2"
    //     }
    // ];

    // const options = {
    //     chart: {
    //         type: "bubble",
    //         height: 350,
    //         events: {
    //             markerClick: function(event, chartContext, {
    //                 seriesIndex,
    //                 dataPointIndex
    //             }) {
    //                 const videoUrl = data[dataPointIndex].url;
    //                 $("#youtubeVideo").attr("src", videoUrl);
    //                 $("#youtubeModal").modal("show");
    //             },
    //         },
    //     },
    //     series: [{
    //         name: "Videos",
    //         data: data,
    //     }, ],
    //     fill: {
    //         type: "solid",
    //     },
    //     xaxis: {
    // tickAmount: 1,

    // },

    //     yaxis: {
    //         title: {
    //             text: "Fomento",
    //         },
    //         min: 0,
    //         max: 6,
    //     },
    // };

    // const chart2 = new ApexCharts(document.querySelector("#chart2"), options);
    // chart2.render();





    const data2 = [{

            x: "Tecnologia",
            y: <?php echo $tecnologia ?>,

            url: "https://www.youtube.com/embed/VIDEO_ID_1"
        },
        {

            x: "Potencial Tecnologico",
            y: <?php echo $potencial_tecnologico ?>,

            url: "https://www.youtube.com/embed/VIDEO_ID_2"
        },
        {

            x: "Tipo de Inovação",
            y: <?php echo $tipologia_inovacao ?>,
            url: "https://www.youtube.com/embed/VIDEO_ID_2"
        },
        {

            x: "Risco Tecnologico",
            y: <?php echo $risco_tecnologico ?>,
            url: "https://www.youtube.com/embed/VIDEO_ID_2"
        },
        {

            x: "Impacto Cientifico Tecnologico",
            y: <?php echo $impacto_cientifico_tecnologico ?>,
            url: "https://www.youtube.com/embed/VIDEO_ID_2"
        },
        {

            x: "Infra estrutura da empresa",
            y: <?php echo $infraestrutura_empresa ?>,
            url: "https://www.youtube.com/embed/VIDEO_ID_2"
        },
        {

            x: "Parcerias",
            y: <?php echo $parcerias ?>,
            url: "https://www.youtube.com/embed/VIDEO_ID_2"
        },
        {

            x: "Impactos Gerais",
            y: <?php echo $impactos_gerais ?>,
            url: "https://www.youtube.com/embed/VIDEO_ID_2"
        },
        {

            x: "Equipe",
            y: <?php echo $equipe ?>,
            url: "https://www.youtube.com/embed/VIDEO_ID_2"
        },
        {

            x: "Beneficios Inovação",
            y: <?php echo $beneficio_inovacao ?>,
            url: "https://www.youtube.com/embed/VIDEO_ID_2"
        },
    ];

    const options2 = {
        chart: {
            type: "radar",
            height: 500,
            // events: {
            //     markerClick: function(event, chartContext, {
            //         seriesIndex,
            //         dataPointIndex
            //     }) {
            //         const videoUrl = data2[dataPointIndex].url;
            //         $("#youtubeVideo").attr("src", videoUrl);
            //         $("#youtubeModal").modal("show");
            //     }
            // }
        },
        series: [{
            name: "Valor",
            data: data2
        }],
        responsive: [{
            breakpoint: 768,
            options: {
                // series: [{
                //     markers: {
                //         size: 4 // Altere o tamanho dos marcadores aqui
                //     }
                // }],
                chart: {
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: true
                    }
                },
                dataLabels: {
                    enabled: false
                }
            }
        }],
        fill: {
            type: "solid"
        },
        xaxis: {
            title: {
                text: "Eixo X"
            },
            min: 0,
            max: 6,
            reverse: false
        },
        yaxis: {
            show: false,
            title: {
                text: "Eixo Y"
            },
            min: 0,
            max: 6
        },
        markers: {
            size: 5,
            colors: ['#26A0c4'],
            strokeColor: '#26A0FC',
            strokeWidth: 1,
        },
    };

    const chart23 = new ApexCharts(document.querySelector("#chart23"), options2);
    chart23.render();
    </script>





</body>

</html>







<script>
document.addEventListener('DOMContentLoaded', function() {
    var videoModal = document.getElementById('videoModal');
    var videoIframe = videoModal.querySelector('iframe');

    videoModal.addEventListener('hide.bs.modal', function() {
        var videoSrc = videoIframe.src;
        videoIframe.src = '';
        videoIframe.src = videoSrc;
    });
});
</script>



<script>
document.addEventListener('DOMContentLoaded', function() {
    var trigger = document.querySelector('.trigger');
    var dialog = document.getElementById('dialog');

    trigger.addEventListener('mouseover', function() {
        dialog.style.display = 'block';
    });

    trigger.addEventListener('mouseout', function() {
        dialog.style.display = 'none';
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var trigger = document.querySelector('.trigger2');
    var dialog = document.getElementById('dialog2');

    trigger.addEventListener('mouseover', function() {
        dialog.style.display = 'block';
    });

    trigger.addEventListener('mouseout', function() {
        dialog.style.display = 'none';
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>

<script>
// Notificação com opções personalizadas
toastr.options = {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: 'toast-top-right',
    preventDuplicates: false,
    onclick: null,
    showDuration: '300',
    hideDuration: '1000',
    timeOut: '5000',
    extendedTimeOut: '1000',
    showEasing: 'swing',
    hideEasing: 'linear',
    showMethod: 'fadeIn',
    hideMethod: 'fadeOut'
};
toastr.info('Agora você pode ver os pontos fortes e fracos da sua startup.', 'Informação');
</script>


<script>
function hideLabelsOnMobile() {
    if (window.innerWidth <= 768) {
        var options = chart23.options;
        options.labels = ['', '', '', '', '', ''];
        chart23.updateOptions(options);
    }
}
</script>

<!-- <script>
window.onload = function() {
    hideLabelsOnMobile();
}

window.addEventListener('resize', function() {
    hideLabelsOnMobile();
});
</script> -->