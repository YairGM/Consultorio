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
    <input type="text" name="servicio" placeholder="Servicio" />
	<br />
	<input type="text" name="cantidad" placeholder="Cantidad" />
	<br />
	<button type="submit">Guardar ingreso</button>1"></p>    
	</form> 
</center>
