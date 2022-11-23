<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
    <link rel="stylesheet" href="../insert_adm.css">
</head>
<body>
    <nav>
        <img src="../../img/logo.png">
        <a href="page_adm.php"><button class="voltar">Voltar</button></a>
    </nav>

    <div id="left"></div>
    <div id="right">
    <form method="POST" action="insert_adm.php" enctype="multipart/form-data">
        <label class="img_perfil" tabindex="0">
            <span class="picture_image_perfil"></span>
            <input type="file" accept="image/*" name="pic" id="picture_input_perfil" class="form-control">
        </label>

        <h1>Cadastrar</h1>

        <div id="div-nome">
            <input type="text" id="nome" name="nome" autocomplete="off" autofocus>
            <label for="nome" class="label-um">Nome:</label>
            <label for="nome" class="label-dois"><span class="material-symbols-outlined">person</span></label>
        </div>

        <div id="div-email">
            <input type="text" id="email" name="email" autocomplete="off">
            <label for="email" class="label-um">Email:</label>
            <label for="email" class="label-dois"><span class="material-symbols-outlined">email</span></label>
        </div>

        <div id="div-cpf">
            <input type="text" id="cpf" name="cpf" autocomplete="off" maxlength="14">
            <label for="email" class="label-um">CPF:</label>
            <label for="email" class="label-dois"><span class="material-symbols-outlined">badge</span></label>
        </div>

        <div id="div-senha">
            <input type="password" id="senha" name="senha" autocomplete="off" minlength="8" maxlength="12" required>
            <label for="senha" class="label-um">Senha:</label>
            <label for="senha" class="label-dois"><span class="material-symbols-outlined">lock</span></label>
        </div>

        <input type="submit" class="button">
    </form>
    </div>

    <script src="../js/cpf.js"></script>
    <script src="../js/foto.js"></script>
</body>
</html>