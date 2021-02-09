<?php
include_once("config.php");
$id = $_GET['id'];
$stmt = $conn->prepare('DELETE FROM users WHERE id = :id');
$stmt->bindParam(':id', $id);

if($stmt->execute()){
    $msg = "Deletado com sucesso,redirecionando em 5 segundos.";
}else {
    $msg = "Erro ao deletar registro";
}
echo $msg;
header("refresh: 5;index.php");
?>