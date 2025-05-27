<?php
    require '../datos/DB.php';
    require '../interfaces/ICategoria.php';

    class LCategoria implements ICategoria{
        public function guardar(Categoria $categoria){
            $db=new DB();
            $cn=$db->conectar();
            $sql="insert into categoria (nombre, idfamilia) values (:nom, :idfam)";
            $ps=$cn->prepare($sql);
            $ps->bindParam(":nom", $categoria->getNombre());
            $ps->bindParam(":idfam", $categoria->getIdFamilia());
            $ps->execute();
        }
        public function cargar(){
            $db = new DB();
            $cn = $db->conectar();
            $sql='select * from categoria';
            $ps=$cn->prepare($sql);
            $ps->execute();
            $categoria=array();
            $filas=$ps->fetchall();
            foreach($filas as $f){
                $cat=new Categoria();
                $cat->setIdCategoria($f[0]);
                $cat->setNombre($f[1]);
                $cat->setIdFamilia($f[2]);
                array_push($categoria, $cat);
            }
            return $categoria;
        }
    }
?>