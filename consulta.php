<?php
session_start();
include 'head.php';
include 'header.php';
include 'footer.php';
echo "Bienvenido " . $_SESSION['usuario'];
?>
<h2>Registro de ingresos</h2>
<center>
	<form method="POST" action="registracon.php">   
	<input type="text" style="width:400px;" name="norec" placeholder="Folio receta" /> 
	<br />
	<input type="text" style="width:400px;" name="nombrep" placeholder="Nombres del paciente" />
	<br/>
    <input type="text" style="width:400px;" name="ap" placeholder="Apellido paterno" />
	<br />
	<input type="text" style="width:400px;" name="am" placeholder="Apellido materno" />
	<br />
	<input type="text" style="width:400px;" name="edad" placeholder="Edad" />
	<br />
	<input type="text" style="width:400px;" name="peso" placeholder="Peso" />
	<br />
	<input type="text" style="width:400px;" name="alergias" placeholder="Alergias" />
	<br />
	<input type="text" style="width:400px;" name="consulta" placeholder="Detalle consulta" />
	<br />
	<button type="submit" style="width:400px;">Guardar consulta</button></p>     
	</form> 
	<form method="POST" action="contenido.php">
		<button type="submit" style="width:400px;">Volver al menú</button>
	</form>
</center>
