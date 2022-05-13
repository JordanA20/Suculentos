<?php
    require "Class/ProductProcesses.php";

    $p = $_POST['p'];

    if($p == 'Products'){
        $c = $_POST['category'];
        Products($c);
    }
    else if($p == 'BSP'){
        BestSellerProducts();
    }
    // }else if ($p == 'partidaSave'){
    //     $data = json_decode(file_POST_contents('php://input'), true);
    //     Registrarpartida($data);
    // }
  
    function Products($c){
        $productDb = new ProductProcesses();
        $products = $productDb->GetProducts($c);
        print json_encode($products);
    }

    function BestSellerProducts(){
        $productDb = new ProductProcesses();
        $bsp = $productDb->GetBestSellerProducts();
        print json_encode($bsp);
    }
?>