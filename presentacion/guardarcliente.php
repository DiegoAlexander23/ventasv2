<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Insercion de Clientes</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNom" placehHlder="Nombre"><br>
            <input type="text" name="txtApe" placehHlder="Apellidos"><br>
            <input type="text" name="txtDni" placehHlder="dni"><br>
            <input type="text" name="txtCel" placehHlder="celular"><br>
            <input type="text" name="txtDir" placehHlder="direccion"><br>
            <input type="submit" value="guardar">
        </form>
    </div>
</body>
</html>
<?php
    if($_POST){
        require '../logica/LCliente.php';
        $cli=new cliente();
        $cli->setNombre($_POST['txtNom']);
        $cli->setApellidos ($_POST['txtApe']);
        $cli->setDni($_POST['txtDni']);
        $cli->setCelular($_POST['txtCel']);
        $cli->setDireccion($_POST['txtDir']);
        $log=new LCliente();
        $log->guardar($cli);
        header('Location: cargarclientes.php');
        }
?>
