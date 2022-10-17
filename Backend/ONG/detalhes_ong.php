<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONG</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        #content{
            width: 100%;
            height: 100vh;
            display: flex;
        }

        .left .img{
            height: 20vh;
            width: 10%;
            object-fit: cover;
        }

        .left{
            height: 100vh;
            width: 50%;
        }

        .right{
            height: 100vh;
            width: 50%;
        }

    </style>
</head>
<body>
    
</body>
</html>
<?php

    require ('../conexao.php'); 

    $id = $_GET['id'];

    try {
        $stmt = $pdo -> query('SELECT * FROM cadastro_ongs as c_o INNER JOIN informacoes_ongs as i_o ON i_o.id = c_o.id; where id=$id;');

        echo "<div id='content'>";
        
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<div class='left'>
                        <img src='imagens_ong_perfil/{$linha['foto_pefil']}' class='img'>

                        <div class='conteudo'>
                            <h2>{$linha['nome']}</h2>
                            <p>Chave do Pix: {$linha['chave_pix']}</p>
                            <h1>Sobre</h1>
                            <p class='sobre'>{$linha['sobre']}</p>
                        </div>

                  </div>
                  
                  
                  <div class='right'>
                        <img src='imagens_ong_perfil/{$linha['img1']}' class='img'>
                        <img src='imagens_ong_perfil/{$linha['img2']}' class='img'>
                        <img src='imagens_ong_perfil/{$linha['img3']}' class='img'>
                        <img src='imagens_ong_perfil/{$linha['img4']}' class='img'>
                  </div>
                  
                  
                  ";
        }
        
        echo "</div>";
    }
        

    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        echo "<br><b>Não Conectado</b>";
    }

?>