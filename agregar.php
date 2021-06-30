<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset='utf-8'>
	<meta name='author' content='Rios Osuna Jesus Ramon, yisusosuna.47@outlook.com'>
	<meta name='description' content='Proyecto Final'>
	<meta name='generator' content='Visual Studio Code'>
	<meta name='keywords' content='Proyecto,final,desarrollo,web,1'>
	<title>Agregar productos</title>
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
						<a class="nav-link" aria-current="page" href="principal.php">Consultar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Agregar</a>
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
	<div class="container">
	<form method="POST" action="a-agregar.php" class="row g-3 justify-content-center">
	<h3>Agregar productos</h3>
		<div class="col-md-6 col-sm-9">
			<label for="nombre" class="form-label">Nombre del producto:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" required>
		</div>
		<div class="w-100"></div>
		<div class="col-md-2 col-sm-3">
			<label for="pcompra" class="form-label">Precio compra:</label>
			<input type="number" class="form-control" id="pcompra" name="pcompra" required>
		</div>
		<div class="col-md-2 col-sm-3">
			<label for="pventa" class="form-label">Precio venta:</label>
			<input type="number" class="form-control" id="pventa" name="pventa" required>
		</div>
		<div class="col-md-2 col-sm-3">
			<label for="existencias" class="form-label">Existencias:</label>
			<input type="number" class="form-control" id="existencias" name="existencias" required>
		</div>
		<div class="w-100"></div>
		<div class="col-md-6 col-sm-9">
			<label for="descripcion" class="form-label">Descripción:</label>
			<textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
		</div>
		<div class="w-100"></div>
		<div class="col-md-2 col-sm-6">
			<input type="submit" class="btn btn-secondary" name="submit" value="Agregar producto a la lista">
		</div>
	</form>
	</div>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>