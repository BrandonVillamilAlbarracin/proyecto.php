<?php include("../../../config/conexion.php")?>

<?php

$cod_bebida = $_GET['cod_bebida'];

//consulta sql
$sql= "DELETE FROM bebidas WHERE cod_bebida = '$cod_bebida'";

// ejecutar sql

$result = mysqli_query($conn, $sql);

header("Location: listarbebidas.php")
?>