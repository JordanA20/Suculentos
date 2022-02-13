<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Suculentos</title>
        <link rel="stylesheet" href="Vista/Estilo/estilo.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    </head>
    <body class="bg-light">
        <header>
            
                <!--Nav importado-->
                <?php include("Vista/nav.php"); ?>

                <div class="contHeader_head">
                    <div class="__head_slogan text-center">
                        <h4>SUCULENTOS</h3>
                        <h3>La comidas mas suculentas que encontraras en todo Panamá</h2>
                        <h4>Compruebalo tu mismo</h3>
                    </div>
                    <div class="__head_vaners">
                        <div class="__items_item d-flex justify-content-start">
                            <img class="__item-img" src="Vista/IMG/imgCaract.svg" alt="category">
                            <h4 class="__item-title">Category</h4> 
                            <div class="__items_item-linea"></div>
                            <p class="__item-txt">Description of category <br> 
                                                category one
                            </p>
                        </div>
                        <div class="__items_item d-flex justify-content-start">
                            <img class="__item-img" src="Vista/IMG/imgMinVanerBW.svg" alt="category">
                            <h4 class="__item-title">Category</h4> 
                            <div class="__items_item-linea"></div>
                            <p class="__item-txt">Description of category</p>
                        </div>
                        <div class="__items_item d-flex justify-content-start">
                            <img class="__item-img" src="Vista/IMG/imgCaract.svg" alt="category">
                            <h4 class="__item-title">Category</h4> 
                            <div class="__items_item-linea"></div>
                            <p class="__item-txt">Description of category</p>
                        </div>
                        <div class="__items_item d-flex justify-content-start">
                            <img class="__item-img" src="Vista/IMG/imgMinVanerBW.svg" alt="category">
                            <h4 class="__item-title">Category</h4> 
                            <div class="__items_item-linea"></div>
                            <p class="__item-txt">Description of category </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="contSection container">
                
                <!--Bets sellers-->
                <div class="contSection-container">
                    <h3 class="my-3">The Best Sellers</h3>

                    <div class="container-items">
                        <div class="__items_item d-flex">
                            <img class="__item-img" src="Vista/IMG/imgCaract.svg" alt="category">
                            <h4 class="__item-title">Name Product</h4>
                            <p class="__item-price">$5.00</p>
                        </div>
                        <div class="__items_item d-flex">
                            <img class="__item-img" src="Vista/IMG/imgMinVanerBW.svg" alt="category">
                            <h4 class="__item-title">Name Product</h4>
                            <p class="__item-price">$5.00</p>
                        </div>
                        <div class="__items_item d-flex">
                            <img class="__item-img" src="Vista/IMG/imgCaract.svg" alt="category">
                            <h4 class="__item-title">Name Product</h4>
                            <p class="__item-price">$5.00</p>
                        </div>
                        <div class="__items_item d-flex">
                            <img class="__item-img" src="Vista/IMG/imgMinVanerBW.svg" alt="category">
                            <h4 class="__item-title">Name Product</h4>
                            <p class="__item-price">$5.00</p>
                        </div>
                    </div>
                </div>

                <!--Promotions-->
                <div class="contSection-container mt-5">
                    <h3 class="my-3">Promotions</h3>

                    <div class="promo container-items d-flex">
                        <div class="__items_item d-flex">
                            <img class="__item-img" src="Vista/IMG/imgCaract.svg" alt="category">
                        </div>
                        <div class="__items_item d-flex">
                            <img class="__item-img" src="Vista/IMG/imgMinVanerBW.svg" alt="category">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>