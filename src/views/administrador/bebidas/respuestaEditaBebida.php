<?php
include("../../../config/conexion.php");
?>

<?php
if(isset($_POST['update'])){

    $cod_bebida = $_GET['cod_bebida'];
 $nombre_bebida = $_POST['nombrebebida'];
 $tipo_bebida = $_POST['tipobebida'];
 $precio_bebida = $_POST['preciobebida'];

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
 

 

    $query = "UPDATE bebidas
    SET nombre_bebida = '$nombre_bebida',
    tipo = '$tipo_bebida',
    precio = '$precio_bebida',
    foto = '$url_target'
    WHERE cod_bebida = '$cod_bebida'";


$result = mysqli_query($conn, $query);
header("Location: listarbebidas.php");


}

?>