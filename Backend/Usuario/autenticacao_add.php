<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Conta inxistente</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@100;200;300;400;500;700;800;900&family=Raleway:wght@300;800&display=swap');

        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        #aviso{
            background-color: #000;
            width: 25vw;
            height: 50vh;
            border-radius: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        #aviso span{
            color: #fff;
            font-size: 700%;
        }
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
        }
        #aviso p{
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }
        #aviso a{
            color: #333;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>

    <?php
        session_start();
        require ('../conexao.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        try {
            $stmt = $pdo -> query("SELECT * FROM `site` . `cadastro_usuario` where email = '$email' and senha = '$senha';");
            
            if($stmt->rowCount() > 0){
                $_SESSION['logado'] = 1;
                header('location:../../html');
            }else{
                ?>
                    <div id="aviso">
                    <span class="material-symbols-outlined">error</span>
                        <p>Ainda não possui uma conta?</p>
                        <div class="buttons"></div>
                        <a href="cad_cont_add.php"><button>Cadastrar</button></a>
                        <a href="../../html/index.html"><button>Cancelar</button></a>
                    </div>
                <?php
            }
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            echo "<br><b>Não Conectado</b>";
        }
    ?>

</body>
</html>