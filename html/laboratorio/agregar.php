<?php
session_start();//Inicio sesion
$productos = $_SESSION['productos'];//Guardo el array de la memoria en productos

//FUNCION PARA AGREGAR UN PRODUCTO NUEVO 
function AgregarProducto($nuevo){
    $productos = $_SESSION['productos'];// Guardo el array de la memoria en productos
    if($productos != null){// Si existen productos registrados
        //Inserto el nuevo subarray en el arrar multidimensional de productos
        array_push($productos,$nuevo);
    }else{
        //Declaro un array multidimensional con el nuevo subarray
        $productos = array($nuevo);
    }
    return $productos;//retorno el nuevo array de productos
}
if(isset($_POST['evento_agregar'])){//Evento Post de agregar producto
    // Guardo y transformo caracteres del nombre a mayusculas
    $nom_producto=strtoupper($_POST['nombre']);
    $cant_producto=$_POST['cantidad'];// Guardo la cantidad
    date_default_timezone_set('America/Guayaquil');// Cambio zona horaria Ecuador
    $fecha = date('m-d-Y h:i A', time());// Guardo la fecha-hora
    // Asigno elementos al subarray
    $nuevo=array("nombre_prod" => $nom_producto, "cantidad" =>$cant_producto, "fecha" => $fecha);
    $lista_productos=AgregarProducto($nuevo);//Llamo a la funcion para agregar un nuevo producto
    $_SESSION['productos'] = $lista_productos; // Grabo el array de productos en la memoria de sesion
    echo "<script>alert('Producto agregado con éxito!');</script>";//Ejecuto la alerta 
    header("Refresh:0 , url=index.php"); // Direcciono a la pantalla index.php
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Agregar Producto</title>
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
        <h1>Agregar Producto</h1>
    </div>
    <div class="datosproducto">
         <!-- Formulario para el agregar un producto -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <div class="form-group">
                <label>Nombre del Producto:</label>     
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="form-group">
                <label>Cantidad:</label>
                <input type="number" min="0" class="form-control" name="cantidad" required> </div> <br>
            <div class="form-button">
                <button type="submit" id="evento_agregar" name="evento_agregar" class="modifybtn" style="float:right">Agregar</button>
                <a name="" id="" class="return" href="index.php" role="button" style="float:left">Volver</a>
            </div>
        </form>
    </div>  
</body>
</html>