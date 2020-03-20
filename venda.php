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

        <?php include_once "componentes/header/header.php"; ?>

        <contexto>
                <main>
                        <div class="titulo-linha">
                                <div class="titulo-linha__linha"></div>
                                <h1 class="titulo-linha__titulo">Veículos Para Venda</h1>
                        </div>

                        <div class="venda">
                                <section class="venda__filtros">
                                        <form action="">
                                                <div class="venda__filtro-range">
                                                        <h2 class="titulo-simples-preto">Filtre por Preço</h2>
                                                        <label for="preco" class="input-range__barra"></label>
                                                        <div class="input-range__progresso"></div>
                                                        <div class="input-range__pointer"></div>
                                                        <div class="input-range__limites">
                                                                <span>R$ 15.000</span>
                                                                <span>R$ 70.000</span>
                                                        </div>
                                                        <input type="range" id="preco" name="preco" min="5000" max="70000">
                                                </div>

                                                <div class="venda__filtro-ano">
                                                        <h2 class="titulo-simples-preto">Filtre por Ano</h2>

                                                        <div>
                                                                <input type="checkbox" name="todasDecadas" id="todasDecadas">
                                                                <label class="venda__checkbox" for="todasDecadas">
                                                                        <div class="checked"></div>
                                                                </label>
                                                                <span>Todas as décadas</span>

                                                        </div>
                                                        <div>
                                                                <input type="checkbox" name="ano-2000-a-2009" id="ano-2000-a-2009">
                                                                <label class="venda__checkbox" for="ano-2000-a-2009">
                                                                        <div class="checked"></div>
                                                                </label>
                                                                <span>2000 a 2009</span>

                                                        </div>
                                                        <div>
                                                                <input type="checkbox" name="ano-1990-a-1999" id="ano-1990-a-1999">
                                                                <label class="venda__checkbox" for="ano-1990-a-1999">
                                                                        <div class="checked"></div>
                                                                </label>
                                                                <span>1990 a 1999</span>

                                                        </div>
                                                        <div>
                                                                <input type="checkbox" name="ano-1980-a-1989" id="ano-1980-a-1989">
                                                                <label class="venda__checkbox" for="ano-1980-a-1989">
                                                                        <div class="checked"></div>
                                                                </label>
                                                                <span>1980 a 1989</span>

                                                        </div>
                                                        <div>
                                                                <input type="checkbox" name="ano-1970-a-1979" id="ano-1970-a-1979">
                                                                <label class="venda__checkbox" for="ano-1970-a-1979">
                                                                        <div class="checked"></div>
                                                                </label>
                                                                <span>1970 a 1979</span>

                                                        </div>
                                                        <div>
                                                                <input type="checkbox" name="ano-1960-a-1969" id="ano-1960-a-1969">
                                                                <label class="venda__checkbox" for="ano-1960-a-1969">
                                                                        <div class="checked"></div>
                                                                </label>
                                                                <span>1960 a 1969</span>

                                                        </div>
                                                </div>
                                        </form>
                                </section>


                                <div class="venda__vitrine">
                                        <?php include "componentes/vitrine/vitrine.php"; ?>
                                </div>


                        </div>
                </main>

        </contexto>

        <?php include_once "componentes/footer/footer.php"; ?>

        <script src="js/menu.js"></script>

</body>

</html>