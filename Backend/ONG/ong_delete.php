<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar ONG</title>
</head>
<body>
    <form method="post">
        <input type="number" name="id">
        <input type="submit" value="Deletar">
    </form>
</body>
</html>
<?php

    require('../conexao.php');
        
    if(isset($_POST['id'])){

        $id = $_POST['id'];

        try {
            
            $stmt = $pdo->prepare('UPDATE `site`.`cadastro_ongs` set situacao=2 where id=:id');
            
            $stmt->execute(array(
                ':id' => $id,
            ));
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            echo "<br><b>Não Conectado</b>";
        }
    }
        
?>