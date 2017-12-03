<?php
include 'head.php';
include 'header.php';
include 'footer.php';
?>
<?php 
echo "Bienvenido " . $_SESSION['usuario'];
$permitidos = '/^[A-Z üÜáéíóúÁÉÍÓÚñÑ]{1,50}$/i';

// Recibimos por POST los datos procedentes del formulario 
$noreceta = $_POST['norec'];   
$receta = strip_tags($noreceta); // Asi recogemos el nombre desde el formulario 
$n_receta = strlen($receta); 

$nombrepac = $_POST['nombrep'];   
$nombrepaciente = strip_tags($nombrepac); // Asi recogemos el nombre desde el formulario 
$n_paciente = strlen($nombrepaciente);    // Contamos el numero de caracteres 

 if (preg_match($permitidos,$nombrepac))
          {
                return false; // Campo permitido 
          } 
          else 
          { 
                echo " 
                    <h2>
                    El nombre solo acepta letras.<br /> 
                    <a href=\"consulta.php\">Volver</a>
                    </h2>";
                return true; // Error uno de los caracteres no hace parte de la expresión regular 
          } 

$ap = $_POST['ap'];   
$apellidop = strip_tags($ap); // Asi recogemos el nombre desde el formulario 
$n_ap = strlen($apellidop); 

if (preg_match($permitidos,$ap))
          {
                return false; // Campo permitido 
          } 
          else 
          { 
                echo " 
                    <h2>
                    El campo apellido paterno solo acepta letras.<br /> 
                    <a href=\"consulta.php\">Volver</a>
                    </h2>";
                return true; // Error uno de los caracteres no hace parte de la expresión regular 
          } 

$am = $_POST['am'];   
$apellidom = strip_tags($am); // Asi recogemos el nombre desde el formulario 
$n_am = strlen($apellidom); 

if (preg_match($permitidos,$am))
          {
                return false; // Campo permitido 
          } 
          else 
          { 
                echo " 
                    <h2>
                    El campo apellido materno solo acepta letras.<br /> 
                    <a href=\"consulta.php\">Volver</a>
                    </h2>";
                return true; // Error uno de los caracteres no hace parte de la expresión regular 
          } 

$edad = $_POST['edad'];            // Asi recogemos el email desde el formulario 
     if (!is_numeric($edad)) { 
        echo " 
                    <h2>
                    El campo edad solo acepta numeros.<br /> 
                    <a href=\"consulta.php\">Volver</a>
                    </h2>";
    }  
    else {
        echo "Son numeros";
    }

$peso = $_POST['peso'];            // Asi recogemos el email desde el formulario 
     if (!is_numeric($peso)) { 
        echo " 
                    <h2>
                    El campo peso solo acepta numeros.<br /> 
                    <a href=\"consulta.php\">Volver</a>
                    </h2>";
    }  
    else {
        echo "Son numeros";
    }

$aler = $_POST['alergias'];   
$alergiasa = strip_tags($aler); // Asi recogemos el nombre desde el formulario 
$n_aler = strlen($alergiasa); 
    
$dconsulta = $_POST['consulta'];   
$deconsulta = strip_tags($dconsulta); // Asi recogemos el nombre desde el formulario 
$n_consulta = strlen($deconsulta); 

$total_car = $n_receta * $n_paciente* $n_ap * $n_am * $edad * $peso * $n_aler * $n_consulta;    // Si alguno de ellos vale 0, $total_car valdrá 0 

if ($total_car >= 1) {  
    // Abrimos la conexion a la base de datos 
    function pg_connection_string_from_database_url() {
    extract(parse_url($_ENV["DATABASE_URL"]));
    return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
    }
    $pg_conn = pg_connect(pg_connection_string_from_database_url());
     
  $sql="INSERT INTO paciente (receta,paciente,ap,am,edad,peso,alegias,consulta) VALUES ('$noreceta','$nombrepac','$ap', '$am', '$edad', '$peso', '$aler', '$dconsulta')";


  if (pg_query($pg_conn,$sql)) {
            echo "Data entered successfully. ";
            pg_close($pg_conn);
            echo " 
        <h2>
        <p>Los datos han sido guardados con exito.</p> 
     
        <p><a href='consulta.php'>VOLVER ATRÁS</a></p> 
     
        <p><a href='consultaP.php' title='Clic aquí'>Ver los resgistros guardados</a></p> 
        </h2>";
        }
        else {
            echo "Data entry unsuccessful. ";
        }
  
        
}else{
    echo " 
    <h2>
    Se deben llenar todos los campos.<br /> 
    <a href=\"consulta.php\">Volver</a>
    </h2>"; 
    
    exit();
} 
?> 
