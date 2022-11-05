<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="navbar">
        <img src="../../img/logo.png">
        <a href="../../html/index.html"><button class="voltar">Voltar</button></a>
    </div>

    <div id="left"></div>
    <div id="right">
    <form method="POST" enctype="multipart/form-data">
        <label class="img_perfil" tabindex="0">
            <span class="picture_image_perfil"></span>
            <input type="file" accept="image/*" name="pic" id="picture_input_perfil" class="form-control">
        </label>

        <h1>Cadastrar</h1>

        <div id="div-nome">
            <input type="text" id="nome" name="nome" autocomplete="off" autofocus>
            <label for="nome" class="label-um">Nome:</label>
            <label for="nome" class="label-dois"><span class="material-symbols-outlined">person</span></label>
        </div>

        <div id="div-email">
            <input type="text" id="email" name="email" autocomplete="off">
            <label for="email" class="label-um">Email:</label>
            <label for="email" class="label-dois"><span class="material-symbols-outlined">email</span></label>
        </div>

        <div id="div-cpf">
            <input type="text" id="cpf" name="cpf" autocomplete="off" maxlength="14">
            <label for="email" class="label-um">CPF:</label>
            <label for="email" class="label-dois"><span class="material-symbols-outlined">badge</span></label>
        </div>

        <div id="div-senha">
            <input type="password" id="senha" name="senha" autocomplete="off" minlength="8" maxlength="12" required>
            <label for="senha" class="label-um">Senha:</label>
            <label for="senha" class="label-dois"><span class="material-symbols-outlined">lock</span></label>
        </div>

        <input type="submit" class="button">
    </form>
    </div>
    


<?php

    if (isset($_FILES['pic'])) {
        $ext = strtolower(substr($_FILES['pic']['name'], -4)); //Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $aux = $new_name;
        $dir = 'fotos_perfil_usu/';

        move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
    }
    
    if(isset($_POST['nome'])){

        $a = $new_name;
        $b = $_POST['nome'];
        $c = $_POST['email'];
        $d = $_POST['cpf'];
        $e = $_POST['senha'];
        
        require('../conexao.php');
        
        try {
            
            $stmt = $pdo->prepare('INSERT INTO `site`.`cadastro_usuario` VALUES (null, :foto_perfil, :nome, :email, :cpf, :senha)');
            
            $stmt->execute(array(
                ':foto_perfil' => $a,
                ':nome' => $b,
                ':email' => $c,
                ':cpf' => $d,
                ':senha' => $e
            ));

            sleep(1);
            echo "Cadastro efetuado com sucesso!";

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            echo "<br><b>Não Conectado</b>";
        }
    }
?>

    <script src="cpf.js"></script>
    <script src="script.js"></script>
</body>
</html>