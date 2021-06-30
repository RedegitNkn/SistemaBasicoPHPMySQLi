<?php 
    $usuario = "root";
    $pass = "admin";
    $server = "127.0.0.1";
    $db = "evaluacion";
    $conexion= mysqli_connect($server,$usuario,$pass,$db);
      if (!$conexion) {
      	die("Conexion fallida: ". mysqli_connect_error());
      }
?>