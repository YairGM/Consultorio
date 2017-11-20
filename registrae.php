<?php
include 'head.php';
include 'header.php';
include 'footer.php';
?>
<?php 
echo "Bienvenido " . $_SESSION['usuario'];
// Recibimos por POST los datos procedentes del formulario 
$ingr = $_POST['idengreso'];   
$ingres = strip_tags($ingr); // Asi recogemos el nombre desde el formulario 
$n_ingre = strlen($ingres); 

$conce= $_POST['concepto'];   
$concepto = strip_tags($conce); // Asi recogemos el nombre desde el formulario 
$n_conc = strlen($concepto);    // Contamos el numero de caracteres 

$cant = $_POST['cantidad'];            // Asi recogemos el email desde el formulario 
     if (!is_numeric($cant)) { 
        echo "No son numeros"; 
    }  
    else {
        echo "Son numeros";
    }
$fecha = date("d-m-Y");        // Asi recogemos la fecha 
     // Asi recogemos la hora 

$total_car = $n_ingre * $n_conce* $cant;    // Si alguno de ellos vale 0, $total_car valdrá 0 

if ($total_car >= 1) {  
    // Abrimos la conexion a la base de datos 
    function pg_connection_string_from_database_url() {
    extract(parse_url($_ENV["DATABASE_URL"]));
    return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
    }
    $pg_conn = pg_connect(pg_connection_string_from_database_url());
     
  $pgsql="INSERT INTO egreso (id,concepto,cantidad,fecha) VALUES ('$ingr','$conce', '$cant', '$fecha')";


  if (pg_query($pg_conn,$pgsql)) {
            echo "Data entered successfully. ";
        }
        else {
            echo "Data entry unsuccessful. ";
        }

  pg_close($pg_conn);
  
        echo " 
        <h2>
        <p>Los datos han sido guardados con exito.</p> 
     
        <p><a href='egresos.php'>VOLVER ATRÁS</a></p> 
     
        <p><a href='consultaE.php' title='Clic aquí'>Ver los resgistros guardados</a></p> 
        </h2>";
}else{
    echo " 
    <h2>
    Los campos <b>nombre</b> y <b>cantidad</b> no pueden estar vacios.<br /> 
    <a href=\"ingresos.php\">Volver</a>
    </h2>"; 
    
    exit();
} 
?> 
