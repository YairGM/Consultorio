<?php

session_start();

echo "Bienvenido " . $_SESSION['usuario'];

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
		<form method="POST" action="validar.php">
			<button type="submit">Registro Ingresos</button>
		</form>
		<form>
			<button type="submit">Registro Egresos</button>
		</form>
		<form>
			<button type="submit">Consulta Ingresos</button>
		</form>
		<form>
			<button type="submit">Consulta Egresos</button>
		</form>
	</center>
	 <div class="footer">
      <p>Hecho con ❤</p>
     </div>
    </div>
</body>
</html>>
