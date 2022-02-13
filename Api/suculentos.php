<?php
    require "Class/ProductProcesses.php";

    $p = $_POST['p'];

    if($p == 'Products'){
        $c = $_POST['category'];
        Products($c);
    }
    // else if ($p == 'juegos'){
    //     AllJuegos();
    // }else if ($p == 'facultades'){
    //     AllFacultades();
    // }else if ($p == 'estudiantesSave'){
    //     $data = json_decode(file_POST_contents('php://input'), true);
    //     $n = $data['nombre_completo'];
    //     $c = $data['cedula'];
    //     $e = $data['edad'];
    //     $f = $data['facultad'];
    //     $em = $data['email'];
    //     $p = $data['password'];
    //     RegistrarEstudiantes($n,$c,$e,$f,$em,$p);
    // }else if ($p == 'preguntas'){
    //     //$jid = $_POST['juegoId'];
    //     //$nid = $_POST['nivelId'];
    //     $jid = 2;
    //     $nid = 1;
    //     preguntasRespuestas($jid,$nid);
    // }else if ($p == 'partidaSave'){
    //     $data = json_decode(file_POST_contents('php://input'), true);
    //     Registrarpartida($data);
    // }else if ($p == 'posiciones'){
    //     Allpositions();
    // }
  
    function Products($c){
        $productDb = new ProductProcesses();
        $products = $productDb->GetProducts($c);
        print json_encode($products);
    }
  
    // function AllJuegos(){
    //   $juegosDb = new procesosJuegos();
    //   $juegos = $juegosDb->ObtenerTodosLosJuegos();
    //   print json_encode($juegos);
    // }
  
    // function AllFacultades(){
    //   $estudiantesDb = new procesosEstudiantes();
    //   $facultades = $estudiantesDb->ObtenerFacultades();
    //   print json_encode($facultades);
    // }
  
    // function RegistrarEstudiantes($n,$c,$e,$f,$em,$p){
    //   $estudiantesDb = new procesosEstudiantes();
    //   $registrado = $estudiantesDb->RegistrarEstudianteUsuario($n,$c,$e,$f,$em,$p);
  
    //   if($registrado){
    //     print json_encode(1);
    //   }else{
    //     print json_encode(0);
    //   }
  
    // }
  
    // function preguntasRespuestas($jid,$nid){
    //   $juegosDb = new procesosJuegos();
    //   $preguntas = $juegosDb->Obtenerpreguntas($jid,$nid);
    //   print json_encode($preguntas);
    // }
  
    // function Registrarpartida($data){
    //   $juegosDb = new procesosJuegos();
  
    //   $jg = $data['juego'];
    //   $ju = $data['jugador'];
    //   $p = $data['partida'];
    //   $f = $data['fecha'];
    //   $h = $data['hora'];
    //   $pt = $data['puntaje'];
    //   $d = json_encode($data['detalle']);
    //   $n = $data['nivel'];
  
    //   $registrado = $juegosDb->Insertarpartida($jg,$ju,$p,$n,$f,$h,$pt,$d);
  
    //   if($registrado){
    //     print json_encode(1);
    //   }else{
    //     print json_encode(0);
    //   }
    // }
  
    // function Allpositions(){
    //   $juegosDb = new procesosJuegos();
    //   $pos = $juegosDb->Obtenerposciiones();
    //   print json_encode($pos);
    // }
?>