<?php
// Conecta ao banco de dados
$pdo = new PDO('mysql:host=define.cduh3xdezln5.us-east-1.rds.amazonaws.com;dbname=define', 'admindefine', 'vr88094852');

// Insere os dados no banco de dados
$stmt = $pdo->prepare("INSERT INTO tabela (nome, email) VALUES (:nome, :email)");
$stmt->bindParam(':nome', $_POST['nome']);
$stmt->bindParam(':email', $_POST['email']);
$resultado = $stmt->execute();

// Redireciona o usuário para outra página com o ID cadastrado se a inserção for bem sucedida, ou exibe uma mensagem de erro se ocorrer um erro
if ($resultado) {
  $id = $pdo->lastInsertId();
  header("Location: form.php?success=1&id=$id");
  exit();
} else {
  header("Location: form.php?error=1");
  exit();
}
?>
