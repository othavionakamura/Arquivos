<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <?php
    require ('../../conexao.php');

    
    try {
        $stmt = $pdo -> query('SELECT * FROM site . sobre where id_estado=2;');
        
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "{$linha['id_estado']}
                <title>{$linha['nome_estado']}</title>
            </head>

            <body>

                <div class='navbar'>
                <div class='navbar-content'>
                    <img src='../../../img/logo.png' alt='logo' class='logo item'>

                    <div class='escolha item'>
                        <p>Você escolheu</p>
                        <h1>{$linha['nome_estado']}</h1>
                        <p>informações sobre o estado</p>
                    </div>
                    
                    <a href='../../../html/index.html' class='link-button-voltar'>
                        <button class='button-voltar item'>Home</button>
                    </a>
                    
                </div>
                </div>

                <div id='submenu'>
                    <ul>
                        <li><a href=''>Sinopse</a></li>
                        <li><a href=''>Pontos Turísticos</a></li>
                        <li><a href=''>História</a></li>
                        <li><a href=''>Dados</a></li>
                        <li><a href=''>Geografia</a></li>
                        <li><a href=''>Economia</a></li>
                        <li><a href=''>Cultura</a></li>
                    </ul>
                </div>

                <div id='sinopse'>
                    <h1>Sinopse</h1>
                    <p>{$linha['historia']}</p>
                </div>
                <div id='pontos_turisticos'>
                    <h1>Sinopse</h1>
                    <p>{$linha['historia']}</p></div>
                <div id='historia'></div>
                <div id='dados'></div>
                <div id='geografia'></div>
                <div id='economia'></div>
                <div id='cultura'></div>";
    }
}
        

    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        echo "<br><b>Não Conectado</b>";
    }

    ?>

</body>
</html>