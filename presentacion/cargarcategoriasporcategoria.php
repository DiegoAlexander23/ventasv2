<?php
    require_once "../logica/LProducto.php";
    $idfam=$_GET['idcat'];
    $log=new LProducto();
    $rows=$log->cargarPorCategoria($idfam);
    $resjson=array();
    foreach($rows as $pro){
        array_push($resjson, array('id'=>$pro->getIdProducto(), 'nombre'=>$pro->getNombre()));
    }
    echo json_encode($resjson);
?>