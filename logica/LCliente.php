<?php
    require '../datos/DB.php';
    require '../interfaces/ICliente.php';

    class LCliente implements ICliente{
        public function guardar(Cliente $cliente){
            $db=new DB();
            $cn=$db->conectar();
            $sql='insert into cliente (nombre, apellidos, dni, celular, direccion) values (:nom, :des, :dni, :cel, :dir)';
            $ps=$cn->prepare($sql);
            $ps->bindParam("nom", $cliente->getNombre());
            $ps->bindParam("des", $cliente->getApellidos());
            $ps->bindParam("dni", $cliente->getDni());
            $ps->bindParam("cel", $cliente->getCelular());
            $ps->bindParam("dir", $cliente->getDireccion());
            $ps->execute();
        }
        public function cargar(){
            $db = new DB();
            $cn = $db->conectar();
            $sql='select * from cliente';
            $ps=$cn->prepare($sql);
            $ps->execute();
            $clientes=array();
            $filas=$ps->fetchall();
            foreach($filas as $f){
                $cli=new cliente();
                $cli->setIdCliente($f[0]);
                $cli->setNombre($f[1]);
                $cli->setApellidos($f[2]);
                $cli->setDni($f[3]);
                $cli->setCelular($f[4]);
                $cli->setDireccion($f[5]);
                array_push($clientes, $cli);
            }
            return $clientes;
        }
    }
?>