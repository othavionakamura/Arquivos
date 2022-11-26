<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Backend/Usuario/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Autenticação</title>
</head>

<body>
    </head>

    <body>
        <div class="navbar">
            <img src="../img/logo.png">
            <a href="javascript: history.go(-1)"><button class="voltar">Voltar</button></a>
        </div>
        <?php
            session_start();
            if((isset($_SESSION)) and (@$_SESSION['logado']==1)) {
                header('location:../Backend/ONG/form_add.html');
        ?>
        <?php
                }else{

        ?>


        <div class="content">
            <div class="left">
                <p class="frase">Quer cadastrar sua ONG? Faça seu login!</p>
            </div>
            <div class="right">
                <form action="autenticacao_add.php" method="post">
                    <h1>Login</h1>
                    <div class="inputs-text">
                        <div id="div-email">
                            <input type="text" id="email" class="input" name="email" autocomplete="off" onblur="Campo(0)">
                            <label for="email" class="label-um">Email:</label>
                            <label for="email" class="label-dois"><span class="material-symbols-outlined">person</span></label>
                        </div>

                        <div id="div-senha">
                            <input type="password" id="senha" class="input" name="senha" autocomplete="off" onblur="Campo(1)">
                            <label for="senha" class="label-um">Senha:</label>
                            <label for="senha" class="label-dois"><span class="material-symbols-outlined">lock</span></label>
                        </div>
                    </div>


                    <input type="submit" value="Entrar">
                    <p class="par_cad">Não possui uma conta: <a href="../Backend/Usuario/cad_cont_add.php">Cadastre-se</a></p>
                </form>
            </div>
            
            
        </div>

        <?php

                }
                
        ?>
    </body>

    <script>
        function Campo(p){
            var campo = document.getElementsByTagName("input")[p];
            var styleLabel = campo.parentElement.lastElementChild.style;

            if(campo.value != ""){
                styleLabel.fontSize = "12px";
                styleLabel.top = "-3px";
                styleLabel.color = "#000";
            }else{
                styleLabel.fontSize = "16px";
                styleLabel.top = "15px";
                styleLabel.color = "#333";
            }
        }
    </script>

</html>