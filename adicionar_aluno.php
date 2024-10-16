<?php

require_once 'db.php';
$produtoCadastrado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $descricao = $_POST['email'];
   
$stmt = $pdo->prepare("INSERT INTO alunos (nome, email) VALUES(:nome; :email)");
$stmt->execute(['nome'-> $nome, 'email'-> $email]);

header('Location: listar_alunos.php');
}
?>

<h2>Adicionar Novo Aluno</h2>
<form method="POST"action="">
    <label>Nome: </label>
    <input type="text" name="nome" required>
    <br>
    <input type="email" name="email" required>
    <br>
    <input type="submit" value= "Salvar">
</form>