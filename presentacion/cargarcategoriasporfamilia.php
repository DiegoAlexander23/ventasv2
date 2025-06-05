<?php
    require_once "../logica/LCategoria.php";
    $idfam=$_GET['idfam'];
    $log=new LCategoria();
    $categorias=$log->cargarPorFamilia($idfam);
    $respuesta='';
    foreach ($categorias as $cat) {
        $respuesta=$respuesta."<option value='".$cat->getIdcategoria()."'>". $cat->getNombre() ."</option>"; 
    }
    echo $respuesta;
?>