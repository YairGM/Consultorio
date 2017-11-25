<?php
session_start();
include 'head.php';
include 'header.php';
include 'footer.php';
echo "Bienvenido " . $_SESSION['usuario'];
?>
<h2>Registro de ingresos</h2>
<center>
	<form method="POST" action="registrai.php">   
	<input type="text" style="width:400px;" name="idingreso" placeholder="Clave" /> 
	<br />
	<input type="text" style="width:400px;" name="folio" placeholder="Folio receta" />
	<br/>
    <input type="text" style="width:400px;" name="servicio" placeholder="Concepto" />
	<br />
	<input type="text" style="width:400px;" name="cantidad" placeholder="Cantidad" />
	<br />
	<button type="submit" style="width:400px;">Guardar ingreso</button></p>     
	</form> 
	<form method="POST" action="contenido.php">
		<button type="submit" style="width:400px;background-color:#4db8ff;">Volver al menú</button>
	</form>
</center>
