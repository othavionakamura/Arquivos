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

        nav{
            position: fixed;
            background-color: #fff;
            height: 15vh;
            width: 100vw;
            display: flex;
            justify-content: space-around;
        }

        nav img{
            height: 10vh;
        }

        #content{
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            position: absolute;
            justify-content: space-around;
        }

        .card .img{
            height: 150px;
            width: 150px;
            background-color: white;
            border-radius: 50%;
            border: 6px solid #fff;
            object-fit: cover;
            object-position: center;
            position: relative;
            left: 10%;
            z-index: 1;
        }
        
        .conteudo{
            background-color: #2e2e2e;
            text-align: center;
            color: white;
            height: 300px;
            width: 350px;
            position: relative;
            top: -12vh;
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

    <nav>
        <img src="../../img/logo.png" alt="logo">
    </nav>
    
    <?php
        require ('../conexao.php');

    
        try {
            $stmt = $pdo -> query('SELECT * FROM site . cadastro_ongs where situacao=1;');

            echo "<div id='content'>";
            
            while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<a href='detalhes_ong.php?id={$linha['id']}'>

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