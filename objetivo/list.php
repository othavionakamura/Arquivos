<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png" type="image/x-icon">
    <title>Todos alunos</title>
    <style>
        body{
            font-family: 'Arial';
        }
        thead td{
            font-weight: bold;
        }
        td{
            padding: .5vh 2vw .5vh .5vw;
            text-align: left;
        }
        table{
            margin-top: 10vh;
            margin-bottom: 5vh;
        }
    </style>
</head>
<body>
    <input type="date" name="date" id="date">
    <select name="Serie" id="serie">
        <optgroup label="fund II">
            <option value="6">6º ano</option>
            <option value="7">7º ano</option>
            <option value="8">8º ano</option>
            <option value="9">9º ano</option>
        </optgroup>
        <optgroup label="EM">
            <option value="1º ano">1º ano</option>
            <option value="2º ano">2º ano</option>
            <option value="3º ano">3º ano</option>
        </optgroup>
    </select>
    
    <table border="1">
        <thead>
            <td>ID</td>
            <td>Nome</td>
            <td>Turma</td>
            <td>Falta</td>
        </thead>

        <tbody>
            <?php
                require ('conexao.php');

            
                try {
                    $stmt = $pdo -> query('SELECT * FROM alunos as al INNER JOIN turma AS tr ON al.id_turma = tr.id_turma where tr.id_turma=2;');
                    
                    while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr>
                            <td>{$linha['id_aluno']}</td>
                            <td>{$linha['nome']}</td>
                            <td>{$linha['nome_turma']}</td>
                            <td><input type='checkbox'></td>
                            
                            </tr>";
                    }
                }
                    

                catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                    echo "<br><b>Não Conectado</b>";
                }
            ?>
        </tbody>
    </table>
    <input type="submit" value="Enviar chamada">
</body>
</html>