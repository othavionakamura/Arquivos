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
    <form method="POST" enctype="multipart/form-data">
        <label for="conteudo">Foto de perfil:</label>
        <input type="file" name="pic" accept="image/*" class="form-control">
        <input type="text" name="nome" placeholder="Nome:">
        <input type="text" name="endereco"  placeholder="Endereco:">
        <input type="text" name="email"  placeholder="Email:">
        <input type="text" name="telefone"  placeholder="Telefone:">
        <input type="password" name="senha" placeholder="Senha:">

        <div align="left">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>

</body>
</html>
<?php

    if (isset($_FILES['pic'])) {
        $ext = strtolower(substr($_FILES['pic']['name'], -4)); //Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $aux = $new_name;
        $dir = '../images/';

        move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
        echo '<div class="alert alert-success" role="alert" align="center">
            <img src="..imagens_ong' . "$aux" . '" class="img img-responsive img-thumbnail" width="200"> 
            <br>
            Imagem enviada com sucesso!
            <br>
            </div>';
    }
    
    if(isset($_POST['nome'])){

        $b = $new_name;
        $c = $_POST['nome'];
        $d = $_POST['endereco'];
        $e = $_POST['email'];
        $f = $_POST['telefone'];
        
        
        require('../conexao.php');
        
        try {
            
            $stmt = $pdo->prepare('INSERT INTO `site`.`cadastro_ongs` VALUES (null, :foto_perfil, :nome, :telefone, :email)');
            
            $stmt->execute(array(
                ':foto_perfil' => $b,
                ':nome' => $c,
                ':telefone' => $d,
                ':email' => $e
            ));
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            echo "<br><b>Não Conectado</b>";
        }
    }
?>