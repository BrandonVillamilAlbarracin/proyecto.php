<?php include("../../../config/conexion.php") ?>
<?php include("../../../includes/header.php") ?>

<?php
include("../../../includes/navbar.php");
?>


<body style="font-family: 'Handlee', cursive;">
<a href="./listarbebidas.php"><i class="bi bi-caret-left-square-fill m-3" style="font-size: 50px; color: black;"></i></a>
    <form class="form" enctype="multipart/form-data"
        action="./respuestaEditaBebida.php?cod_bebida=<?php echo $_GET['cod_bebida'] ?>" method="post">
        <div class="form-row align-items-center m-5">
            <h2>Editar Bebida</h2>

            <output>Nombre:
                <br />
                <input type="text" placeholder="Escriba un nombre" id="nombrebebida" name="nombrebebida"></input>
            </output>

            <br />
            <br />

            <output>Tipo:
                <br />
                <input class="form-control" type="text" placeholder="Tipo de bebida" id="tipobebida"
                    name="tipobebida"></input>
            </output>


            <br />
            <br />

            <output>Precio:
                <br />
                <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input class="form-control" type="number" placeholder="precio de la bebida" id="preciobebida"
                    name="preciobebida"></input>
                </div>
            </output>

            <br />
            <br />

            <output>Foto:
                <br />
                <input class="form-control" type="file" placeholder="Foto de la bebida" id="fotobebida"
                    name="fotobebida"></input>
            </output>

            <br />
            <br />
            <button class="btn btn-primary" type=" submit" name="update"> Registrar </button>
        </div>
    </form>
</body>
<?php include("../../../includes/footer.php") ?>