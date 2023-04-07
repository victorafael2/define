<?php
include '../header.php';
// include '../conexao/conexao.php';
// session_start();
// echo $_SESSION['email'];
$email =  $_SESSION['email'];

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

    echo $setor;


    $sql_setores = "SELECT tab.id,tab.descricao AS desc_inf, busca.descricao, tab.sim, tab.nao,

    IFNULL(busca.icon , 'novo') as icon
    
FROM tabelas AS tab

    LEFT JOIN (SELECT * FROM tabelas WHERE id IN ($nova_string)) AS busca ON tab.id = busca.id ";



$result_setores = mysqli_query($conn, $sql_setores);
// // Verificar se a consulta retornou algum resultado
// if (mysqli_num_rows($result_setores) > 0) {
//     // Exibir os resultados
//     while($row = mysqli_fetch_assoc($result_setores)) {

//         $desc = $row["descricao"];
//         $id = $row["id"];
        

//     }};

// echo $sql_setores;



$diag = $_GET['id'];

// Verificar se houve algum erro na conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Executar a consulta
$sql = "SELECT * FROM questionario2 where id = '$diag'";
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
            $beneficio_inovacao = $soma_beneficio_inovacao / $contador_beneficio_inovacao;


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
</style>



<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main>


        <?php include '../nav.php' ?>





        <div class="container py-10">

            <div class="card border border-300 mb-3">

                <div class="row list">
                    <div class="col-6">
                        <div class="card-body">
                            <div class="row align-items-center g-3 text-center text-xxl-start">
                                <div class="container py-1">
                                    <div class="row">

                                        <div class="container py-1">
                                            <h2>Diagnóstico</h2>


                                            <!-- <div id="chart1"> -->


                                            <canvas id="chart" width="200" height="200"></canvas>
                                            <div class="modal fade" tabindex="-1" role="dialog" id="videoModal">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Vídeo do YouTube</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="ratio ratio-16x9">
                                                                <iframe class="embed-responsive-item" id="video" src=""  allowfullscreen></iframe>
                                                            </div>


                                                        </div>
                                                        <!-- <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Fechar</button>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-6">
                        <div class="card-body">
                            <div class="row align-items-center g-3 text-center text-xxl-start">
                                <div class="container py-1">
                                    <div class="row">

                                        <div class="container py-1">
                                            <h2>Diagnóstico</h2>


                                            <div id="chart2"></div>


                                            <div class="modal fade" tabindex="-1" role="dialog" id="youtubeModal">
                                                <div class="modal-dialog modal-dialog-centered" >
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                            <h5 class="modal-title">Vídeo do YouTube</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe class="embed-responsive-item" id="youtubeVideo" width="100%" height="315"
                                                                frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                allowfullscreen></iframe>
                                                        </div>
                                                        </div>
                                                        <!-- <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Fechar</button>
                                                        </div> -->
                                                    </div>
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

                                    <div class="container py-5">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <th>Recurso Não Reembolsável</th>
                                                    <th>Recurso Reembolsável</th>
                                                    <th>Lei do Bem</th>
                                                    <th>Rota 2030</th>
                                                    <th>Lei de Informática</th>
                                                    <th>ANP</th>
                                                    <th>ANEEL</th>
                                                    <th>Uso indireto das Leis de Incentivo</th>
                                                    <th>Pró-Startup (FACEPE)</th>
                                                    <th>Bônus Tecnológico (FACEPE)</th>
                                                </tr>

                                                <tr>




                                                    <?php
                                                // Inicializa o contador
                                            $contador = 0;
                                            // Loop para percorrer os resultados da consulta e criar as linhas da tabela
                                            while ($row = mysqli_fetch_assoc($result_setores)) {

                                                $resultado = ($row['icon'] === 'novo') ? '<span class="fa-solid fa-circle-info text-info fs-2 "></span>' : $row['icon'];
                                                $link = ($row['icon'] === 'novo') ? $row['nao'] : $row['sim'];
                                                $youtube = 'https://www.youtube.com/embed/';

                                                // echo $youtube.$link.";";



                                                            // echo "<td class='text-center trigger". $contador . "'>" . $resultado . "</td>";

                                                            echo '<td class="text-center">

                                                            <button type="button" class="btn btn-ligth " data-bs-toggle="modal" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip no topo!"
                                                            data-bs-target="#videoModal' . $contador . '">

                                                            ' . $resultado . '

                                                        </button>
                                                            </td>';



                                                        //     echo '<button type="button" class="btn btn-ligth" data-bs-toggle="modal"
                                                        //     data-bs-target="#videoModal">
                                                        //     Open Video Modal
                                                        // </button>';

                                                                    echo ' <div class="modal fade" id="videoModal' . $contador . '" tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">' . $row['desc_inf'] . '</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="ratio ratio-16x9">
                                                                                    <iframe src="https://www.youtube.com/embed/'.$link.'"
                                                                                        allowfullscreen></iframe>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Fechar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>';
                                                           
                                                        // Incrementa o contador
                                                        $contador++;
                                                    }

                                                    // Exibe o valor final do contador
                                                    // echo "O loop while foi executado $contador vezes.";
                                            ?>


                                                </tr>
                                            </table>
                                        </div>



                                        <?php echo $linha ?>





                                    </div>
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


    <script>
        const data = [
          {
            name: "Video 1",
            x: 20,
            y: 30,
            z: 10,
            url: "https://www.youtube.com/embed/VIDEO_ID_1"
          },
          {
            name: "Video 2",
            x: 30,
            y: 20,
            z: 15,
            url: "https://www.youtube.com/embed/VIDEO_ID_2"
          },
        ];

        const options = {
          chart: {
            type: "bubble",
            height: 350,
            events: {
              markerClick: function(event, chartContext, { seriesIndex, dataPointIndex }) {
                const videoUrl = data[dataPointIndex].url;
                $("#youtubeVideo").attr("src", videoUrl);
                $("#youtubeModal").modal("show");
              },
            },
          },
          series: [
            {
              name: "Videos",
              data: data,
            },
          ],
          fill: {
            type: "solid",
          },
        };

        const chart2 = new ApexCharts(document.querySelector("#chart2"), options);
        chart2.render();
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
document.addEventListener("DOMContentLoaded", function() {
    const chartElement = document.getElementById("chart").getContext("2d");

    const data = {
        labels: ['Tecnologia', 'Potencial Tecnologico', 'Tipo Inovação', 'Risco Tecnologico',
            'Impacto Cientifico Tecnologico', 'Infra estrutura da empresa', 'Parcerias',
            'Impacto Gerais',
            'Equipe', 'Beneficios Inovação'
        ],
        datasets: [{
            label: "Fomento",
            data: [<?php echo $linha ?>],
            backgroundColor: "rgba(42, 157, 244, 0.2)",
            borderColor: "rgb(3, 37, 76)",
            borderWidth: 1,
        }, ],
    };

    const options = {
        scales: {
            y: {
                beginAtZero: true,
            },
        },

    };

    const chart = new Chart(chartElement, {
        type: "radar",
        data: data,
        options: options,

    });

    const videos = [
        "https://www.youtube.com/embed/x1WZZWYUmTA",
        "https://www.youtube.com/embed/4beAfc2OdFQ",
        "https://www.youtube.com/embed/video3",
        "https://www.youtube.com/embed/video4",
        "https://www.youtube.com/embed/video5",
    ];

    document.getElementById("chart").onclick = function(event) {
        const
            activePoint = chart.getElementsAtEventForMode(event, "nearest", {
                intersect: true
            }, true)[0];
        if (activePoint) {
            const index = activePoint.index;
            const videoElement = document.getElementById("video");
            videoElement.src = videos[index];

            $("#videoModal").on("hidden.bs.modal", function() {
                videoElement.src = "";
            });

            $("#videoModal").modal("show");
        }
    };
});
</script>


