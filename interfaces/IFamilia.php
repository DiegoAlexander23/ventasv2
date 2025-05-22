<?php
    require '../entidades/Familia.php';
    interface IFamilia{
        public function guardar(Familia $familia);
        public function cargar();
    }
?>