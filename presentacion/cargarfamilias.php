<?php
    require '../logica/LFamilia.php';
    $log= new LFamilia;
    foreach ($log->cargar() as $familia) {
        echo $familia->getNombre();
    }
?>