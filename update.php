<?php
require("config.php");
$id;
if($conn){
    $id = $_GET['id'];
    $sql = "Select * From Users where id= $id";
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();
    foreach($rows as $colunas){
        $nome = $colunas['nome'];
        $email = $colunas['email'];
    }
}
echo "<center>Atualizar Usuário<br>";
echo "<form action='/updateUser.php'>
<input type='hidden' id='id' name='id' value='$id'><br>

  <label for='fname'>Nome:</label><br>

  <input type='text' id='fname' name='fname' value='$nome'><br>
  <label for='lname'>E-mail:</label><br>
  <input type='text' id='lname' name='email' value='$email'><br>

  <input type='submit' value='Atualizar'>
</form></center>";


?>