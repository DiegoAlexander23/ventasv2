<?php
    require '../datos/DB.php';
    require '../interfaces/IFamilia.php';

    class LFamilia implements IFamilia{
        public function guardar(Familia $familia){
            $db = new BD();
            $cn = $db->conectar();
            $sql='isert into familia (nombre, descripcion) values (:nom, :des)';
            $ps=$cn->prepare($sql);
            $ps->bindParam("nom", $this->getNombre);
        }
        public function cargar(){
            $db = new DB();
            $cn = $db->conectar();
            $sql='select * from familia';
            $ps=$cn->prepare($sql);
            $ps->execute();
            $familias=array();
            $filas=$ps->fetchall();
            foreach($filas as $f){
                $fam=new familia();
                $fam->setIdFamilia($f[0]);
                $fam->setNombre($f[1]);
                $fam->setDescripcion($f[2]);
                array_push($familias, $fam);
            }
            return $familias;
        }
    }
?>