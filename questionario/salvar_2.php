<?php
include '../conexao/conexao.php';
date_default_timezone_set('America/Bahia');


// Recupera os dados do formulário
$nome_diag = $_POST['nome_diag'];
$tecnologia = $_POST['tecnologia'];
$potencial_tecnologico = $_POST['potencial-tecnologico'];
$tipologia_inovacao = $_POST['tipologia-inovacao'];
$risco_tecnologico = $_POST['risco-tecnologico'];
$impacto_tecnologico = $_POST['impacto_tecnologico'];
$infraestrutura_empresa = $_POST['infraestrutura-empresa'];
$impactos_gerais_1 = $_POST['impactos-gerais1'];
$impactos_gerais_2 = $_POST['impactos-gerais2'];
$impactos_gerais_3 = $_POST['impactos-gerais3'];
$impactos_gerais_4 = $_POST['impactos-gerais4'];
$concat_impacto_gerais = $impactos_gerais_1.",".$impactos_gerais_2.",".$impactos_gerais_3.",".$impactos_gerais_4;
$impactos_gerais = $concat_impacto_gerais;
$equipe = $_POST['equipe'];
// $beneficio_inovacao = $_POST['beneficio-inovacao'];
$faturamento = $_POST['faturamento'];
$regime_tributario = $_POST['regime_tributario'];
// parceria
$checkbox_values_parcerias= isset($_POST['parcerias']) ? $_POST['parcerias'] : [];
$parcerias= implode(",", $checkbox_values_parcerias);
// fim do beneficios
// benefico
$checkbox_values= isset($_POST['beneficio-inovacao']) ? $_POST['beneficio-inovacao'] : [];
$beneficio_inovacao= implode(",", $checkbox_values);
// fim do beneficios
//user
$user = $_POST['user'];



$sql = "INSERT INTO questionario2 (nome_diag,tecnologia, potencial_tecnologico, tipologia_inovacao, risco_tecnologico, impacto_tecnologico, infraestrutura_empresa, parcerias, impactos_gerais, equipe, beneficio_inovacao, faturamento, regime_tributario,user)
        VALUES ('$nome_diag','$tecnologia', '$potencial_tecnologico', '$tipologia_inovacao', '$risco_tecnologico', '$impacto_tecnologico', '$infraestrutura_empresa', '$parcerias', '$impactos_gerais', '$equipe', '$beneficio_inovacao', '$faturamento', '$regime_tributario', '$user')";


// echo $sql;


$result = $conn->query($sql);

if ($result) {
    // $last_inserted_id = $conn->insert_id;
    // echo $last_id;
    // echo json_encode(['status' => 'success', 'inserted_id' => $last_inserted_id]);
    // header("Location: questionario.php?success=1&id=$last_inserted_id");
    // exit();
    // Se a inserção foi bem sucedida, retornar o ID inserido
    $last_id = $conn->insert_id;
    echo $last_id;

} else {
    // echo json_encode(['status' => 'error']);
    // header("Location: formulario.php?error=1");
  // exit();
  // Se houve um erro na inserção, exibir uma mensagem de erro
  header('HTTP/1.1 500 Internal Server Error');
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

// // $conn->close();


// // Verifica se a inserção foi bem sucedida
// if ($result) {
//   // Pega o ID do último registro inserido
//   $id = mysqli_insert_id($conn);
//   // Redireciona para a página de exibição do registro
//   // echo $id;
//   header("Location: sucess.php?id=$id");
// }



?>