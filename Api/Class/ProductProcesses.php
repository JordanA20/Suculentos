<?php
    include("../Config/conexion.php");

    class ProductProcesses {
    
        // Obtine los productos dependiendo de las categoria a que se busque.
        function GetProducts($c) {
            $conexion = new Conexion();
            $datos = $conexion->RealizarConexion();
            if($c == 0)
                $cosultProducts = $datos->query("SELECT id_producto, nombre, costo, descripcion, foto FROM producto "); 
            elseif($c >= 1 && $c <= 4)
                $cosultProducts = $datos->query("SELECT id_producto, nombre, costo, descripcion, foto FROM producto WHERE tipo = '$c'");

            $data = array();
            while($products = $cosultProducts->fetch(PDO::FETCH_ASSOC)){
                $data[$products['id_producto']] = $products;
            }
            return $data;
        }

        // Obtiene los 5 productos más vendidos en el mes.
        function GetBestSellerProducts() {
            $conexion = new Conexion();
            $datos = $conexion->RealizarConexion();

            $cosultBSP = $datos->query("SELECT p.id_producto, p.nombre, p.costo, p.descripcion, p.foto FROM producto p INNER JOIN venta v ON p.id_producto = v.producto_id GROUP BY v.producto_id LIMIT 4");

            $data = array();
            $cont = 0;
            while($products = $cosultBSP->fetch(PDO::FETCH_ASSOC)){
                $data[$products['id_producto']] = $products;
            }
            return $data;
        }
    }
?>