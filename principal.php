<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset='utf-8'>
    <meta name='author' content='Rios Osuna Jesus Ramon, yisusosuna.47@outlook.com'>
    <meta name='description' content='Proyecto Final'>
    <meta name='generator' content='Visual Studio Code'>
    <meta name='keywords' content='Proyecto,final,desarrollo,web,1'>
    <title>Consultar productos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand">Menú Productos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Consultar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="agregar.php">Agregar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="productos.php">Editar/Eliminar</a>
                    </li>
                </ul>
                <span class="navbar-text">Ríos Osuna Jesús Ramón</span>
            </div>
        </div>
    </nav>
    <!-- Página -->
    <div class="row justify-content-center">
        <div class="col-auto">
            <table class="table caption-top table-striped table-bordered table-responsive">
                <caption style="color: black; font-weight: bold; font-size: 25px;">Lista de productos</caption>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Valor de compra</th>
                        <th>Valor de venta</th>
                        <th>Existencias</th>
                    <tr>
                </thead>
                <tbody>
                <?php
                    include_once "conexion.php";
                    $aux = 0;
                    $sql = "SELECT * FROM productos";
                    $resultado = mysqli_query($conexion, $sql);
                    $check = mysqli_num_rows($resultado);
                    
                    if($resultado -> num_rows > 0){
                        while($row = $resultado -> fetch_assoc()){
                            ++$aux;
                            ?>

                            <tr>
                                <td><?php echo $row['idproductos']?></td>
                                <td><?php echo $row['producto']?></td>
                                <td><?php echo $row['descripcion']?></td>
                                <td><?php echo $row['compra']?></td>
                                <td><?php echo $row['venta']?></td>
                                <td><?php echo $row['existencia']?></td>
                            </tr>

                        <?php
                        }
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><b>Total</b></td>
                        <td><?php echo $aux?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>