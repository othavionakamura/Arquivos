<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Teste</title>
</head>
<body>
    <nav class="navbar">
        <img src="imgs/logo.png" alt="logo">
        <a href="../../html/"><button>Voltar</button></a>
    </nav>
    <div class="table">
        <table class="table highlight">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Pix</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                    require ('conexao.php');

                    try {
                        $stmt = $pdo -> query('SELECT * FROM site . cadastro_ongs where situacao=0;');
                        
                        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
                            echo "<tr>
                                    <td>{$linha['nome']}</td>
                                    <td>{$linha['cnpj']}</td>
                                    <td>{$linha['email']}</td>
                                    <td>{$linha['telefone']}</td>
                                    <td>{$linha['chave_pix']}</td>
                                    <td><a href='update.php?id={$linha['id']}'><button class='aceitar'>Aceitar</button></a></td>
                                    <td><a href='delete.php?id={$linha['id']}'><button class='remover'>Remover</button></a></td>
                                </tr>";
                        }
                    }
                    catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                        echo "<br><b>Erro</b>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
</body>
</html>