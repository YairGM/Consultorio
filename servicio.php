<?php
session_start();
include 'head.php';
include 'header.php';
include 'footer.php';
echo "Bienvenido " . $_SESSION['usuario'];
?>
<h2>Registro de servicios</h2>

<center>
	<form method="POST" action="consulta.php">   
	<button type="submit" style="width:400px;">Registro Consulta</button>
	<br />
  	</form>
  	<form method="POST" action="ingresos.php">   
	<button type="submit" style="width:400px;">Registro Venta</button>
	<br/>
	</form> 
	<form method="POST" action="contenido.php">
	<button type="submit" style="width:400px;background-color:#4db8ff;">Volver al menú</button>
	</form>
</center>


