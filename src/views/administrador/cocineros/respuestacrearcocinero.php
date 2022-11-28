<?php
include("../../../config/conexion.php");
?>

<?php
$documento = $_POST['documentococinero'];
$nombre_cocinero = $_POST['nombrecocinero'];
$primer_apellido_cocinero = $_POST['primerapellido'];
$segundo_apellido_cocinero = $_POST['segundoapellido'];
$fecha_nacimiento = $_POST['fechanacimiento'];
$nit_restaurante = $_POST['nitrestaurante'];
$tipo = $_POST['tipo'];
//  $foto = $_POST['fotomesero'];
//  $foto_bebida = $_post['campofotobebida'];

//consulta
$file = $_FILES["fotococinero"]["name"]; //Nombre de nuestro archivo

$url_temp = $_FILES["fotococinero"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

$url_insert = "../../../images"; //Carpeta donde subiremos nuestros archivos

//Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
$url_target = str_replace('\\', '/', $url_insert) . '/' . $file;
echo $url_target;

//Si la carpeta no existe, la creamos
if (!file_exists($url_insert)) {
    mkdir($url_insert, 0777, true);
}
;

// $fechaActual = date('d-m-Y');

//   echo $fechaActual;

// $edad = $fechaActual-$fecha_nacimiento;

//movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
if (move_uploaded_file($url_temp, $url_target)) {
    echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
} else {
    echo "Ha habido un error al cargar tu archivo.";
}

//consulta


$sql = "INSERT INTO empleados(documento_empleado, nombres, primer_apellido, segundo_apellido, fecha_nacimiento, nit_restaurante, foto, tipo)
  VALUES ('$documento','$nombre_cocinero','$primer_apellido_cocinero','$segundo_apellido_cocinero','$fecha_nacimiento','$nit_restaurante','$url_target', '$tipo')";

//EJECUTAR SQL

$result = mysqli_query($conn, $sql);

//redireccion a listar ciudades 
header("Location: listarcocineros.php");
?>