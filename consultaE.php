<?php
session_start();
include 'head.php';
include 'header.php';
include 'footer.php';
echo "Bienvenido " . $_SESSION['usuario'];
echo "\nConsulta de egresos";
?>
<h2>Consulta de egresos</h2>

<body>  
<div align='center'>  
  <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'>  
    <tr>  
      <td width='150' style='font-weight: bold'>ID</td>  
      <td width='150' style='font-weight: bold'>CONCEPTO</td>  
      <td width='150' style='font-weight: bold'>CANTIDAD</td>  
      <td width='150' style='font-weight: bold'>FECHA</td>  
    </tr>  
<?php  
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
$pg_conn = pg_connect(pg_connection_string_from_database_url());

$result = pg_query($pg_conn, "SELECT * FROM egreso ");     // Esta linea hace la consulta 

if (!pg_num_rows($result)) {
  print("No hay datos\n");
} else {
	while ($row = pg_fetch_row($result)) {
	    echo "<tr>";
	    echo "<td>" . $row[0] . "</td>";
	    echo "<td>" . htmlspecialchars($row[1]) . "</td>";
	    echo "<td>" . htmlspecialchars($row[2]) . "</td>";
	    echo "<td>" . htmlspecialchars($row[3]) . "</td>";
	    echo "</tr>";
	}
}
pg_close($pg_conn); 
?>  
   </table>  
   <form method="POST" action="egresos.php">
		<button type="submit">Registro de egresos</button>
	</form>
	<form method="POST" action="contenido.php">
		<button type="submit">Volver al menú</button>
	</form>
</div>  
</body>  

</html> 