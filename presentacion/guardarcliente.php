<?php
    require '../logica/LCliente.php';
    $cli=new cliente();
    $cli->setNombre("SAMUAL");
    $cli->setApellidos ("CAMMA CAMMA");
    $cli->setDni("73737373");
    $cli->setCelular("75395837");
    $cli->setDireccion("avenida pierola 234");
    $log=new LCliente();
    $log->guardar($cli);
    echo 'DATOS GUARDADOS';
?>