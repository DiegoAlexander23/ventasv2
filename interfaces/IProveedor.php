<?php
    require '../entidades/Proveedor.php';
    interface IProveedor{
        public function guardar(Proveedor $proveedor);
        public function cargar();
    }
?>