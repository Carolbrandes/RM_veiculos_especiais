<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <title>RM Veículos Especiais</title>
        <meta name="description" content="Site para consultoria, compra e venda de automóveis">
        <meta name="keywords" content="carros, automóveis, veículos">
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <contexto>
                <header>
                        <img class="logo" src="imagens/logo.jpg" alt="logo RM Veículos Especiais">
                        <nav class="menu-mobile">
                                <img src="imagens/menu-button.png" alt="menu" title="menu">
                        </nav>
                        <nav class="menu">
                                <a href="index.php">Home</a>
                                <a href="">Venda</a>
                                <a href="">Galeria</a>
                                <a href="">Eventos</a>
                                <a href="">Sobre Nós</a>
                                <a href="">Contato</a>
                        </nav>
                </header>
        </contexto>

        <section class="index-banner">
                <contexto>
                        <div class="index-banner__container">
                                <div class="index-banner__col">
                                        <div class="index-banner__texto">
                                                <p>Consultoria</p>
                                        </div>
                                        <div class="index-banner__texto">
                                                <p>Compra</p>
                                        </div>
                                        <div class="index-banner__texto">
                                                <p> Venda</p>
                                        </div>
                                        <div class="index-banner__texto">
                                                <p> contato@rmveiculosespeciais.com.br</p>
                                        </div>
                                </div>
                                <div class="index-banner__carro"></div>
                        </div>
                </contexto>
        </section>

        <section class="index-veiculoEmDestaque">
                <contexto>
                        <div class="titulo-linha">
                                <div class="titulo-linha__linha"></div>
                                <h1 class="titulo-linha__titulo">Veículos em Destaque</h1>
                        </div>

                        <div class="index-veiculoEmDestaque__container">
                                <div class="index-veiculoEmDestaque__carro">
                                        <div class="index-veiculoEmDestaque__imagem"  id="carro01"></div>
                                        <h2>Volkswagen Karmann-ghia</h2>
                                        <p>1.6 8v, Gasolina, 2P, Manual <br> 1969</p>
                                        <a href="" class="botao-mais-detalhes">Mais Detalhes</a>
                                </div>
                                <div class="index-veiculoEmDestaque__carro">
                                        <div class="index-veiculoEmDestaque__imagem" id="carro02"></div>
                                        <h2>Chevrolet Opala</h2>
                                        <p>4cc, Bancos de Corvin, 2,5<br> 1980</p>
                                        <a href="" class="botao-mais-detalhes">Mais Detalhes</a>
                                </div>
                                <div class="index-veiculoEmDestaque__carro">
                                        <div class="index-veiculoEmDestaque__imagem" id="carro03"></div>
                                        <h2>Volkswagen Gol GTs</h2>
                                        <p>Turbo forjado, xenon e alturas legalizadas<br> 1991</p>
                                        <a href="" class="botao-mais-detalhes">Mais Detalhes</a>
                                </div>
                        </div>
                </contexto>
        </section>


        <script src="js/menu.js"></script>

</body>

</html>