<?php
    session_start();//Inicio sesion
    $productos = $_SESSION['productos'];//Guardo el array de productos de la memoria
    $borrar_id = $_GET['id'];//Guardo el array de id de la memoria
    //Elimino el subarray con index id
    unset($productos[$borrar_id]);
    //Guardo el array modificado en la memoria de sesion
    $_SESSION['productos'] = $productos;
    //Ejecuto la alerta
    echo "<script>alert('El Producto se ha eliminado exitosamente!')</script>";        
    header("Refresh: 0 , url =index.php");// Direcciono a la pantalla index.php
    exit();
?>