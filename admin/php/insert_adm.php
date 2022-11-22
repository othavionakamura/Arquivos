<?php

    if (isset($_FILES['pic'])) {
        $ext = strtolower(substr($_FILES['pic']['name'], -4)); //Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $aux = $new_name;
        $dir = '../imgs_perfil/';

        move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
    }
    
    if(isset($_POST['nome'])){

        $a = $new_name;
        $b = $_POST['nome'];
        $c = $_POST['email'];
        $d = $_POST['cpf'];
        $e = $_POST['senha'];
        
        require('conexao.php');
        
        try {
            
            $stmt = $pdo->prepare('INSERT INTO `site`.`cadastro_adm` VALUES (null, :foto_perfil, :nome, :email, :cpf, :senha)');
            
            $stmt->execute(array(
                ':foto_perfil' => $a,
                ':nome' => $b,
                ':email' => $c,
                ':cpf' => $d,
                ':senha' => $e
            ));

            ?>
        
        <META HTTP-EQUIV="REFRESH" CONTENT="1; URL=http://localhost/admin/sucesso.html">
    
    <?php
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            echo "<br><b>Não Conectado</b>";
        }
    }
?>