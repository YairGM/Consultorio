<?php
include 'head.php';
include 'header.php';
include 'footer.php';
?>
<?php 
echo "Bienvenido " . $_SESSION['usuario'];
// Recibimos por POST los datos procedentes del formulario 
$ingre = $_POST['idingres'];   
$ingreso = strip_tags($ingre); // Asi recogemos el nombre desde el formulario 
$n_ingre = strlen($ingreso); 

$foli = $_POST['foli'];   
$folio = strip_tags($foli); // Asi recogemos el nombre desde el formulario 
$n_folio = strlen($folio); 

function pg_connection_string_from_database_url() {
    extract(parse_url($_ENV["DATABASE_URL"]));
    return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
    }
    $pg_conn = pg_connect(pg_connection_string_from_database_url());
     
  $sql="INSERT INTO usuario (idv,folioreceta) VALUES ('$ingre','$foli')";


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