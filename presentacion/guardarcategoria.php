<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            require_once '../logica/Lfamilia.php';
        ?>
        <h1>Insercion de Categorias</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNom" placeHolder="Nombre"><br>
            <select name="cbxIdFam" id="">
                <option >seleccione</option>
                <?php
                    $logFam=new LFamilia();
                    $familias=$logFam->cargar();
                    foreach ($familias as $fam) {
                ?>
                <option value="<?=$fam->getIdFamilia()?>"><?=$fam->getNombre()?></option>
                <?php
                    }
                ?>
            </select><br>
            <input type="submit" value="guardar">
        </form>
    </div>
</body>
</html>
<?php
    require_once '../logica/LCategoria.php';
    if ($_POST){
        $cat=new Categoria();
        $cat->setNombre($_POST['txtNom']);
        $cat->setIdFamilia($_POST['cbxIdFam']);
        $log=new LCategoria();
        $log->guardar($cat);
        header('Location: cargarcategorias.php');
    }
?> 