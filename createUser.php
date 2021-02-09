<?php
require('config.php');
if($conn){
$nome = $_GET['fname'];
$email = $_GET['email'];
}

if($nome && $email){
$stmt = $conn->prepare("Insert into Users (nome,email) values ('$nome','$email')");
if($stmt->execute()){
    $msg = "Registro criado com sucesso, redirecionando em 5 segundos";
}else{
    $msg = "Registro não foi criado, erro";
}
echo $msg;
header("refresh: 5;index.php");
}