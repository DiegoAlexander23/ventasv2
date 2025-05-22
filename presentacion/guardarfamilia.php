<?php
    require '../logica/LFamilia.php';
    $fam=new Familia();
    $fam->setNombre("JUEGOS VERDURAS");
    $fam->setDescripcion("TODO DE JUEGOS DE VERDURAS");
    $log=new LFamilia();
    $log->guardar($fam);
    echo 'DATOS GUARDADOS';
?>