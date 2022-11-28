<?php
include("../../../config/conexion.php");
?>

<?php
 $documento = $_POST['documentomesero'];
 $nombre_mesero = $_POST['nombremesero'];
 $primer_apellido_mesero = $_POST['primerapellido'];
 $segundo_apellido_mesero = $_POST['segundoapellido'];
 $fecha_nacimiento = $_POST['fechanacimiento'];
 $nit_restaurante = $_POST['nitrestaurante'];
 $tipo = $_POST['tipo'];
//  $foto = $_POST['fotomesero'];
//  $foto_bebida = $_post['campofotobebida'];

 //consulta
 $file = $_FILES["fotomesero"]["name"]; //Nombre de nuestro archivo

$url_temp = $_FILES["fotomesero"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

$url_insert =  "../../../images"; //Carpeta donde subiremos nuestros archivos

//Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
$url_target = str_replace('\\', '/', $url_insert) . '/' . $file;
echo $url_target;

//Si la carpeta no existe, la creamos
if (!file_exists($url_insert)) {
    mkdir($url_insert, 0777, true);
};

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
  VALUES ('$documento','$nombre_mesero','$primer_apellido_mesero','$segundo_apellido_mesero','$fecha_nacimiento','$nit_restaurante','$url_target', '$tipo')";

  //EJECUTAR SQL

  $result = mysqli_query($conn,$sql);

  //redireccion a listar ciudades 
  header("Location: listarmeseros.php");
?>