<?php
    require_once "../logica/LCategoria.php";
    $idfam=$_GET['idfam'];
    $log=new LCategoria();
    $categorias=$log->cargarPorFamilia($idfam);
    $resjson=array();
    foreach($categorias as $cat){
        array_push($resjson, array('id'=>$cat->getIdCategoria(), 'nombre'=>$cat->getNombre()));
    }
    echo json_encode($resjson);
?>