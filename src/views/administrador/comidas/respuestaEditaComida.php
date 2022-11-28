<?php
include("../../../config/conexion.php");
?>

<?php
if(isset($_POST['update'])){

    $cod_comida = $_GET['cod_comida'];
 $nombre_comida = $_POST['nombrecomida'];
 $tipo_comida = $_POST['tipocomida'];
 $precio_comida = $_POST['preciocomida'];

 $file = $_FILES["fotocomida"]["name"]; //Nombre de nuestro archivo

 $url_temp = $_FILES["fotocomida"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 
 
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
 

 

    $query = "UPDATE comidas
    SET nombre_comida = '$nombre_comida',
    tipo = '$tipo_comida',
    precio = '$precio_comida',
    foto = '$url_target'
    WHERE cod_comida = '$cod_comida'";


$result = mysqli_query($conn, $query);
header("Location: listarcomidas.php");


}

?>