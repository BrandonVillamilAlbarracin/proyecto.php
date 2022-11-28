<?php
include("../../../config/conexion.php");
?>
<?php
include("../../../includes/header.php");
?>
<?php include("../../../includes/navbar.php") ?>
<a href="../administrador.php"><i class="bi bi-caret-left-square-fill m-3"
        style="font-size: 50px; color: black;"></i></a>

<body>

    <div class="container" style="font-family: 'Handlee', cursive;">
        <a class="btn btn-primary" href="../cocineros/crearcocinero.php">Agregar Cocinero</a>

        <table class="table table-striped">
            <thead>
                <th>documento cocinero</th>
                <th>Nombre </th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Edad</th>
                <th>Nit Restaurante</th>
                <th>Foto</th>

            </thead>

            <tbody>
                <?php
            $query = "SELECT * FROM empleados where tipo='cocinero'";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>

                <tr>
                    <td>
                        <?php echo $row['documento_empleado'] ?>
                    </td>
                    <td>
                        <?php echo $row['nombres'] ?>
                    </td>
                    <td>
                        <?php echo $row['primer_apellido'] ?>
                    </td>
                    <td>
                        <?php echo $row['segundo_apellido'] ?>
                    </td>
                    <td>
                        <?php echo $row['fecha_nacimiento'] ?>
                    </td>
                    <td>
                        <?php echo $row['nit_restaurante'] ?>
                    </td>
                    <td>
                        <img class="img-fluid" style="height:100px ; width: 100px" src="<?php echo $row['foto'] ?>"
                            alt="<?php echo $row['nombres'] ?>">
                    </td>
                    <td>
                        <a href="editarCocinero.php?documento_empleado=<?php echo $row['documento_empleado'] ?> "
                            class="text-decoration-none" style="font-size:30px; color: black;"><i
                                class="bi bi-pen"></i></a>
                        <a href="eliminarCocinero.php?documento_empleado=<?php echo $row['documento_empleado'] ?>"
                            class="text-decoration-none" style="font-size:30px; color: black;"><i
                                class="bi bi-trash2"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <br />
        <br />
    </div>


</body>
<?php include("../../../includes/footer.php") ?>