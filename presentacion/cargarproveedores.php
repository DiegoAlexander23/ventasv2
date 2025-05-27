<?php
    require '../logica/LProveedor.php';
    $log= new LProveedor;
    foreach ($log->cargar() as $categoria) {
        echo $categoria->getNombre();
    }
?>