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
	<input type="text" style="width:400px;" name="idengreso" placeholder="Clave" /> 
	<br />
    <input type="text" style="width:400px;" name="concepto" placeholder="Concepto" />
	<br />
	<input type="text" style="width:400px;" name="cantidad" placeholder="Cantidad" />

	<br />
	<button type="submit" style="width:400px;">Guardar egreso</button></p>     
	</form> 
	<form method="POST" action="contenido.php">
		<button type="submit" style="width:400px;background-color:#4db8ff;">Volver al menú</button>
	</form>
</center>

