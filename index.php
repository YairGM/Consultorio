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
            <li><a href="#home">Inicio</a></li>
            <li><a href="#alta">Alta</a></li>
            <li><a href="#consulta">Consulta</a></li>
        </ul>
        </div>
        <table>
   <thead>
    <tr>
     <th>Employee ID</th>
     <th>Last Name</th>
     <th>First Name</th>
     <th>Title</th>
    </tr>
   </thead>
   <tbody>
   </tbody>
  </table>
  <h2>LOGIN</h2>

<center>
		<form method="POST" action="validar.php">
			<input type="text" name="nnombre" placeholder="Usuario" />
			<br />
			<input type="password" name="npassword" placeholder="Contraseña" />
			<br />
			<button type="submit">Inicar Sesion</button>
		</form>
	</center>

        <div class="footer">
            <p>Footer</p>
        </div>
    </div>
</body>
</html>>
