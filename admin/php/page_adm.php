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
        <a href="../../html/"><button>Voltar</button></a>
    </nav>
    <div class="content">
        <div class="perfil">
            <?php
                session_start();

                echo "<div class='foto_perfil'>";
                    echo "<img src='../imgs_perfil/$_SESSION[foto_perfil]' class='foto_perfil'>";
                echo "</div>";
            
                echo "<div class='perfil_informacoes'>";
                    echo "<h1>$_SESSION[nome]</h1>";
                    echo "<p>$_SESSION[email]</p>";
                echo "</div>";
            ?>
        </div>
        
        <div class="acoes">
            <h1>O que deseja fazer?</h1>
            <a href="../../Solicitacoes/aceitar.php"><button>Gerenciar solicitações</button></a>
            <a href="form_insert_adm.php"><button>Adicionar ADM</button></a>
        </div>
    </div>
    
</body>
</html>
