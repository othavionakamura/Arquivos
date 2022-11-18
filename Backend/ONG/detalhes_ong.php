<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONG</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@100;200;300;400;500;700;800;900&family=Quicksand:wght@300;400;500;600;700&family=Raleway:wght@300;800&display=swap');

        *{
            margin: 0;
            padding: 0;
        }

        nav{
            height: 15vh;
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: center;
            justify-content: space-between;
        }

        nav .logo{
            width: 30%;
            height: 70%;
        }

        nav .button{
            width: 30%;
            height: 30%;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        nav img{
            height: 100%;
        }

        nav button{
            height: 5vh;
            width: 10vw;
            border-radius: 50px;
            border: none;
            outline: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #000;
            color: #fff;
            font-size: 1em;
            transition: all .5s ease-in-out;
        }

        nav button:hover{
            cursor: pointer;
            background-color: #fff;
            border: solid #000 .5px;
            color: #000;
        }

        #content{
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        #content .left{
            width: 70%;
            margin: 0 auto;
            font-family: 'Poppins', sans-serif;
            display: flex;
        }

        #content .left .img{
            height: 20vh;
            width: 20vw;
            object-fit: cover;
        }

        #content .left .conteudo p{
            color: black;
            width: 100%;
        }

        #content .right{
            width: 100%;
            max-width: 50%;
            margin: auto;
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
    <nav>
        <div class="logo">
            <img src="../../img/logo.png" alt="logo">
        </div>
        <div class="button">
            <a href="ong_list.php"><button>Voltar</button></a>
        </div>
    </nav>
<?php

    require ('../conexao.php'); 

    $id = $_GET['id'];
    try {
        $stmt = $pdo -> query("SELECT * FROM cadastro_ongs as c_o INNER JOIN informacoes_ongs as i_o ON i_o.id = c_o.id where i_o.id = ' $id ' ;");
        $a = $stmt->rowCount();

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