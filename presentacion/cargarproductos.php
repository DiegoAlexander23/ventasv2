<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Listado de Productos</h1>
        <hr>
        <a href="guardarproducto.php">Crear Nuevo</a>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Stock</td>
                    <td>Monto</td>
                    <td>Categoria</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require '../logica/LProducto.php';
                    $log= new LProducto;
                    foreach ($log->cargar() as $pro) {
                ?>
                <tr>
                    <td><?=$pro->getIdProducto()?></td>
                    <td><?=$pro->getNombre()?></td>
                    <td><?=$pro->getStock()?></td>
                    <td><?=$pro->getMonto()?></td>
                    <td><?=$pro->getIdCategoria()?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>