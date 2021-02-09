<?php
require('config.php');
if($conn){
$id = $_GET['id'];
$nome = $_GET['fname'];
$email = $_GET['email'];
}

if($nome && $email){
$stmt = $conn->prepare("UPDATE users SET nome = '$nome' ,email= '$email'  WHERE id =  '$id'");
try {
    $stmt->execute();
    $msg = "Registro atualizado com sucesso,redirecionando em 5 segundos.";
}catch(PDOException $e){
    $msg = "Registro não foi atualizado, erro: " .  $e->getMessage();
}
echo $msg;
header("refresh: 5;index.php");
}