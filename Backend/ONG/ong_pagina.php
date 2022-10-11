<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página ONG</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        #content{
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            position: absolute;
        }

        .img{
            height: 30vh;
            width: 15%;
            border-radius: 50px;
            object-fit: cover;
            object-position: center;
            position: relative;
            z-index: 1;
        }

        .imgs{
            height: 50vh;
            width: 40%;
            background-color: white;
            border-radius: 10px;
            object-fit: cover;
            object-position: center;
            position: relative;
            z-index: 1;
        }
        

    </style>
</head>
<body>

    
    
    <?php
        require ('../conexao.php');

    
        try {
            $stmt = $pdo -> query('SELECT * FROM site . cadastro_ongs where id=2;');

            echo "<div id='content'>";
            
            while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){

                echo "
                    
                    <div id='content'>
                        
                        <img src='imagens_ong_perfil/{$linha['foto_pefil']}' class=img>
                        <h2>{$linha['nome']}</h2>



                        <img src='imagens_ong/{$linha['img1']}' class=imgs>
                        <img src='imagens_ong/{$linha['img2']}' class=imgs>
                        <img src='imagens_ong/{$linha['img3']}' class=imgs>
                        <img src='imagens_ong/{$linha['img4']}' class=imgs>";
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