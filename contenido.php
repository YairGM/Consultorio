<?php

session_start();

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
        <div class="page-header">
            <h2>
                Consultorio medico
            </h2>
        </div>
        <div class="Menu">
        <ul>
            <li><a href=".php"></a></li>
            <li><a href="#alta"></a></li>
            <li><a href="#consulta"></a></li>
        </ul>
        </div>
	<center>
	<h2>
<?php
	echo "Bienvenido " . $_SESSION['usuario'];
?>
	</h2>
		<form method="POST" action="Ingresos.php">
			<button type="submit">Registro Ingresos</button>
		</form>
		<form method="POST" action="Egresos.php">
			<button type="submit">Registro Egresos</button>
		</form>
		<form method="POST" action="consultaI.php">
			<button type="submit">Consulta Ingresos</button>
		</form>
		<form method="POST" action="consultaE.php">
			<button type="submit">Consulta Egresos</button>
		</form>
	</center>
	 <div class="footer">
      <p>Hecho con ❤</p>
     </div>
    </div>
</body>
</html>>
