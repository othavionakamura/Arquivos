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
        <input type="text" name="chave_pix" placeholder="PIX:">
        <input type="file" name="img1" accept="image/*" class="form-control">
        <input type="file" name="img2" accept="image/*" class="form-control">       
        <input type="file" name="img3" accept="image/*" class="form-control">
        <input type="file" name="img4" accept="image/*" class="form-control">

        <div align="left">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>

</body>
</html>
<?php

    if (!empty($_FILES['pic'])) {
        $ext = strtolower(substr($_FILES['pic']['name'], -4)); //Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $aux = $new_name;
        $dir = '../images/';
        move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
    }
    if (!empty($_FILES['img1'])) {
        $ext = strtolower(substr($_FILES['img1']['name'], -4)); //Pegando extensão do arquivo
        $new_name_img1 = "img1" . date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $aux = $new_name_img1;
        $dir = 'imagens_ong/';
        move_uploaded_file($_FILES['img1']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
    }
    if (!empty($_FILES['img2'])) {
        $ext = strtolower(substr($_FILES['img2']['name'], -4)); //Pegando extensão do arquivo
        $new_name_img2 = "img2" . date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $aux = $new_name_img2;
        $dir = 'imagens_ong/';
        move_uploaded_file($_FILES['img2']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
    }
    if (!empty($_FILES['img3'])) {
        $ext = strtolower(substr($_FILES['img3']['name'], -4)); //Pegando extensão do arquivo
        $new_name_img3 = "img3" . date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $aux = $new_name_img3;
        $dir = 'imagens_ong/';
        move_uploaded_file($_FILES['img1']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
    }
    if (!empty($_FILES['img4'])) {
        $ext = strtolower(substr($_FILES['img4']['name'], -4)); //Pegando extensão do arquivo
        $new_name_img4 = "img4" . date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $aux = $new_name_img4;
        $dir = 'imagens_ong/';
        move_uploaded_file($_FILES['img4']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
    }
    
    
    if(isset($_POST['nome'])){

        $a = $new_name;
        $b = $_POST['nome'];
        $c = $_POST['endereco'];
        $d = $_POST['email'];
        $e = $_POST['telefone'];
        $f = $_POST['senha'];
        $g = $new_name_img1;
        $h = $new_name_img2;
        $i = $new_name_img3;
        $j = $new_name_img4;
        $k = $_POST['chave_pix'];
        
        
        require('../conexao.php');
        
        try {
            
            $stmt = $pdo->prepare('INSERT INTO `site`.`cadastro_ongs` VALUES (null, :foto_perfil, :nome, :endereco, :email, :telefone , :senha, :img1, :img2, :img3, :img4, :chave_pix)');
            
            $stmt->execute(array(
                ':foto_perfil' => $a,
                ':nome' => $b,
                ':endereco' => $c,
                ':email' => $d,
                ':telefone' => $e,
                ':senha' => $f,
                ':img1' => $g,
                ':img2' => $h,
                ':img3' => $i,
                ':img4' => $j,
                ':chave_pix' => $k

            
            ));
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            echo "<br><b>Não Conectado</b>";
        }
    }
?>