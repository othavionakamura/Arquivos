<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            display: block;
            margin: 20px;
        }
    </style>
</head>
<body>
    <form method="POST" action="sucesso.html" enctype="multipart/form-data">
        <label for="conteudo">Foto de perfil:</label>
        <input type="file" name="pic" accept="image/*" class="form-control">
        <input type="text" name="nome" placeholder="Nome:">
        <input type="text" name="email" placeholder="Email:">
        <input type="text" name="cpf" placeholder="CPF:" id="cpf" autocomplete="off" maxlength="14" id >
        <input type="password" name="senha" placeholder="Senha:" minlength="8">

        <div align="left">
            <button type="submit" class="btn btn-success">Enviar mãe</button>
        </div>
    </form>


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

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            echo "<br><b>Não Conectado</b>";
        }
    }
?>

    <script src="cpf.js"></script>
</body>
</html>