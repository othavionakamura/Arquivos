<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="detalhes_ong.css">
    <title>ONG</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="../../img/logo.png" alt="logo">
        </div>
        <div class="button">
            <a href="ong_list.php"><button>Voltar</button></a>
        </div>
    </nav>

<?php

    require ('../conexao.php'); 

    $id = $_GET['id'];
    try {
        $stmt = $pdo -> query("SELECT * FROM cadastro_ongs as c_o INNER JOIN informacoes_ongs as i_o ON i_o.id = c_o.id where i_o.id = ' $id ' ;");
        $a = $stmt->rowCount();

        echo "<div id='content'>";
        
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<div class='left'>
                        <img src='imagens_ong_perfil/{$linha['foto_pefil']}' class='img'>

                        <div class='conteudo'>
                            <h2>{$linha['nome']}</h2>
                            <p><b>CNPJ:</b> {$linha['cnpj']}</p>
                            <p><b>Telefone:</b> {$linha['telefone']}</p>
                            <p><b>Email:</b> {$linha['email']}</p>
                            <p><b>Endereço:</b> {$linha['endereco']}</p>
                            <p><b>Chave do Pix:</b> {$linha['chave_pix']}</p>
                        </div>

                  </div>
                
                <div class='right'>
                    <div class='swiper mySwiper'>
                        <div class='swiper-wrapper'>
                            <div class='swiper-slide'><img src='imagens_ong/{$linha['img1']}' alt='imagem'></div>
                            <div class='swiper-slide'><img src='imagens_ong/{$linha['img2']}' alt='imagem'></div>
                            <div class='swiper-slide'><img src='imagens_ong/{$linha['img3']}' alt='imagem'></div>
                            <div class='swiper-slide'><img src='imagens_ong/{$linha['img4']}' alt='imagem'></div>
                        </div>
                        <div class='swiper-button-next'></div>
                        <div class='swiper-button-prev'></div>
                        <div class='swiper-pagination'></div>
                    </div>
                </div>
                  ";
        
        echo "</div>";

        echo "
        <div class='sobre'>
            <h1>Sobre a ONG</h1>
            <p class='text'>
                {$linha['sobre']}

                <span class='overflow' data-state='visible' aria-hidden='true'> </span>

            </p>

            <button class='toggle' data-state='more'> Ver mais </button>
        </div>";  
        }     
    }
        

    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        echo "<br><b>Não Conectado</b>";
    }

?>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    });
</script>

<script>
    const txt = document.querySelector(".text");
    const textInitialHeight = txt.clientHeight;
    const overflow = document.querySelector(".overflow");
    const btn = document.querySelector(".toggle");

    btn.addEventListener("click", initToggle);

    function initToggle(e){
        txt.style.maxHeight =
        e.target.dataset.state === "more"
        ? `${txt.scrollHeight}px`
        : `${textInitialHeight}px`;

        e.target.setAttribute(
            "data-state",
            e.target.dataset.state === "more" ? "less" : "more"
        );

        e.target.innerHTML = e.target.dataset.state === "more" ? "Ver Mais" : "Ver Menos";

        overflow.setAttribute(
            "data-state", e.target.dataset.state === "more" ? "visible" : "hidden"  
        );
    }
</script>
</body>
</html>