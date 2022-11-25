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
            flex-direction: row;
            margin-top: 3vh;
        }

        #content .left{
            width: 25%;
            height: 80vh;
            margin: 0 auto;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            display: flex;
            background-color: #000;
            border-radius: 0 50px 50px 0;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        #content .left .img{
            height: 250px;
            width: 250px;
            object-position: center;
            object-fit: cover;
            border-radius: 1000px;
            border: solid #000 1px;
            margin-right: 5vw;
        }
        
        #content .left .conteudo h2{
            color: #fff;
        }

        #content .left .conteudo p{
            color: #fff;
            width: 100%;
        }

        #content .right{
            width: 100%;
            margin: 0 auto;
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: center;
            flex-wrap: wrap;
        }

        #content .right .imgs{
            width:30%;
            border-radius: 20px;
            margin: 2%;
            object-fit: cover;
        }

        .sobre{
            font-family: 'Poppins', sans-serif;
            font-size: 1.5em;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .sobre h1{
            width: 80%;
            margin: 0 auto;
        }

        .sobre p{
            width: 80%;
            margin: 0 auto;
        }

        .conteudo h2{
            font-size: 5em;
            max-width: 50%;
        }

        .estojinho{
            display: flex;
            width: 75%;
            justify-content: space-evenly;
            flex-direction: column;
            align-items: center;
            margin-top: 15vh;
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
                            <p><b>CNPJ:</b> {$linha['cnpj']}</p>
                            <p><b>Telefone:</b> {$linha['telefone']}</p>
                            <p><b>Email:</b> {$linha['email']}</p>
                            <p><b>Endereço:</b> {$linha['endereco']}</p>
                            <p><b>Chave do Pix:</b> {$linha['chave_pix']}</p>
                        </div>

                  </div>
                
                  <div class='estojinho'>
                        <div class='right'>
                                <img src='imagens_ong/{$linha['img1']}' class='imgs'>
                                <img src='imagens_ong/{$linha['img2']}' class='imgs'>
                                <img src='imagens_ong/{$linha['img3']}' class='imgs'>
                                <img src='imagens_ong/{$linha['img4']}' class='imgs'>
                        </div>

                        <div class='sobre'>
                            <h1>Sobre nossa ONG</h1>
                            <p>{$linha['sobre']}</p>
                        </div>
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