<?php
// Recupera os dados do formulário
$tecnologia = $_POST['tecnologia'];
$potencial_tecnologico = $_POST['potencial-tecnologico'];
$tipologia_inovacao = $_POST['tipologia-inovacao'];
$risco_tecnologico = $_POST['risco-tecnologico'];
$impacto_tecnologico = $_POST['impacto_tecnologico'];
$infraestrutura_empresa = $_POST['infraestrutura-empresa'];
$parcerias = $_POST['parcerias'];
$impactos_gerais = $_POST['impactos-gerais'];
$equipe = $_POST['equipe'];
$beneficio_inovacao = $_POST['beneficio-inovacao'];

// Conexão com o banco de dados
$conexao = mysqli_connect('localhost', 'root', '', 'define');

// Verifica se houve erro na conexão
if (mysqli_connect_errno()) {
    echo 'Erro ao conectar ao banco de dados: ' . mysqli_connect_error();
    exit();
}

// Prepara a query de inserção
$query = "INSERT INTO questionario2 (tecnologia, potencial_tecnologico, tipologia_inovacao, risco_tecnologico, impacto_cientifico_tecnologico, infraestrutura_empresa, parcerias, impactos_gerais, equipe, beneficio_inovacao) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepara o statement com a query
$stmt = mysqli_prepare($conexao, $query);

// Verifica se houve erro na preparação do statement
if (!$stmt) {
    echo 'Erro ao preparar a query: ' . mysqli_error($conexao);
    exit();
}

// Define os parâmetros da query e faz o bind dos valores
mysqli_stmt_bind_param($stmt, 'ssssssssss', $tecnologia, $potencial_tecnologico, $tipologia_inovacao, $risco_tecnologico, $impacto_cientifico_tecnologico, $infraestrutura_empresa, $parcerias, $impactos_gerais, $equipe, $beneficio_inovacao);

// Executa a query
$resultado = mysqli_stmt_execute($stmt);

$last_id = mysqli_insert_id($conexao);

// Verifica se houve erro na execução da query
if (!$resultado) {
    echo 'Erro ao inserir os dados: ' . mysqli_error($conexao);
    exit();
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);

// Redireciona para a página de sucesso
header("Location: sucess.php?id=".urlencode($last_id)."");
?>
