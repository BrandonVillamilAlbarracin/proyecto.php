<?php include("../../../config/conexion.php")?>

<?php

$documento_empleado = $_GET['documento_empleado'];

//consulta sql
$sql= "DELETE FROM empleados WHERE documento_empleado = '$documento_empleado'";

// ejecutar sql

$result = mysqli_query($conn, $sql);

header("Location: listarcocineros.php")
?>