<?php
    class Producto{
        private $idProducto;
        private $Nombre;
        private $stock;
        private $monto;
        private $idcategoria;
        public function getIdProducto(){
            return $this->idProducto;
        }
        public function setIdProducto($idProducto){
            $this->idProducto=$idProducto;
        }
        public function getNombre(){
            return $this->Nombre;
        }
        public function setNombre($Nombre){
            $this->Nombre=$Nombre;
        }
        public function getStock(){
            return $this->stock;
        }
        public function setStock($stock){
            $this->stock=$stock;
        }
        public function getMonto(){
            return $this->monto;
        }
        public function setMonto($monto){
            $this->monto=$monto;
        }
        public function getIdCategoria(){
            return $this->idcategoria;
        }
        public function setIdCategoria($idcategoria){
            $this->idcategoria=$idcategoria;
        }
    }
?>