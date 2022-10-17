<?php

    $_GET['id'];

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