<!--
<script>
function createChart1() {
    const options1 = {
        series: [{
        name: 'Fomento',
        data: [<?php echo $linha ?>],
    }],
    chart: {
        height: 350,
        type: 'radar',
    },
    dataLabels: {
        enabled: true,
        background: {
    enabled: true,
    borderRadius:2,
  }
    },
    plotOptions: {
        radar: {
            size: 140,
            polygons: {
                strokeColors: '#e9e9e9',
                fill: {
                    colors: ['#f8f8f8', '#fff']
                }
            }
        }
    },
    title: {
        // text: 'Radar with Polygon Fill'
    },
    colors: ['#2a9df4'],
    markers: {
        size: 4,
        colors: ['#fff'],
        strokeColor: '#2a9df4',
        strokeWidth: 2,
    },
    tooltip: {
        y: {
            formatter: function(val) {
                return val
            }
        }
    },

    // tooltip: {
    //         x: {
    //             formatter: function (value, { series, seriesIndex, dataPointIndex, w }) {
    //                 return "Eixo Personalizado " + value;
    //             },
    //         },
    xaxis: {
        categories: ['Tecnologia', 'Potencial Tecnologico', 'Tipo Inovação', 'Risco Tecnologico',
            'Impacto Cientifico Tecnologico', 'Infra estrutura da empresa', 'Parcerias', 'Impacto Gerais',
            'Equipe', 'Beneficios Inovação'
        ]
    },
    yaxis: {
        tickAmount: 7,
        labels: {
            formatter: function(val, i) {
                if (i % 2 === 0) {
                    return val
                } else {
                    return ''
                }
            }
        }
    }
};

    const chartElement1 = document.querySelector("#chart1");
    const chart1 = new ApexCharts(chartElement1, options1);
    chart1.render();
}

function createChart2() {
    const options2 = {
        series: [
            {
                name: "Exemplo 2",
                data: [25, 15, 35, 45, 55],
            },
        ],
        chart: {
            type: "bar",
            height: 350,
        },
        xaxis: {
            categories: ["Categoria 1", "Categoria 2", "Categoria 3", "Categoria 4", "Categoria 5"],
        },
    };

    const chartElement2 = document.querySelector("#chart2");
    const chart2 = new ApexCharts(chartElement2, options2);
    chart2.render();
}

document.addEventListener("DOMContentLoaded", function () {
    createChart1();
    createChart2();
});
</script> -->


<!-- <script>
var ctx = document.getElementById('myChart').getContext('2d');
var bubbleChart = new Chart(ctx, {
    type: 'bubble',
    data: {
        datasets: [{
            label: 'Dados Bubble',
            data: [{
                    x: 10,
                    y: 20,
                    r: 5
                },
                {
                    x: 15,
                    y: 10,
                    r: 15
                },
                {
                    x: 7,
                    y: 15,
                    r: 10
                }
            ],
            backgroundColor: 'rgba(255, 99, 132, 0.6)'
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script> -->


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