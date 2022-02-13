<?php
    include("../Config/conexion.php");

    class ProductProcesses {
    
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
    }
?>