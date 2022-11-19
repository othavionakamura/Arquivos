<?php
    require ('conexao.php');

    $stmt2 = $pdo -> query('UPDATE `cadastro_ongs` SET situacao = 1 where id=3');
    $stmt2 ->execute(array(
        ':id' => 1
    ));
?>