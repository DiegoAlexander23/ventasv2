<?php
    require '../logica/LCategoria.php';
    $cat=new Categoria();
    $cat->setNombre("Jugos y Zumos");
    $cat->setIdFamilia("");
    $log=new LCategoria();
    $log->guardar($cat);
    echo 'DATOS GUARDADOS';
?>  