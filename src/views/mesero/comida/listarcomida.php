<?php
include("../../../config/conexion.php");
?>
<?php
include("../../../includes/header.php");
?>
<?php include("../../../includes/navbar.php") ?>

<br />
<div class="container">

    <table class="table" style="font-family: 'Handlee', cursive;">
        <thead class="table-dark"   >
            <th>Cantidad </th>
            <th>Cod_comida </th>
            <th>Nombre comida</th>
            <th>Descripcion</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Foto</th>

        </thead>

        <tbody >
            <?php
            $query = "SELECT * FROM comidas";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>

            <tr >
                <td class="text">
                    <input class="col-4" type="number">

                </td>
                <td>
                    <?php echo $row['cod_comida'] ?>
                </td>
                <td>
                    <?php echo $row['nombre_comida'] ?>
                </td>
                 <td>
                 <form action="respues"> <input type="text"></form>
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
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a style="font-family: 'Handlee', cursive;" class="btn btn-primary float-end " href="./crearcomidas.php">Confirmar</a>


    <br />
    <br />


</div>
<?php include("../../../includes/footer.php") ?>