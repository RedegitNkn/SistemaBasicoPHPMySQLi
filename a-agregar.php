<?php
    if(isset($_POST['submit'])){
        include_once 'conexion.php';
        $sql = "INSERT INTO productos (producto, descripcion, compra, venta, existencia) VALUES (?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conexion);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"ssiii",$_POST['nombre'], $_POST['descripcion'], $_POST['pcompra'], $_POST['pventa'], $_POST['existencias']);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo "<font face='Segoe UI'><h3>Producto agregado... <a href='agregar.php'><i>Haga click aquí para continuar</i></a></h3></font>";
    }
    else{
        header('Location : principal.php');
    }
?>