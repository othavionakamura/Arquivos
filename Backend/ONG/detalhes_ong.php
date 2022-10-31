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

        #content .left{
            height: 100vh;
            width: 50%;
            margin: 3%;
        }

        #content .left .img{
            height: 20vh;
            width: 20%;
            object-fit: cover;
        }

        #content .left .conteudo p{
            color: yellow;
            width: 1%;
        }

        #content .right{
            height: 100vh;
            width: 50%;
            max-width: 50%;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        #content .right .imgs{
            height: 30vh;
            width: 40%;
            margin: 5%;
            object-fit: cover;
        }
    </style>
</head>
<body>
<?php
    
    $_GET['id'];
    
    require ('../conexao.php'); 

    $id = $_GET['id'];
    try {
        $stmt = $pdo -> query("SELECT * FROM cadastro_ongs as c_o INNER JOIN informacoes_ongs as i_o ON i_o.id = c_o.id where i_o.id = ' $id ' ;");

        echo "<div id='content'>";
        
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<div class='left'>
                        <img src='imagens_ong_perfil/{$linha['foto_pefil']}' class='img'>

                        <div class='conteudo'>
                            <h2>{$linha['nome']}</h2>
                            <p>Chave do Pix: {$linha['chave_pix']}</p>
                            <h1>Sobre</h1>
                            <p>{$linha['sobre']}</p>
                        </div>

                  </div>
                  
                  
                  <div class='right'>
                        <img src='imagens_ong/{$linha['img1']}' class='imgs'>
                        <img src='imagens_ong/{$linha['img2']}' class='imgs'>
                        <img src='imagens_ong/{$linha['img3']}' class='imgs'>
                        <img src='imagens_ong/{$linha['img4']}' class='imgs'>
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
</body>
</html>