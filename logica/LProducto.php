<?php
    require_once '../datos/DB.php';
    require_once '../interfaces/IProducto.php';

    class LProducto implements IProducto{
        public function guardar(Producto $producto){
            $db=new DB();
            $cn=$db->conectar();
            $sql="insert into producto (NOMBRE, STOCK, MONTO, IDCATEGORIA) VALUES (:nom, :sto, :mon, :idcat)";
            $ps=$cn->prepare($sql);
            $ps->bindParam(":nom", $producto->getNombre());
            $ps->bindParam(":sto", $producto->getStock());
            $ps->bindParam(":mon", $producto->getMonto());
            $ps->bindParam(":idcat", $producto->getIdCategoria());
            $ps->execute();
        }
        public function cargar(){
            $db = new DB();
            $cn = $db->conectar();
            $sql='select * from producto';
            $ps=$cn->prepare($sql);
            $ps->execute();
            $productos=array();
            $filas=$ps->fetchall();
            foreach($filas as $f){
                $pro=new Producto();
                $pro->setIdProducto($f[0]);
                $pro->setNombre($f[1]);
                $pro->setStock($f[2]);
                $pro->setMonto($f[3]);
                $pro->setIdCategoria($f[4]);
                array_push($productos, $pro);
            }
            return $productos;
        }
        public function cargarPorCategoria($idcat){
            $db = new DB();
            $cn = $db->conectar();
            $sql='select * from producto where idcategoria=:idcat';
            $ps=$cn->prepare($sql);
            $ps->bindParam(":idcat", $idcat);
            $ps->execute();
            $productos=array();
            $filas=$ps->fetchall();
            foreach($filas as $f){
                $pro=new Producto();
                $pro->setIdProducto($f[0]);
                $pro->setNombre($f[1]);
                $pro->setStock($f[2]);
                $pro->setMonto($f[3]);
                $pro->setIdCategoria($f[4]);
                array_push($productos, $pro);
            }
            return $productos;
        }
    }
?>