<!DOCTYPE html>
<html lang="en">

<?php include_once "componentes/head/head.php"; ?>

<body>

        <?php include_once "componentes/header/header.php"; ?>

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

                        <?php include "componentes/vitrine/vitrine.php"; ?>
                </contexto>
        </section>


        <section class="index-servicosDepoimentos">
                <section class="index-servicosDepoimentos__single index-servicosDepoimentos__servicos">
                        <contexto>
                                <h2 class="titulo-simples">Serviços</h2>

                                <div class="index-servicosDepoimentos__flex">
                                        <ul>
                                                <li>Compra</li>
                                                <li>Venda</li>
                                                <li>Consignação</li>
                                                <li>Consultoria de Veículos</li>
                                                <li>Indicação de mecânicos e peças</li>
                                        </ul>

                                        <a href="" class="botao-mais-detalhes">Saiba Mais</a>
                                </div>
                        </contexto>
                </section>

                <section class="index-servicosDepoimentos__single index-servicosDepoimentos__depoimentos">
                        <contexto>
                                <h2 class="titulo-simples">Depoimentos</h2>

                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nihil voluptatem quaerat suscipit non illo qui iure reiciendis eveniet nemo nobis expedita, reprehenderit id cumque consectetur esse fugiat ad aliquam?</blockquote>

                                <div class="index-servicosDepoimentos__flex-2">
                                        <div>
                                                <img src="imagens/seta-esquerda.png" alt="">
                                                <img src="imagens/seta-direita.png" alt="">
                                        </div>
                                        <p class="index-servicosDepoimentos__autor">Autor</p>
                                </div>
                        </contexto>

                </section>
        </section>


        <?php include_once "componentes/form-contato/form-contato.php"; ?>


        <?php include_once "componentes/footer/footer.php"; ?>

        <script src="js/menu.js"></script>

</body>

</html>