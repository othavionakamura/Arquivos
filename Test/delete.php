<?php
    require ('conexao.php');

    $id = $_GET['id'];

    $stmt2 = $pdo -> query("UPDATE `cadastro_ongs` SET situacao = 3 where id = $id");
    $stmt2 ->execute(array(
        ':id' => 1
    ));
?>