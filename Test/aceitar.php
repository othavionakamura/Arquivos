<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <table>
        <?php
            require ('conexao.php');

            function aceitar(){
                
            }

            try {
                $stmt = $pdo -> query('SELECT * FROM site . cadastro_ongs where situacao=0;');
                
                while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr>
                            <td>{$linha['nome']}</td>
                            <td>{$linha['cnpj']}</td>
                            <td>{$linha['email']}</td>
                            <td>{$linha['telefone']}</td>
                            <td>{$linha['chave_pix']}</td>
                            <td><a href='update.php?id={$linha['id']}'><button>Aceitar</button></a></td>
                            <td><a href='delete.php?id={$linha['id']}'><button>Remover</button></a></td>
                          </tr>";
                }
                
            }
                
            catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                echo "<br><b>Erro</b>";
            }
        ?>
    </table>
</body>
</html>