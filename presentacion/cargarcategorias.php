<?php
    require '../logica/LCategoria.php';
    $log= new LCategoria;
    foreach ($log->cargar() as $categoria) {
        echo $categoria->getNombre();
    }
?>