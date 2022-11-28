<?php
include("../../../config/conexion.php");
?>

<?php
 $nombre_bebida = $_POST['nombrebebida'];
 $tipo_bebida = $_POST['tipobebida'];
 $precio_bebida = $_POST['preciobebida'];
//  $foto_bebida = $_post['campofotobebida'];

 //consulta
 $file = $_FILES["fotobebida"]["name"]; //Nombre de nuestro archivo

$url_temp = $_FILES["fotobebida"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

$url_insert =  "../../../images"; //Carpeta donde subiremos nuestros archivos

//Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
$url_target = str_replace('\\', '/', $url_insert) . '/' . $file;
echo $url_target;

//Si la carpeta no existe, la creamos
if (!file_exists($url_insert)) {
    mkdir($url_insert, 0777, true);
};

//movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
if (move_uploaded_file($url_temp, $url_target)) {
    echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
} else {
    echo "Ha habido un error al cargar tu archivo.";
}

 //consulta


  $sql = "INSERT INTO bebidas(nombre_bebida, tipo, precio, foto)
  VALUES ('$nombre_bebida','$tipo_bebida','$precio_bebida','$url_target')";

  //EJECUTAR SQL

  $result = mysqli_query($conn,$sql);

  //redireccion a listar ciudades 
  header("Location: listarbebidas.php");
?>