<?php
session_start();
include 'head.php';
include 'header.php';
include 'footer.php';;
echo "Bienvenido " . $_SESSION['usuario'];

?>
<h2>Registro de egresos</h2>
<center>
	<form method="POST" action="registrae.php">   
	<input type="text" name="idengreso" placeholder="Clave" /> 
    <input type="text" name="concepto" placeholder="Concepto" />
	<br />
	<input type="text" name="cantidad" placeholder="Cantidad" />

	<br />
	<button type="submit">Guardar egreso</button></p>     
	</form> 
	<form method="POST" action="contenido.php">
		<button type="submit">Volver al menú</button>
	</form>
</center>

