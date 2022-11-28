<?php include("../../../config/conexion.php")?>

<?php

$cod_comida = $_GET['cod_comida'];

//consulta sql
$sql= "DELETE FROM comidas WHERE cod_comida = '$cod_comida'";

// ejecutar sql

$result = mysqli_query($conn, $sql);

header("Location: listarcomidas.php")
?>