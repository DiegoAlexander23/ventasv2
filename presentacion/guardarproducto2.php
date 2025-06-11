<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.7.1.min.js"></script>
</head>
<body>
    <?php
            require_once '../logica/Lfamilia.php';
            require_once '../logica/LCategoria.php';
        ?>
    <div>
        <h1>Insercion de Productos</h1>
        <hr>
        <form action="" method="post">
            Nombre: <br>
            <input type="text" name="txtNom"> <br>
            Stock: <br>
            <input type="number" name="txtSto"> <br>
            Monto <br>
            <input type="number" name="txtMon"> <br>
            Familia <br>
            <select name="cbxIdFam" id="cbxIdFam" onchange="enviarIdFam()" >
                <option>Seleccione</option>
                <?php
                    $logFam=new LFamilia();
                    $familias=$logFam->cargar();
                    foreach ($familias as $pro) {
                ?>
                <option value="<?=$pro->getIdFamilia()?>"><?=$pro->getNombre()?></option>
                <?php
                    }
                ?>
            </select><br>
            Categoria <br>
            <select name="cbxIdCat" id="cbxIdCat">
                <option>Seleccione</option>
            </select><br>
            <input type="submit" value="guardar">
        </form>
    </div>
</body>
</html>
<script>
    function enviarIdFam(){
        idfam=$('#cbxIdFam').val();
        param={'idfam':idfam};
        $.ajax({
            data: param,
            url: 'cargarcategoriasporfamilia2.php',
            type:'get',
            dataType:"json",
            success: function(res){
                //$('#cbxIdCat').html(res);
                reshtml='';
                for(r of res){
                    reshtml=reshtml+"<option value="+r.id+">"+r.nombre+"</option>";
                }
                $("#cbxIdCat").html(reshtml);
            }
        })
    }
</script>
<?php
    require_once '../logica/LProducto.php';
    if($_POST){
        $pro=new Producto();
        $pro->setNombre($_POST['txtNom']);
        $pro->setStock($_POST['txtSto']);
        $pro->setMonto($_POST['txtMon']);
        $pro->setIdCategoria($_POST['cbxIdCat']);
        $log=new LProducto();
        $log->guardar($pro);
        header('Location: cargarproductos.php');
    }
?>  