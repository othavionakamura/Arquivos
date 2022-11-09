<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../../style.css">
    
    <?php
    require ('../../conexao.php');

    
    try {
        $stmt = $pdo -> query('SELECT * FROM site . sobre where id_estado=24;');
        
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "
                <title>{$linha['nome_estado']}</title>
            </head>

            <body id='body'>

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
                        <li><a href='#sinopse'>Sinopse</a></li>
                        <li><a href='#pontos_turisticos'>Pontos Turísticos</a></li>
                        <li><a href='#historia'>História</a></li>
                        <li><a href='#dados'>Dados</a></li>
                        <li><a href='#geografia'>Geografia</a></li>
                        <li><a href='#economia'>Economia</a></li>
                        <li><a href='#cultura'>Cultura</a></li>
                    </ul>
                </div>

                <div class='bandeira'>
                    <img src='{$linha['caminho']}'>
                </div>
                
                <div id='sinopse'>
                    <h1>Sinopse</h1>
                    <p>{$linha['sinopse']}</p>
                </div>
                
                <div id='pontos_turisticos'>

                    <h1>Pontos Turísticos</h1>
                
                    <div class='ponto_turistico_um'>
                        <img src='{$linha['caminho_um']}'>
                        <p>{$linha['ponto_turistico_um']}</p>
                    </div>
                
                    <div class='ponto_turistico_dois'>
                        <p>{$linha['ponto_turistico_dois']}</p>
                        <img src='{$linha['caminho_dois']}'>
                    </div>
                
                    <div class='ponto_turistico_tres'>
                        <img src='{$linha['caminho_tres']}'>
                        <p>{$linha['ponto_turistico_tres']}</p>
                    </div>
                
                </div>
                
                <div id='historia'>
                    <h1>História</h1>
                    <p>{$linha['historia']}</p>
                </div>
                
                <div id='dados'>
                    <h1>Dados Gerais</h1>
                    <p>{$linha['dados_gerais']}</p>
                </div>
                
                <div id='geografia'>
                    <h1>Geografia</h1>
                    
                    <div class='geografia_content'>
                    
                        <div class='relevo'>
                            <h2>Relevo</h2>
                            <p>{$linha['relevo']}</p>
                        </div>
                        
                        <div class='clima'>
                            <h2>Clima</h2>
                            <p>{$linha['clima']}</p>
                        </div>
                        
                        <div class='vegetacao'>
                            <h2>Vegetação</h2>
                            <p>{$linha['vegetacao']}</p>
                        </div>
                        
                        <div class='hidrografia'>
                            <h2>Hidrografia</h2>
                            <p>{$linha['hidrografia']}</p>
                        </div>
                        
                        <div class='divisao_geografica'>
                            <h2>Divisão Geográfica</h2>
                            <p>{$linha['divisao_geografica']}</p>
                        </div>
                    </div>
                </div>
                    
                
                <div id='economia'>
                    <h1>Economia</h1>
                    <p>{$linha['economia']}</p>
                </div>
                
                <div id='cultura'>
                    <h1>Cultura</h1>
                    <p>{$linha['cultura']}</p>
                </div>";
    }
}   
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        echo "<br><b>Não Conectado</b>";
    }

    ?>
    <div id="voltar_topo">
        <a href="#body" class="voltar_topo">
            <p>Voltar ao topo</p>
            <span class="material-symbols-outlined">arrow_upward</span>
        </a>
    </div>
</body>
</html>