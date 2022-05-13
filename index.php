<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Suculentos</title>
        <link rel="stylesheet" href="Vista/Estilo/estilo.css">
        <link rel="stylesheet" href="Vista/Estilo/modals.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    </head>
    <body class="contBody">
        <header>
            
                <!--Nav importado-->
                <?php include("Vista/nav.php"); ?>

                <div class="contHeader_head"> 
                    <div class="__head_slogan text-center">
                        <h4>SUCULENTOS</h3>
                        <h3>La comidas mas suculentas que encontraras en todo Panamá.</h2>
                        <h4>Compruebalo tu mismo.</h3>
                    </div>
                    <div class="__head_vaners">
                        <div class="__items_item d-flex justify-content-start">
                            <img class="__item-img" src="Vista/IMG/imgCaract.svg" alt="category">
                            <h4 class="__item-title">Category</h4> 
                            <div class="__items_item-line"></div>
                            <p class="__item-txt">Description of category <br> category one.
                            </p>
                        </div>
                        <div class="__items_item d-flex justify-content-start">
                            <img class="__item-img" src="Vista/IMG/imgMinVanerBW.svg" alt="category">
                            <h4 class="__item-title">Category</h4> 
                            <div class="__items_item-line"></div>
                            <p class="__item-txt">Description of category.</p>
                        </div>
                        <div class="__items_item d-flex justify-content-start">
                            <img class="__item-img" src="Vista/IMG/imgCaract.svg" alt="category">
                            <h4 class="__item-title">Category</h4> 
                            <div class="__items_item-line"></div>
                            <p class="__item-txt">Description of category.</p>
                        </div>
                        <div class="__items_item d-flex justify-content-start">
                            <img class="__item-img" src="Vista/IMG/imgMinVanerBW.svg" alt="category">
                            <h4 class="__item-title">Category</h4> 
                            <div class="__items_item-line"></div>
                            <p class="__item-txt">Description of category.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="contSection container">
                
                <!--Bets sellers-->
                <div class="ms-5">
                    <h3 class="ms-5">The Best Sellers</h3>
                </div>
                <div class="contSection-container mb-5">

                    <div class="container-items">
                        <div id="items" class="container-items mb-5"></div>

                        <template class="templateItem">
                            <div class="__items_item d-flex pointer my-3" data-bs-toggle="modal" data-bs-target="#mdlProduct">
                                <img class="__item-img mb-3" alt="category">
                                <h4 class="__item-title pointer mt-3"></h4>
                                <p class="__item-price"></p>
                                <input class="__item-id" type="hidden" name="id">
                            </div>
                        </template>
                    </div>
                </div>

                <!--Promotions-->
                <div class="ms-5">                    
                    <h3 class="mt-5 ms-5">Promotions</h3>
                </div>
                <div class="contSection-container mt-4">

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
            <?php include("Vista/Modals/comprarArticulo.php");?>

        </section>
        <footer></footer>
        <script type="text/javascript" src="../Suculentos/Procesos/JavaScript/homepage.js"></script>
        <script type="text/javascript" src="../Suculentos/Procesos/JavaScript/pedido.js"></script>
        <script type="text/javascript" src="../Suculentos/Procesos/JavaScript/movilNav.js"></script>
    </body>
</html>