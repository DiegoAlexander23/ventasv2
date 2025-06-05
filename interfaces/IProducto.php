<?php
    require '../entidades/Producto.php';
    interface IProducto{
        public function guardar(Producto $producto);
        public function cargar();
    }
?>