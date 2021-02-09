<?php
try{
    $username = "root";
    $password = "chester12";
    $conn = new PDO('mysql:host=127.0.0.1;dbname=teste',$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
echo "Erro:" . $e->getMessage();
}
?>