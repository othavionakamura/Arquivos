<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        #content{
            display: flex;
            width: 90%;
            flex-wrap: wrap;
            position: relative;
            left: 8%;
        }
        .card{
            text-align: center;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .img{
            height: 150px;
            width: 150px;
            background-color: white;
            border-radius: 50%;
            object-fit: cover;
            object-position: center;
            position: relative;
            z-index: 1;
        }
        
        .conteudo{
            background-color: orange;
            text-align: center;
            height: 300px;
            width: 350px;
            position: relative;
            top: -18%;
            z-index: 0;
            border-radius: 30px;
        }

        .conteudo h2{
            padding-top: 25%;
        }
    </style>
</head>
<body>


    <div id="content">
        <div class="card">
            <img src='images/2022.09.09-13.57.48.png' class='img'>
            <div class="conteudo">
                <h2>João</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Phasellus aliquet lectus ac tristique posuere. Praesent a 
                tellus elementum, interdum libero in, tristique lectus. 
                Maecenas efficitur, urna sit amet laoreet interdum.</p>
            </div>
        </div>

        <div class="card">
            <img src='images/2022.09.09-13.57.48.png' class='img'>
            <div class="conteudo">
                <h2>João</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Phasellus aliquet lectus ac tristique posuere. Praesent a 
                tellus elementum, interdum libero in, tristique lectus. 
                Maecenas efficitur, urna sit amet laoreet interdum.</p>
            </div>
        </div>

        <div class="card">
            <img src='images/2022.09.09-13.57.48.png' class='img'>
            <div class="conteudo">
                <h2>João</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Phasellus aliquet lectus ac tristique posuere. Praesent a 
                tellus elementum, interdum libero in, tristique lectus. 
                Maecenas efficitur, urna sit amet laoreet interdum.</p>
            </div>
        </div>

        <div class="card">
            <img src='images/2022.09.09-13.57.48.png' class='img'>
            <div class="conteudo">
                <h2>João</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Phasellus aliquet lectus ac tristique posuere. Praesent a 
                tellus elementum, interdum libero in, tristique lectus. 
                Maecenas efficitur, urna sit amet laoreet interdum.</p>
            </div>
        </div>

        
    </div>

    <?php
        require ('conexão.php');
        try {
            $stmt = $pdo -> query('SELECT * FROM site . cadastro;');
            
            while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<img src='images/{$linha['foto_perfil']}' class='img'>{$linha['nome']}<br>";
            }
        }

        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            echo "<br><b>Não Conectado</b>";
        }
    ?>
</body>
</html>