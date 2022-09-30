<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <title>Document</title>

    <style>
        input[type="file"] {
            display: none;
        }

        .label {
            padding-top: 80px;
            padding-bottom: 80px;
            border-radius: 50%;
            width: 160px;
            background-color: #333;
            color: #FFF;
            text-transform: uppercase;
            text-align: center;
            display: block;
            cursor: pointer;
            margin-left: 30%;
        }
    </style>
</head>
<body>
    <div class="limiter">
		<div class="container-login100" style="background-image: url('../bg.png');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
                    
                    <label for="pic" class="label"><ion-icon name="image"></ion-icon></label>
                    <input type="file" name="pic" accept="image/*">


					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="cpf" placeholder="CPF:">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="text" name="nome" placeholder="Nome:">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="text" name="telefone" placeholder="Tel:">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="text" name="email" placeholder="Email:">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php

    if (isset($_FILES['pic'])) {
        $ext = strtolower(substr($_FILES['pic']['name'], -4)); //Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $aux = $new_name;
        $dir = 'images/';

        move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
        echo '<div class="alert alert-success" role="alert" align="center">
            <img src="images/' . "$aux" . '" class="img img-responsive img-thumbnail" width="200"> 
            <br>
            Imagem enviada com sucesso!
            <br>
            </div>';
    }
    
    if(isset($_POST['cpf'])){

        $a = $_POST['cpf'];
        $b = $new_name;
        $c = $_POST['nome'];
        $d = $_POST['telefone'];
        $e = $_POST['email'];
        
        require('conexão.php');
        
        try {
            
            $stmt = $pdo->prepare('INSERT INTO `site`.`cadastro` VALUES (:cpf, :foto_perfil, :nome, :telefone, :email)');
            
            $stmt->execute(array(
                ':cpf' => $a,
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
	
	