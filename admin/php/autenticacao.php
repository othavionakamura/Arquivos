<?php
session_start();
    require ('conexao.php');

    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    try {
        $stmt = $pdo -> query("SELECT * FROM `site` . `cadastro_adm` where email = '$email' and senha = '$senha' and cpf = '$cpf';");
        
        if($stmt->rowCount() > 0){
            $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['senha'] = $fetch['senha'];
            header('location:page_adm.php');
        }else{
            header('location:../erro.html');
        }
    }
        

    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        echo "<br><b>Não Conectado</b>";
    }
?>