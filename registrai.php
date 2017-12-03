<?php
include 'head.php';
include 'header.php';
include 'footer.php';
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

$canti = $_POST['cantidad'];
$cantida = strip_tags($canti); // Asi recogemos el nombre desde el formulario 
$n_canti = strlen($cantida);            // Asi recogemos el email desde el formulario 
     
$fecha = date("d-m-Y");        // Asi recogemos la fecha 
     // Asi recogemos la hora 
$foli = $_POST['folio'];   
$folio = strip_tags($foli); // Asi recogemos el nombre desde el formulario 
$n_folio = strlen($folio); 

$total_car = $n_servi * $n_canti* $n_ingre;    // Si alguno de ellos vale 0, $total_car valdrá 0 

if ($total_car >= 1) {  
    if (!is_numeric($canti)) { 
        echo " 
                    <h2>
                    El campo cantidad solo acepta numeros.<br /> 
                    <a href=\"ingresos.php\">Volver</a>
                    </h2>";
                    return true;
    }  
    else {
        echo "Son numeros";
        // Abrimos la conexion a la base de datos 
    function pg_connection_string_from_database_url() {
    extract(parse_url($_ENV["DATABASE_URL"]));
    return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
    }
    $pg_conn = pg_connect(pg_connection_string_from_database_url());
     
  $sql="INSERT INTO venta (idv,folioreceta,concepto,cantidad,fecha) VALUES ('$ingre','$foli','$servi', '$canti', '$fecha')";


  if (pg_query($pg_conn,$sql)) {
            echo "Data entered successfully. ";
        }
        else {
            echo "Data entry unsuccessful. ";
        }

  pg_close($pg_conn);
  
        echo " 
        <h2>
        <p>Los datos han sido guardados con exito.</p> 
     
        <p><a href='ingresos.php'>VOLVER ATRÁS</a></p> 
     
        <p><a href='consultaI.php' title='Clic aquí'>Ver los resgistros guardados</a></p> 
        </h2>";
    }
    
}else{
    echo " 
    <h2>
    Los campos <b>Clave</b>,<b>Concepto</b> y <b>cantidad</b> no pueden estar vacios.<br /> 
    <a href=\"ingresos.php\">Volver</a>
    </h2>"; 
    
    exit();
} 
?> 
