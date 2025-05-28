<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Listado de Proveedores</h1>
        <hr>
        <a href="guardarproveedor.php">Crear Nuevo</a>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>RUC</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require '../logica/LProveedor.php';
                    $log= new LProveedor;
                    foreach ($log->cargar() as $proveedor) {
                ?>
                <tr>
                    <td><?=$proveedor->getIdProveedor()?></td>
                    <td><?=$proveedor->getNombre()?></td>
                    <td><?=$proveedor->getRuc()?></td>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>