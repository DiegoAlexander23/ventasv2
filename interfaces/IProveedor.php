<?php
    require '../entidades/Proveedor.php';
    interface IProveedor{
        public function guardar(Proveedor $Proveedor);
        public function cargar();
    }
?>