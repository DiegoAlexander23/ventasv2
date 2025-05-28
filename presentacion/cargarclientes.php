<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Listado de Clientes</h1>
        <hr>
        <a href="guardarcliente.php">Crear Nuevo</a>
        <table>
            <thead>
                <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>dni</td>
                        <td>celular</td>
                        <td>direccion</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require '../logica/LCliente.php';
                    $log= new LCliente; 
                    foreach ($log->cargar() as $cliente) {
                ?>
                <tr>
                    <td><?=$cliente->getIdCliente()?></td>
                    <td><?=$cliente->getNombre()?></td>
                    <td><?=$cliente->getApellidos()?></td>
                    <td><?=$cliente->getDni()?></td>
                    <td><?=$cliente->getCelular()?></td>
                    <td><?=$cliente->getDireccion()?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>