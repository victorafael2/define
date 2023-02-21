<?php
include '../conexao/conexao.php';

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
$faturamento = $_POST['faturamento'];
$regime_tributario = $_POST['regime_tributario'];


// Conexão com o banco de dados
// $conexao = mysqli_connect('define.cduh3xdezln5.us-east-1.rds.amazonaws.com', 'admindefine', 'vr88094852', 'define');

// Verifica se houve erro na conexão
// if (mysqli_connect_errno()) {
//     echo 'Erro ao conectar ao banco de dados: ' . mysqli_connect_error();
//     exit();
// }

// Prepara a query de inserção
// $query = "INSERT INTO questionario2 (tecnologia, potencial_tecnologico, tipologia_inovacao, risco_tecnologico, impacto_cientifico_tecnologico, infraestrutura_empresa, parcerias, impactos_gerais, equipe, beneficio_inovacao,faturamento,regime_tributario) VALUES ()";

$sql = "INSERT INTO questionario2 (tecnologia, potencial_tecnologico, tipologia_inovacao, risco_tecnologico, impacto_tecnologico, infraestrutura_empresa, parcerias, impactos_gerais, equipe, beneficio_inovacao, faturamento, regime_tributario)
        VALUES ('$tecnologia', '$potencial_tecnologico', '$tipologia_inovacao', '$risco_tecnologico', '$impacto_tecnologico', '$infraestrutura_empresa', '$parcerias', '$impactos_gerais', '$equipe', '$beneficio_inovacao', '$faturamento', '$regime_tributario')";


// Executar a consulta SQL e verificar se houve algum erro
if ($conn->query($sql) === TRUE) {
    // Se a inserção foi bem sucedida, redirecionar para a página de sucesso

    $last_id = mysqli_insert_id($conn);


    // header('Location: ../empresas/sucess.php');
    header("Location: sucess_.php?id=".urlencode($last_id)."");
} else {
    // Se houve um erro na inserção, exibir uma mensagem de erro
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();


?>


