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
        <a class="btn btn-primary" href="./crearcomidas.php">Agregar Comida</a>

        <table class="table table-striped">
            <thead>
                <th>Cod_comida </th>
                <th>Nombre comida</th>
                <th>Descripcion</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Foto</th>

            </thead>

            <tbody>
                <?php
            $query = "SELECT * FROM comidas";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>

                <tr>
                    <td>
                        <?php echo $row['cod_comida'] ?>
                    </td>
                    <td>
                        <?php echo $row['nombre_comida'] ?>
                    </td>
                    <td>
                        <?php echo $row['descripcion'] ?>
                    </td>
                    <td>
                        <?php echo $row['tipo'] ?>
                    </td>
                    <td>
                        <?php echo $row['precio'] ?>
                    </td>
                    <td>
                        <img class="img-fluid" style="height:100px ; width:100px" src="<?php echo $row['foto'] ?>"
                            alt="<?php echo $row['nombre_comida'] ?>">
                    </td>
                    <td>
                        <a href="editarcomida.php?cod_comida=<?php echo $row['cod_comida'] ?> "
                            class="text-decoration-none" style="font-size:30px; color: black;"><i
                                class="bi bi-pen"></i></a>
                        <a href="eliminarcomida.php?cod_comida=<?php echo $row['cod_comida'] ?>"
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