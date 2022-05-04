<?php
session_start();//Inicio sesion
$productos = $_SESSION['productos']; //Guardo el array de productos de la memoria
if($_GET['id'] != NULL){ // Si existe id guardo el id y nombre en memoria
    $_SESSION['id'] = $_GET['id'];
    $_SESSION['nombre'] = $_GET['nombrep']; 
}

if(isset($_POST['evento_editar'])){//Evento Post de editar producto
    $nom_producto = $_SESSION['nombre'];//Guardo nombre del producto
    $cant_producto = $_POST['cantidad'];//Guardo cantidad
    $editar_id = $_SESSION['id'];//Guardo id del producto
    $productos = $_SESSION['productos'];// Guardo array de productos 
    $productos[$editar_id]['nombre_prod'] = $nom_producto;//modifico el nombre del subarray
    $productos[$editar_id]['cantidad'] = $cant_producto;//modifico la cantidad del subarray
    $_SESSION['productos'] = $productos;// Guardo el array de productos en memoria 

    echo "<script>alert('Producto editado con éxito!');</script>";//Ejecuto alerta
    header("Refresh:0 , url=index.php");//Direcciono a la pantalla index.php
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Editar Producto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="faviconconfiguroweb.png">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet" type="text/css">
    
</head>

<body>
    <div class="header">
        <h3>INVENTARIO DE PRODUCTOS</h3>
    </div>
    <div class="container">
        <h1>Editar Producto</h1>
    </div>
    <div class="datosproducto">
        <!-- Formulario para editar un producto -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <div class="form-group">
                <label>Nombre de Producto</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $_GET['nombrep']; ?>" required disabled>
            </div>
            <div class="form-group">
                <label>Cantidad</label>
                <input type="number" min="0" class="form-control" name="cantidad" value="<?php echo $_GET['cantidadp']; ?>" required> </div> <br>
            <div class="form-button">
                <button type="submit" id="evento_editar" name="evento_editar" class="modifybtn" style="float:right">Editar</button>
                <a name="" id="" class="return" href="index.php" role="button" style="float:left">Volver</a>
            </div>
        </form>
    </div>
</body>
</html>