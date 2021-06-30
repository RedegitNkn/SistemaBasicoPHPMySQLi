<?php 
    //-- Escribir la credenciales necesarias y la dirección del servidor--//
    $usuario = "";
    $pass = "";
    $server = "";
    $db = "evaluacion";
    $conexion= mysqli_connect($server,$usuario,$pass,$db);
      if (!$conexion) {
      	die("Conexion fallida: ". mysqli_connect_error());
      }
?>
