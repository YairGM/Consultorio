<?php
session_start();
include 'head.php';
include 'header.php';
include 'footer.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Consultorio medico</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">

</head>
<body>

    <div class="container">
    <center>
	<h2>
	<?php
	session_start();
	echo "Bienvenido " . $_SESSION['usuario'];
	?>
	</h2>
		<form method="POST" action="servicio.php">
			<button type="submit">Registro Servicios</button>
		</form>
		<form method="POST" action="ingresos.php">
			<button type="submit" style="width:400px;">Registro Ingresos</button>
		</form>
		<form method="POST" action="egresos.php">
			<button type="submit" style="width:400px;">Registro Egresos</button>
		</form>
		<form method="POST" action="consultaI.php">
			<button type="submit" style="width:400px;">Consulta Ingresos</button>
		</form>
		<form method="POST" action="consultaE.php">
			<button type="submit" style="width:400px;">Consulta Egresos</button>
		</form>
		<form method="POST" action="cerrar.php">
			<button type="submit" style="width:400px;">Cerrar sesion</button>
		</form>
	</center>
    </div>
</body>
</html>>
