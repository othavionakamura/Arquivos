<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page_adm.css">
    <title>Perfil ADM</title>
</head>
<body>
    <nav>
        <img src="../imgs/logo.png" alt="logo">
        <a href="../../html/index.html"><button>Voltar</button></a>
    </nav>
    
    <?php
        session_start();

        echo "<img src='../imgs_perfil/$_SESSION[foto_perfil]' class='foto_perfil'>" . $_SESSION['nome'];
    ?>
    <h1>O que deseja fazer agora?</h1>
    <a href="form_insert_adm.php"><button>Novo ADM</button></a>
</body>
</html>
