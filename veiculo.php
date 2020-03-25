<!DOCTYPE html>
<html lang="en">

<?php include_once "componentes/head/head.php"; ?>

<body>

        <?php include_once "componentes/header/header.php"; ?>

        <contexto>
                <main>
                        <div class="titulo-linha">
                                <div class="titulo-linha__linha"></div>
                                <h1 class="titulo-linha__titulo">Volkswagen Karmann-ghia</h1>
                        </div>


                        <article class="veiculo">

                                <div class="veiculo-imagens">
                                        <nav class="veiculo__breadcrumb">
                                                <a href="index.php">Home</a> &gt; <a href="venda.php">Ver Todos</a> &gt; <span class="breadcrumb-selected">Volkswagen Karmann-ghia</span>
                                        </nav>
                                        <img class="veiculo-imagem-principal" src="imagens/carro01.jpg" alt="">

                                        <div class="veiculo-galeria">
                                                <img class="seta-slider" src="imagens/seta-esquerda.png" alt="">
                                                <div class="veiculo-galeria__fotos">
                                                        <img src="imagens/carro01.jpg" alt="">
                                                        <img src="imagens/carro01.jpg" alt="">
                                                        <img src="imagens/carro01.jpg" alt="">
                                                </div>
                                                <img class="seta-slider" src="imagens/seta-direita.png" alt="">
                                        </div>

                                </div>
                                <div class="veiculo-descricao">
                                        <h2 class="titulo-simples-preto">Volkswagen Karmann-ghia</h2>
                                        <p>1.6 8v, Gasolina, 2P, Manual</p>
                                        <p>1969</p>
                                        <a href="veiculo.php" class="botao-mais-detalhes">Comprar</a>
                                </div>

                        </article>
                </main>

        </contexto>

        <?php include_once "componentes/footer/footer.php"; ?>

        <script src="js/menu.js"></script>

</body>

</html>