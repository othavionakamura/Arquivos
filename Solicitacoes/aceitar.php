<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpg" href="../img/64673.png" />
    <title>Solicitacões</title>
</head>
<body>
    <nav class="navbar">
        <img src="imgs/logo.png" alt="logo">
        <a href="../../html/"><button>Voltar</button></a>
    </nav>
    <div class="all"></div>
        <?php
            require ('conexao.php');

            try {
                $stmt = $pdo -> query('SELECT * FROM site . cadastro_ongs where situacao = 0;');
                echo "<h1 class='titulo'>Solicitações de ONGs</h1>";
                while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo "<div class='solicitacao'>
                            <div class='left'>
                                <img src='../Backend/ONG/imagens_ong_perfil/{$linha['foto_pefil']}'>
                                <h1>{$linha['nome']}</h1>
                                <p><b>CNPJ: </b>{$linha['cnpj']}</p>
                                <p><b>Email: </b>{$linha['email']}</p>
                                <p><b>Telefone: </b>{$linha['telefone']}</p>
                                <p><b>PIX: </b>{$linha['chave_pix']}</p>
                                <div class='buttons'>
                                    <a href='update.php?id={$linha['id']}'><button class='aceitar'>Aceitar</button></a>
                                    <a href='delete.php?id={$linha['id']}'><button class='remover'>Remover</button></a>
                                </div>
                            </div>";

                            echo "<div class='right'>
                                <div class='container_img'>
                                    <img src='../Backend/ONG/imagens_ong/{$linha['img1']}'>
                                    <img src='../Backend/ONG/imagens_ong/{$linha['img2']}'>
                                    <img src='../Backend/ONG/imagens_ong/{$linha['img3']}'>
                                    <img src='../Backend/ONG/imagens_ong/{$linha['img4']}'>
                                </div>
                            </div>
                        </div><hr>";
                }
            }
            catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                echo "<br><b>Erro</b>";
            }
        ?>
    </div>
</body>
</html>