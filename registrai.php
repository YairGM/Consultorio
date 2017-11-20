<?php
echo "hola";
?>
<?php 
echo "Bienvenido " . $_SESSION['usuario'];
// Recibimos por POST los datos procedentes del formulario 
$ingre = $_POST['idingreso'];   
$ingreso = strip_tags($ingre); // Asi recogemos el nombre desde el formulario 
$n_ingre = strlen($ingreso); 

$servi = $_POST['servicio'];   
$servicio = strip_tags($servi); // Asi recogemos el nombre desde el formulario 
$n_servi = strlen($servicio);    // Contamos el numero de caracteres 

$canti = $_POST['cantidad'];            // Asi recogemos el email desde el formulario 
     if (!is_numeric($canti)) { 
        echo "No son numeros"; 
    }  
    else {
        echo "Son numeros";
    }
$fecha = date("d-m-Y");        // Asi recogemos la fecha 
     // Asi recogemos la hora 

$total_car = $n_servi * $canti* $n_ingre;    // Si alguno de ellos vale 0, $total_car valdrá 0 

if ($total_car >= 1) {  
    // Abrimos la conexion a la base de datos 
    function pg_connection_string_from_database_url() {
    extract(parse_url($_ENV["DATABASE_URL"]));
    return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
    }
    $pg_conn = pg_connect(pg_connection_string_from_database_url());
     
  $sql="INSERT INTO ingreso (id,nombre,cantidad,fecha) VALUES ('$ingre','$servi', '$canti', '$fecha')";
  pg_query($pg_conn, $sql);

  if (pg_query($pg_conn,$sql)) {
            echo "Data entered successfully. ";
        }
        else {
            echo "Data entry unsuccessful. ";
        }

  pg_close($pg_conn);
  
        echo " 
        <p>Los datos han sido guardados con exito.</p> 
     
        <p><a href='ingresos.php'>VOLVER ATRÁS</a></p> 
     
        <p><a href='consultaI.php' title='Clic aquí'>Ver los resgistros guardados</a></p> ";
        
}else{
    echo " 
    Los campos <b>nombre</b> y <b>cantidad</b> no pueden estar vacios.<br /> 
    <a href=\"ingresos.php\">Volver</a>"; 
    echo "El usuario no existe";
    exit();
} 
?> 
