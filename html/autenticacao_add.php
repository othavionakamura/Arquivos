<?php
    require ('../Backend/conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        $stmt = $pdo -> query("SELECT * FROM `site` . `cadastro_usuario` where email = '$email' and senha = '$senha';");
        
        if($stmt->rowCount() > 0){
            session_start();
            $_SESSION['logado'] = 1;
            header('location:../Backend/ONG/form_add.html');
        }else{
            echo "Você ainda não possui uma conta!";
            echo "<a href='../Backend/Usuario/cad_cont_add.php'>Cadastre-se</a>";
        }
    }
        

    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        echo "<br><b>Não Conectado</b>";
    }
?>