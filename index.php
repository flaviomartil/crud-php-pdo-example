<?php
require('config.php');
if($conn){
        $sql = "Select * from users";
        $result = $conn->query($sql);
        $rows = $result->fetchAll();
        $criar = "<a href='/criar.php'>Criar novo registro</a>";
        echo $criar . "<BR>";

        foreach($rows as $resultado){
            $id = $resultado["id"];
            $nome = $resultado["nome"];
            $email = $resultado["email"];
            $deletar = "<a href='/deletar.php?id=$id'>Deletar</a>";
            $editar = "<a href='/update.php?id=$id'>editar</a>";
            echo "<table>
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Ações</th>
            </tr>
            <tr>
              <td>$id</td>
              <td>$nome</td>
              <td>$email</td>
              <td>$deletar $editar</td>
            </tr>";
        }
    }
    ?>