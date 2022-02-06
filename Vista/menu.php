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
                        
                    <?php 
                        $consultarproductos = $datos->query("SELECT id_producto, nombre, costo, descripcion, foto FROM producto "); 
                        while($producto = $consultarproductos->fetch(PDO::FETCH_OBJ)){ 
                    ?>

                        <div class="container-vaners">
                            <div class="__vaners_vnr d-flex" data-bs-toggle="modal" data-bs-target="#mdlProduct">
                                <div class="__vaners_vnr_shop d-flex flex-row justify-content-end">
                                    <div>
                                        <button class="btn-warning btn-shop"><i class="bi bi-basket2-fill"></i></button>
                                    </div>
                                </div>
                                <img class="__vnr-img" src="IMG/imgCaract.svg" alt="category">
                                <h4 class="__vnr-title"><?php echo $producto->nombre; ?></h4>
                                <div class="d-flex flex-row">
                                    $ <p class="__vnr-price"><?php echo $producto->costo ?></p>
                                </div>
                                <input class="__vnr-id" type="hidden" name="id" value="<?php echo $producto->id_producto ?>">
                                <input class="__vnr-description" type="hidden" name="description" value="<?php echo $producto->descripcion ?>">
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
           </div>
            
           <?php include("Modals/comprarArticulo.php");?>
        </section>
        <footer></footer>
        <script type="text/javascript" src="../Procesos/JavaScript/pedido.js"></script>
    </body>
</html>