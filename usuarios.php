<?php
session_start();
include 'head.php';
include 'header.php';
include 'footer.php';
echo "Bienvenido " . $_SESSION['usuario'];
?>
<h2>Registro de ingresos</h2>
<center>
	<form method="POST" action="registrau.php">   
	<input type="text" style="width:400px;" name="idingres" placeholder="usuario" /> 
	<br />
	<input type="text" style="width:400px;" name="foli" placeholder="Contraseña" />
	<br>
	<button type="submit" style="width:400px;">Guardar usuario</button></p>     
	</form> 
	<form method="POST" action="contenido.php">
		<button type="submit" style="width:400px;background-color:#4db8ff;">Volver al menú</button>
	</form>
</center>