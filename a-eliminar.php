<?php
    if (isset($_GET['id'])){
        include_once "conexion.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM productos WHERE idproductos = $id";
        if(mysqli_query($conexion, $sql)){                   
            echo "<font face='Segoe UI'><h3>Producto eliminado... <a href='productos.php'><i>Haga click aquí para continuar</i></a></h3></font>";
        }
        mysqli_close($conexion);
    }
    else{
        header('Location : principal.php');
    }
?>