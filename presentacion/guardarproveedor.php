<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Insercion de Proveedor</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNom" placehHlder="Nombre"><br>
            <input type="text" name="txtRuc" placehHlder="RUC"><br>
            <input type="submit" value="guardar">
        </form>
    </div>
</body>
</html>
<?php
    if($_POST){
        require '../logica/LProveedor.php';
        $pro=new Proveedor();
        $pro->setNombre($_POST['txtNom']);
        $pro->setRuc($_POST['txtRuc']);
        $pro=new LProveedor();
        $pro->guardar($pro);
        header('Location: cargarproveedores.php');
        }
?>  