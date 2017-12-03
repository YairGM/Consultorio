<!DOCTYPE html>
<?php include 'head.php';
include 'header.php';
include 'footer.php';?>
<html>
<head>
    <meta charset="utf-8">
    <title>Consultorio medico</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">

</head>
<body>

    <div class="container">
		<h2>Iniciar sesión</h2>
	<center>
		<form method="POST" action="validar.php">
			<input type="text" style="width:400px;" name="nnombre" placeholder="Usuario" />
			<br/>
			<input type="password" style="width:400px;" name="npassword" placeholder="Contraseña" />
			<br/>
			<button type="submit" style="width:400px;">Iniciar Sesión</button>
		</form>
	</center>
    </div>
</body>
</html>>
