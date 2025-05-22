<?php
    require '../entidades/Cliente.php';
    interface ICliente{
        public function guardar(Cliente $cliente);
        public function cargar();
    }
?>