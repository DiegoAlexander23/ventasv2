<?php
    require '../logica/LCliente.php';
    $log= new LCliente; 
    foreach ($log->cargar() as $cliente) {
        echo $cliente->getNombre();
    }
?>