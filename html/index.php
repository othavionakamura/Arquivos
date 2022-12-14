<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" id="body">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />

    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/grafico.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>InfoZuca</title>
    <link rel="icon" type="image/jpg" href="../img/64673.png" />
</head>

<body>

    <nav id="nav">
        <div id="logo" class="logo">
            <img src="../img/logo-branca.png">
        </div>

        <div id="navigation" class="navigation">
            <ul>
                <li class="list active">
                    <a href="#body">
                        <span class="text">Início</span>
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                    </a>
                </li>
                <li class="list">
                    <a href="#regioes">
                        <span class="text">Regiões</span>
                        <span class="icon">
                            <ion-icon name="map-outline"></ion-icon>
                        </span>
                    </a>
                </li>
                <li class="list">
                    <a href="#economia">
                        <span class="text">Economia</span>
                        <span class="icon">
                            <ion-icon name="bar-chart-outline"></ion-icon>
                        </span>
                    </a>
                </li>
                <li class="list">
                    <a href="#ong">
                        <span class="text">ONGs</span>
                        <span class="icon">
                            <ion-icon name="heart-circle-outline"></ion-icon>
                        </span>
                    </a>
                </li>
                <li class="list">
                    <a href="#pontos">
                        <span class="text">Contato</span>
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>

        </div>

        <div class="menu_ham navbar-container navbar">
            <input type="checkbox" name="" id="checkbox">
            <label id="hamburger-lines" class="hamburger-lines" for="checkbox" onclick="display_none()">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </label>
        </div>
    </nav>

    <div id="itens-menu" class="itens-menu">

        <div class="itens-menu-left" id="itens-menu-left">
            <div class="top">
                <img src="logo_contorno_branco.png">
                <label for="fechar_items-menu">x</label>
                <button id="fechar_items-menu" onclick="display_block()"></button>
            </div>
            
            <ul>
                <li><a href="../Backend/Usuario/login.html">Login / Cadastro</a></li>
                <li><a href="../Backend/ONG/ong_list.php" class="ongs">ONGs</a></li>
                <div class="ong_opcoes"></div>
                <li><a href="../grupo/">O Grupo</a></li>
                <li><a href="../admin/php/">Administrador</a></li>
            </ul>
        </div>
        <div class="itens-menu-right" id="itens-menu-right">
            <div class="fechar_menu_items">
                <label for="fechar_items-menu">x</label>
                <button id="fechar_items-menu" onclick="display_block()"></button>
            </div>
            <p class="p1">Quer saber sobre<br>uma região ou sobre<br>um estado?</p>
            <p class="p2">Você está no lugar certo!</p>
        </div>
    </div>

    <div class="content">

        <div id="inicio">
            <div class="content_inicio">
                <p>Tudo sobre todas<br>as regiões e estados do</p>
                <h1>Brasil</h1>
            </div>
        </div>

        <div id="regioes">

            <div class="cima">
                <h1 class="escolha">Escolha uma</h1>
                <h1 class="regiao">Região</h1>
            </div>
            <div class="baixo">
                <div class="container">
                    <div class="left">
                        <div class="flip-card-container" style="--hue: 220">
                            <div class="flip-card">
    
                                <div class="card-front">
                                    <figure>
                                        <div class="img-bg"></div>
                                        <img src="../img_estados/norte.jpg" alt="Brohm Lake">
                                    </figure>
    
                                    <h1 class="titulo">Norte</h1>
    
                                </div>
    
                                <div class="card-back">
    
                                    <a href="../Regioes/Norte/index.html" class="btn2">
                                        <button class="btn">Saiba Mais</button>
                                    </a>
    
                                    <div class="design-container">
                                        <span class="design design--1"></span>
                                        <span class="design design--2"></span>
                                        <span class="design design--3"></span>
                                        <span class="design design--4"></span>
                                        <span class="design design--5"></span>
                                        <span class="design design--6"></span>
                                        <span class="design design--7"></span>
                                        <span class="design design--8"></span>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        
                        <div class="flip-card-container" style="--hue: 350">
                            <div class="flip-card">
    
                                <div class="card-front">
                                    <figure>
                                        <div class="img-bg"></div>
                                        <img src="../img_estados/centro.webp" alt="Brohm Lake">
                                    </figure>
    
                                    <h1 class="titulo centro">Centro Oeste</h1>
                                </div>
    
                                <div class="card-back">
    
                                    <a href="../Regioes/Centro/index.html" class="btn2">
                                        <button class="btn">Saiba Mais</button>
                                    </a>
    
                                    <!-- can add svg here and remove these eight spans -->
                                    <div class="design-container">
                                        <span class="design design--1"></span>
                                        <span class="design design--2"></span>
                                        <span class="design design--3"></span>
                                        <span class="design design--4"></span>
                                        <span class="design design--5"></span>
                                        <span class="design design--6"></span>
                                        <span class="design design--7"></span>
                                        <span class="design design--8"></span>
                                    </div>
                                </div>
    
                            </div>
                        </div>

                        <div class="flip-card-container" style="--hue: 350">
                            <div class="flip-card">
    
                                <div class="card-front">
                                    <figure>
                                        <div class="img-bg"></div>
                                        <img src="../img_estados/sudeste.webp" alt="Brohm Lake">
                                    </figure>
    
                                    <h1 class="titulo">Sudeste</h1>
                                </div>
    
                                <div class="card-back">
    
                                    <a href="../Regioes/Sudeste/index.html" class="btn2">
                                        <button class="btn">Saiba Mais</button>
                                    </a>
    
                                    <!-- can add svg here and remove these eight spans -->
                                    <div class="design-container">
                                        <span class="design design--1"></span>
                                        <span class="design design--2"></span>
                                        <span class="design design--3"></span>
                                        <span class="design design--4"></span>
                                        <span class="design design--5"></span>
                                        <span class="design design--6"></span>
                                        <span class="design design--7"></span>
                                        <span class="design design--8"></span>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    
                    <div class="right">
                        <div class="flip-card-container" style="--hue: 170">
                            <div class="flip-card">
    
                                <div class="card-front">
                                    <figure>
                                        <div class="img-bg"></div>
                                        <img src="../img_estados/nordeste.jpg" alt="Image 2">
                                    </figure>
    
                                    <h1 class="titulo">Nordeste</h1>
                                </div>
    
                                <div class="card-back">
    
                                    <a href="../Regioes/Nordeste/index.html" class="btn2">
                                        <button class="btn">Saiba Mais</button>
                                    </a>
    
                                    <div class="design-container">
                                        <span class="design design--1"></span>
                                        <span class="design design--2"></span>
                                        <span class="design design--3"></span>
                                        <span class="design design--4"></span>
                                        <span class="design design--5"></span>
                                        <span class="design design--6"></span>
                                        <span class="design design--7"></span>
                                        <span class="design design--8"></span>
                                    </div>
                                </div>
    
                            </div>
                        </div>

                        <div class="flip-card-container" style="--hue: 350">
                            <div class="flip-card">
    
                                <div class="card-front">
                                    <figure>
                                        <div class="img-bg"></div>
                                        <img src="../img_estados/sul.jpg" alt="Brohm Lake">
                                    </figure>
    
                                    <h1 class="titulo">Sul</h1>
                                </div>
    
                                <div class="card-back">
    
                                    <a href="../Regioes/Sul/index.html" class="btn2">
                                        <button class="btn">Saiba Mais</button>
                                    </a>
    
    
                                    <div class="design-container">
                                        <span class="design design--1"></span>
                                        <span class="design design--2"></span>
                                        <span class="design design--3"></span>
                                        <span class="design design--4"></span>
                                        <span class="design design--5"></span>
                                        <span class="design design--6"></span>
                                        <span class="design design--7"></span>
                                        <span class="design design--8"></span>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>          
                </div>
            </div>

        </div>

        <div id="economia">

            <div class="left">
                <h1>Economia</h1>
                <p>Em território brasileiro são desenvolvidos negócios nos setores primário, secundário e terciário,
                    sendo o último o mais forte do país. O setor terciário, é, atualmente, responsável por mais da
                    metade do PIB e pela geração de 75% dos empregos, sendo o maior ramo da economia do país.</p>
                <p>A economia brasileira apresenta um perfil sólido, sendo um grande exportador de uma variedade de
                    produtos, o que fomenta o desenvolvimento econômico. As principais atividades que contribuem para o
                    crescimento do Produto Interno Bruto (PIB) são a agropecuária, o setor de serviços, indústria e
                    comércio.</p>
            </div>


            <div class="right">
                <canvas id="myChart" width="100%" height="70%"></canvas>
            </div>
        </div>
        
        <div id="ong">
            <div class="content">
                <div class="left">
                    <img src="../img/caridade.jpg">
                </div>
                <div class="right">
                    <h1>Ligamos quem pode dar à quem precisa receber</h1>
                    <div class="buttons">
                        <a href="autenticacao_add_form.php"><button>Adicionar ONG</button></a>
                        <a href="../Backend/ONG/ong_list.php"><button>Ajudar uma ONG</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="pontos">
            <div class="left">
                <form action="mailto:joaorodriguesm05@gmail.com" enctype="text/plain">
                    <p>Entre em contato conosco</p>
                    <input type="" placeholder="Insira seu Nome">
                    <input type="text" placeholder="Insira seu Email">
                    <textarea name="nome" cols="32" rows="6" placeholder="Insira sua Mensagem"></textarea>
                    <input type="submit" value="Enviar">
                </form>
            </div>
            <div class="right">
                <h1></h1>
                <p></p>
            </div>
        </div>

        

    </div>

    <div id="navigation" class="navigation navigation2">
        <ul>
            <li class="list active">
                <a href="#body">
                    <span class="text">Início</span>
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#regioes">
                    <span class="text">Regiões</span>
                    <span class="icon">
                        <ion-icon name="map-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#economia">
                    <span class="text">Economia</span>
                    <span class="icon">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#ong">
                    <span class="text">ONGs</span>
                    <span class="icon">
                        <ion-icon name="heart-circle-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#pontos">
                    <span class="text">Contato</span>
                    <span class="icon">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>

    <footer>
        <p>Desenvolvido por</p>
        <div class="links">
            <a href="https://www.behance.net/mailonsantos1?tracking_source=search_users%7Cmailon%20santos" target="_blank">Mailon Davi</a>
            <a href="https://github.com/othavionakamura" target="_blank">Othávio Nakamura</a>
            <a href="https://www.behance.net/joaorodrigues51?tracking_source=search_users%7CRodrigues%20Designer" target="_blank">João Rodrigues</a>
        </div>
    </footer>

    <script src="../JavaScript/script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="script.js"></script>

</body>

</html>