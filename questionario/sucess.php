<?php
include '../conexao/conexao.php';

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
        $risco_tecnologico = round($row["risco_tecnologico"]);
        $impacto_cientifico_tecnologico = round($row["impacto_cientifico_tecnologico"]);
        $infraestrutura_empresa = round($row["infraestrutura_empresa"]);
        $parcerias = round($row["parcerias"]);
        $impactos_gerais = round($row["impactos_gerais"]);
        $equipe = round($row["equipe"]);
        $beneficio_inovacao = round($row["beneficio_inovacao"]);
        $dados = array($tecnologia, $potencial_tecnologico, $tipologia_inovacao, $risco_tecnologico, $impacto_cientifico_tecnologico, $infraestrutura_empresa, $parcerias, $impactos_gerais, $equipe, $beneficio_inovacao);
        $linha = implode(", ", $dados);
        echo $linha."<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);



?>

<!DOCTYPE html>
<html>

<head>
    <title>Sucesso!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>

    <div class="container py-5">
        <h2>Cadastro realizado com sucesso!</h2>
        <p>Obrigado por se cadastrar em nosso sistema.</p>
		<a class="btn btn-primary btn-lg" href="../questionario/questionario1.php" role="button">Ir para questionário</a>

        <div id="chart">
</div>
    </div>


</body>

</html>


<script>
  var options = {
          series: [{
          name: 'Fomento',
          data: [<?php echo $linha ?>],
        }],
          chart: {
          height: 350,
          type: 'radar',
        },
        dataLabels: {
          enabled: true
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
          text: 'Radar with Polygon Fill'
        },
        colors: ['#FF4560'],
        markers: {
          size: 4,
          colors: ['#fff'],
          strokeColor: '#FF4560',
          strokeWidth: 2,
        },
        tooltip: {
          y: {
            formatter: function(val) {
              return val
            }
          }
        },
        xaxis: {
          categories: ['tecnologia','potencial_tecnologico','tipologia_inovacao','risco_tecnologico','impacto_cientifico_tecnologico','infraestrutura_empresa','parcerias','impactos_gerais','equipe','beneficio_inovacao'
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

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>