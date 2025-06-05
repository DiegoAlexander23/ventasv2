<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Listado de Categorias</h1>
        <hr>
        <a href="guardarcategoria.php">Crear Nuevo</a>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>IdFamilia</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once '../logica/LCategoria.php';
                    $log= new LCategoria;
                    foreach ($log->cargar() as $categoria) {
                ?>
                <tr>
                    <td><?=$categoria->getIdCategoria()?></td>
                    <td><?=$categoria->getNombre()?></td>
                    <td><?=$categoria->getIdFamilia()?></td>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>