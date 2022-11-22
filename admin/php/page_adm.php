<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil ADM</title>
</head>
<body>
    <?php
        session_start();

        echo "Olá, " . $_SESSION['nome'];
    ?>
    <h1>O que deseja fazer agora?</h1>
    <a href="form_insert_adm.php"><button>Novo ADM</button></a>
</body>
</html>
