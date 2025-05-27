<?php
    require '../logica/LProveedor.php';
    $pro=new Proveedor();
    $pro->setNombre("Gloria");
    $pro->setRuc("7593851946");
    $pro=new LProveedor();
    $pro->guardar($pro);
    echo 'DATOS GUARDADOS';
?>  