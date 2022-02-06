<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Suculentos | Events</title>
        <link rel="stylesheet" href="Estilo/estilo.css">

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
                        <input type="text" class="filter bg-light bg-gradient" value="Todos" disabled>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent"></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                            <li><span class="dropdown-item">Dishes</span></li>
                            <li><span class="dropdown-item">Accompaniments</span></li>
                            <li><span class="dropdown-item">Breds</span></li>
                            <li><span class="dropdown-item">Dessert</span></li>
                        </ul>
                    </div>

                    
                </div>

                <div class="contSection-container">
                    <!-- <h3 class="my-3">The Best Sellers</h3> -->

                    <div class="container-vaners">
                        <div class="__vaners_vnr d-flex">
                            <button class="btn-warning btn-shop"><i class="bi bi-basket2-fill"></i></button>
                            <img class="__vnr-img" src="IMG/imgCaract.svg" alt="category">
                            <h4 class="__vnr-title">Name Product</h4>
                            <p class="__vnr-price">$5.00</p>
                        </div>
                        <div class="__vaners_vnr d-flex">
                            <button class="btn-warning btn-shop"><i class="bi bi-basket2-fill"></i></button>
                            <img class="__vnr-img" src="IMG/imgMinVanerBW.svg" alt="category">
                            <h4 class="__vnr-title">Name Product</h4>
                            <p class="__vnr-price">$5.00</p>
                        </div>
                        <div class="__vaners_vnr d-flex">
                            <button class="btn-warning btn-shop"><i class="bi bi-basket2-fill"></i></button>
                            <img class="__vnr-img" src="IMG/imgCaract.svg" alt="category">
                            <h4 class="__vnr-title">Name Product</h4>
                            <p class="__vnr-price">$5.00</p>
                        </div>
                        <div class="__vaners_vnr d-flex">
                            <button class="btn-warning btn-shop"><i class="bi bi-basket2-fill"></i></button>
                            <img class="__vnr-img" src="IMG/imgMinVanerBW.svg" alt="category">
                            <h4 class="__vnr-title">Name Product</h4>
                            <p class="__vnr-price">$5.00</p>
                        </div>
                    </div>
                </div>
           </div>
            
        </section>
        
    </body>
</html>