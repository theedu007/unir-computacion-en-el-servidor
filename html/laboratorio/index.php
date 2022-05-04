<?php
session_start(); //Inicio sesion
$productos = $_SESSION['productos'];//Guardo el array de la memoria en productos

if ($productos == null) { // Si la lista de productos esta vacia muestro mensaje 
    $mensaje="No se encontraron registros de productos<br>Agrega un producto";
    // Declaro un array productos 
    $productos=array();
}else{// Caso contrario no muestro mensaje
    $mensaje="";
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Inventario de Productos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="faviconconfiguroweb.png">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="header">
        <h3>INVENTARIO DE PRODUCTOS</h3>
    </div>
    <div class="container">
        <h1>Lista de Productos</h1>
        <!-- Muestro mensaje cuando no hay productos registrados -->
        <h3 style="float:center"><?php echo $mensaje ?></h3>
    </div>
    <!-- Tabla de los productos-->
    <div class="table-product">
        <table>
            <tr>
                <th scope="col">Orden</th>
                <th scope="col">Nombre del producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Fecha de registro</th>
                <th colspan="2">Acción</th>
            </tr>
            <tbody>
                <?php
                $idpro = 1;
                $_SESSION['productos'] = $productos;
                if($productos != null){
                    //Muestro los productos en la tabla
                    foreach ($productos as $key => $value) {?>
                        <tr>
                            <td scope="row"><?php echo $idpro ?></td>
                        <?php
                        foreach ($value as $k => $v) {?>
                            <td><?php echo $v ?></td>   
                        <?php
                        }?> <!-- Inserto botones de Editar y Eliminar-->
                            <td class="modify"><a name="edit" id="" class="bfix" href="editar.php?id=<?php echo $key ?>&nombrep=<?php echo $productos[$key]['nombre_prod'] ?>&cantidadp=<?php echo $productos[$key]['cantidad']; ?> " role="button">
                            <i class="fa fa-pencil"></i> Editar</a></td>
                            <td class="borrar"><a name="id" id="" class="btnborrar" href="borrar.php?id=<?php echo $key?>" role="button">
                            <i class="fa fa-trash"></i> Eliminar</a></td>
                        </tr>
                        <?php
                        $idpro += 1;
                    }
                }?>
            </tbody>
        </table>
        <br>
        <!-- Inserto boton de Agregar producto-->
        <a name="" id="" class="Agregarlista" style="float:right" href="agregar.php" role="button"><i class="fa fa-plus"></i> Agregar Producto</a>
    </div>
</body>
</html>