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
        <a class="btn btn-primary" href="crearbebidas.php">Agregar Bebida</a>
        <table class="table table-striped">
            <thead>
                <th>Cod_bebida</th>
                <th>Nombre bebida</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Foto</th>
                <th></th>

            </thead>

            <tbody>
                <?php
            $query = "SELECT * FROM bebidas";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>

                <tr>
                    <td>
                        <?php echo $row['cod_bebida'] ?>
                    </td>
                    <td>
                        <?php echo $row['nombre_bebida'] ?>
                    </td>
                    <td>
                        <?php echo $row['tipo'] ?>
                    </td>
                    <td>
                        <?php echo $row['precio'] ?>
                    </td>
                    <td>
                        <img class="img-fluid" style="height:100px ; width: 100px" src="<?php echo $row['foto'] ?>"
                            alt="<?php echo $row['nombre_bebida'] ?>">
                    </td>
                    <td>
                        <a href="editarBebida.php?cod_bebida=<?php echo $row['cod_bebida'] ?> "
                            class="text-decoration-none" style="font-size:30px; color: black;"><i
                                class="bi bi-pen"></i></a>
                        <a href="eliminarBebida.php?cod_bebida=<?php echo $row['cod_bebida'] ?>"
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