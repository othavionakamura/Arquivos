<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviado</title>
</head>
<body>
    Enviado com sucesso!
</body>
</html>
<?php

    if (isset($_FILES['pic'])) {
        $ext = strtolower(substr($_FILES['pic']['name'], -4)); //Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $dir = 'imagens_ong_perfil/';
        move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
    }
    if (isset($_FILES['pic'])) {
        $ext = strtolower(substr($_FILES['img1']['name'], -4)); //Pegando extensão do arquivo
        $new_name_img1 = date("Y.m.d-H.i.s") . "img1" . $ext; //Definindo um novo nome para o arquivo
        $dir = 'imagens_ong/';
        move_uploaded_file($_FILES['img1']['tmp_name'], $dir . $new_name_img1); //Fazer upload do arquivo
    }
    if (isset($_FILES['pic'])) {
        $ext = strtolower(substr($_FILES['img2']['name'], -4)); //Pegando extensão do arquivo
        $new_name_img2 = date("Y.m.d-H.i.s") . "img2" . $ext; //Definindo um novo nome para o arquivo
        $dir = 'imagens_ong/';
        move_uploaded_file($_FILES['img2']['tmp_name'], $dir . $new_name_img2); //Fazer upload do arquivo
    }
    if (isset($_FILES['pic'])) {
        $ext = strtolower(substr($_FILES['img3']['name'], -4)); //Pegando extensão do arquivo
        $new_name_img3 = date("Y.m.d-H.i.s") . "img3" . $ext; //Definindo um novo nome para o arquivo
        $dir = 'imagens_ong/';
        move_uploaded_file($_FILES['img3']['tmp_name'], $dir . $new_name_img3); //Fazer upload do arquivo
    }
    if (isset($_FILES['pic'])) {
        $ext = strtolower(substr($_FILES['img4']['name'], -4)); //Pegando extensão do arquivo
        $new_name_img4 = date("Y.m.d-H.i.s") . "img4" . $ext; //Definindo um novo nome para o arquivo
        $dir = 'imagens_ong/';
        move_uploaded_file($_FILES['img4']['tmp_name'], $dir . $new_name_img4); //Fazer upload do arquivo
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
            
            $stmt = $pdo->prepare('INSERT INTO `site`.`cadastro_ongs` VALUES (null, :foto_perfil, :nome, :endereco, :email, :telefone , :senha, :img1, :img2, :img3, :img4, :chave_pix, 1)');
            
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