<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Enviado</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@100;200;300;400;500;700;800;900&family=Raleway:wght@300;800&display=swap');

        body {
            height: 100vh;
            width: 100vw;
            overflow-y: hidden;
            overflow-x: hidden;
        }

        nav{
            position: fixed;
            width: 100vw;
            height: 10vh;
        }


        nav img{
            height: 13vh;
            margin-top: 3vh;
            margin-left: 3vw;
        }

        .container{
            height: 100vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        
        #aviso {
            background-color: #000;
            width: 30vw;
            height: 55vh;
            border-radius: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            animation: entrada 2s ease-in-out;
        }

        @keyframes entrada {
            0%{
                opacity: 0;
                transform: translateY(10vh);
            }
            100%{
                opacity: 1;
                transform: translateY(0);
            }
        }

        #aviso .material-symbols-outlined {
            color: #32cd32;
            font-size: 700%;
        }

        .material-symbols-outlined {
            font-variation-settings:
                'FILL'0,
                'wght'400,
                'GRAD'0,
                'opsz'48
        }

        #aviso p {
            font-size: 140%;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }

        #aviso a {
            color: #333;
            font-family: 'Poppins', sans-serif;
        }

        
    </style>
</head>

<body>
    <nav>
        <img src="../../img/logo.png">
    </nav>
    <div class="container">
        <div id="aviso">
            <span class="material-symbols-outlined">check_circle</span>
            <p>Dados enviados com sucesso!</p>
        </div>
    </div>
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


if (isset($_POST['nome'])) {

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
    $l = $_POST['sobre'];
    $m = $_POST['historia'];


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

        $stmt = $pdo->prepare('INSERT INTO `site`.`informacoes_ongs` VALUES (null, :sobre, :historia)');

        $stmt->execute(array(
            ':sobre' => $l,
            ':historia' => $m
        ));
    ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="5; URL=http://localhost/html">
    <?php
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            echo "<br><b>Não Conectado</b>";
        }
}
?>