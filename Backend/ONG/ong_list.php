<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todas as ONGs</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comic+Neue:wght@300;400;700&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500&display=swap');

        *{
            margin: 0;
            padding: 0;
        }
        #content{
            display: flex;
            width: 90%;
            flex-wrap: wrap;
            position: relative;
            left: 5%;
            justify-content: space-around;
        }
        .card{
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        .card .img{
            height: 150px;
            width: 150px;
            background-color: white;
            border-radius: 50%;
            object-fit: cover;
            object-position: center;
            position: absolute;
            z-index: 1;
        }
        
        .conteudo{
            background-color: orange;
            text-align: center;
            height: 300px;
            width: 350px;
            position: relative;
            top: 8vh;
            z-index: 0;
            border-radius: 20px;
        }

        .conteudo h2{
            padding-top: 30%;
        }

        a{
            color: black;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>
<body>

    
    
    <?php
        require ('../conexao.php');

    
        try {
            $stmt = $pdo -> query('SELECT * FROM site . cadastro_ongs;');

            echo "<div id='content'>";
            
            while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<a href='https:www.youtube.com'>

                        <div class='card'>
                            <img src='imagens_ong_perfil/{$linha['foto_pefil']}' class='img'>

                            <div class='conteudo'>
                                <h2>{$linha['nome']}</h2>
                                <p>Chave do Pix: {$linha['chave_pix']}</p>
                            </div>

                        </div>

                      </a>";
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