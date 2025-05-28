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
            require '../datos/DB.php';
            $db=new DB();
            $cn=$db->conectar();
            $sql='select * from familia';
            $ps=$cn->prepare($sql);
            $ps->execute();
            $filass=$ps->fetchall();  

        ?>
        <h1>Insercion de Categorias</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNom" placeHolder="Nombre"><br>
            <select name="cbxIdFam" id="">
                <option >seleccione</option>
                <?php
                    foreach($filass as $f){
                ?>
                <option value="<?=$f[0]?>"><?=$f[1]?></option>
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
    if ($_POST){
        require '../logica/LCategoria.php';
        $cat=new Categoria();
        $cat->setNombre($_POST['txtNom']);
        $cat->setIdFamilia($_POST['cbxIdFam']);
        $log=new LCategoria();
        $log->guardar($cat);
        header('Location: cargarcategorias.php');
        }
?> 