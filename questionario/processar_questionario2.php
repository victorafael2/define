<?php
include '../conexao/conexao.php';

// Recupera os dados do formulário
$tecnologia = $_POST['tecnologia'];
$potencial_tecnologico = $_POST['potencial-tecnologico'];
$tipologia_inovacao = $_POST['tipologia-inovacao'];
$risco_tecnologico = $_POST['risco-tecnologico'];
$impacto_tecnologico = $_POST['impacto_tecnologico'];
$infraestrutura_empresa = $_POST['infraestrutura-empresa'];
// $parcerias = $_POST['parcerias'];
$impactos_gerais = $_POST['impactos-gerais'];










$equipe = $_POST['equipe'];
// $beneficio_inovacao = $_POST['beneficio-inovacao'];
$faturamento = $_POST['faturamento'];
$regime_tributario = $_POST['regime_tributario'];


// benefico
$checkbox_values_parcerias= isset($_POST['parcerias']) ? $_POST['parcerias'] : [];
$parcerias= implode(",", $checkbox_values_parcerias);
// fim do beneficios

// benefico
$checkbox_values= isset($_POST['beneficio-inovacao']) ? $_POST['beneficio-inovacao'] : [];
$beneficio_inovacao= implode(",", $checkbox_values);
// fim do beneficios



$sql = "INSERT INTO questionario2 (tecnologia, potencial_tecnologico, tipologia_inovacao, risco_tecnologico, impacto_tecnologico, infraestrutura_empresa, parcerias, impactos_gerais, equipe, beneficio_inovacao, faturamento, regime_tributario)
        VALUES ('$tecnologia', '$potencial_tecnologico', '$tipologia_inovacao', '$risco_tecnologico', '$impacto_tecnologico', '$infraestrutura_empresa', '$parcerias', '$impactos_gerais', '$equipe', '$beneficio_inovacao', '$faturamento', '$regime_tributario')";

// echo $sql;

if ($conn->query($sql) === TRUE) {


    $last_id = mysqli_insert_id($conn);



    header("Location: sucess_.php?id=".urlencode($last_id)."");
} else {

    echo "Erro: " . $sql . "<br>" . $conn->error;
}


$conn->close();


?>