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
$cantida = strip_tags($canti); // Asi recogemos el nombre desde el formulario 
$n_canti = strlen($cantida);
     
$fecha = date("d-m-Y");        // Asi recogemos la fecha 
     // Asi recogemos la hora 

$total_car = $n_ingre * $n_conc* $n_canti;    // Si alguno de ellos vale 0, $total_car valdrá 0 

if ($total_car >= 1) {  
    if (!is_numeric($cant)) { 
        echo " 
                    <h2>
                    El campo cantidad solo acepta numeros.<br /> 
                    <a href=\"egresos.php\">Volver</a>
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
     
  $pgsql="INSERT INTO egreso (id,concepto,cantidad,fecha) VALUES ('$ingr','$conce', '$cant', '$fecha')";


  if (pg_query($pg_conn,$pgsql)) {
            echo "Data entered successfully. ";
            pg_close($pg_conn);
            echo " 
        <h2>
        <p>Los datos han sido guardados con exito.</p> 
     
        <p><a href='egresos.php'>VOLVER ATRÁS</a></p> 
     
        <p><a href='consultaE.php' title='Clic aquí'>Ver los resgistros guardados</a></p> 
        </h2>";
        }
        else {
            echo "Data entry unsuccessful. ";
        } 
    }
    
}else{
    echo " 
    <h2>
    Los campos <b>Clave</b>,<b>Concepto</b> y <b>cantidad</b> no pueden estar vacios.<br /> 
    <a href=\"egresos.php\">Volver</a>
    </h2>"; 
    
    exit();
} 
?> 
