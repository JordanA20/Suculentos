<?php include("../Config/conexion.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Suculentos | Menu</title>
        <link rel="stylesheet" href="Estilo/estilo.css">
        <link rel="stylesheet" href="Estilo/modals.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    </head>
    <body class="bg-light">
        <header>
            <!--Nav importado-->
            <?php include("nav.php"); ?>
        </header>
        <section>
           <div class="contSection container">
                <div class="contSection-menuFilter container my-5">
                    <div class="btn-group">
                        <input class="filter bg-light bg-gradient" id="filterType" type="text" disabled>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent"></button>
                        <ul id="typeOptions" class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                            <li class="dropdown-item">ALL<input type="hidden" value="0"></input></li>
                            <li class="dropdown-item">DISHES<input type="hidden" value="1"></input></li>
                            <li class="dropdown-item">ACCOMPANIMENTS<input type="hidden" value="2"></input></li>
                            <li class="dropdown-item">BREDS<input type="hidden" value="3"></input></li>
                            <li class="dropdown-item">DESSERT<input type="hidden" value="4"></input></li>
                        </ul>
                    </div>

                    <!-- <div class="input-group">
                        <select class="filter form-select" id="filterCategories" aria-label="Example select with button addon">
                            <option value="0" selected>All</option>
                            <option value="1">Dishes</option>
                            <option value="2">Accompaniments</option>
                            <option value="3">Breds</option>
                            <option value="4">Dessert</option>
                        </select>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent"></button>
                    </div> -->
                </div>

                <div class="contSection-container">
                    <!-- <button id="btn-prueba">PRUEBA</button> -->
                    <!-- <h3 class="my-3">The Best Sellers</h3> -->

                    <div class="container-items">
                        <div id="items" class="container-items"></div>

                        <template class="templateItem">
                            <div class="__items_item d-flex pointer" data-bs-toggle="modal" data-bs-target="#mdlProduct">
                                <div class="__items_item_shop d-flex flex-row justify-content-end">
                                    <div>
                                        <button class="btn-warning btn-shop"><i class="bi bi-basket2-fill"></i></button>
                                    </div>
                                </div>
                                <img class="__item-img" alt="category">
                                <h4 class="__item-title pointer"></h4>
                                <p class="__item-price"></p>
                                <input class="__item-id" type="hidden" name="id">
                            </div>
                        </template>
                    </div>
                </div>
           </div>
            
           <?php include("Modals/comprarArticulo.php");?>
        </section>
        <footer></footer>
        <script type="text/javascript" src="../Procesos/JavaScript/pedido.js"></script>
    </body>
</html>