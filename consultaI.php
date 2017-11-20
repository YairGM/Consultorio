<?php
session_start();
include 'head.php';
include 'header.php';
include 'footer.php';
echo "Bienvenido " . $_SESSION['usuario'];

?>
<h2>Consulta de ingresos</h2>

<body>  
<div align='center'>  
  <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'>  
    <tr>  
      <td width='150' style='font-weight: bold'>ID</td>  
      <td width='150' style='font-weight: bold'>NOMBRE</td>  
      <td width='150' style='font-weight: bold'>cantidad.</td>  
      <td width='150' style='font-weight: bold'></td>  
    </tr>  
<?php  
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
$pg_conn = pg_connect(pg_connection_string_from_database_url());

$result = pg_query($pg_conn, "SELECT * FROM usuario ");     // Esta linea hace la consulta 

    while ($registro = mysql_fetch_array($result)){  
echo "  
    <tr>  
      <td width='150'>".$registro['id']."</td>  
      <td width='150'>".$registro['nombre']."</td>  
      <td width='150'>".$registro['cantidad']."</td>  
      <td width='150'></td>  

    </tr> ";  
}  
pg_close($pg_conn); 
?>  
   </table>  
</div>  
</body>  

</html> 