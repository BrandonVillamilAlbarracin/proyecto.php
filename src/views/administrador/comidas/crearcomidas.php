<?php
include("../../../config/conexion.php");
?>
<?php
include("../../../includes/header.php");
?>
<?php
include("../../../includes/navbar.php");
?>


<body style="font-family: 'Handlee', cursive;">
<a href="./listarcomidas.php"><i class="bi bi-caret-left-square-fill m-3" style="font-size: 50px; color: black;"></i></a>
    <form enctype="multipart/form-data" class="form" action="./respuestacrearcomida.php" method="post">
        <div class="form-row align-items-center m-5">

            <h2>Nueva Comida</h2>

            <output>Nombre:
                <br />
                <input class="form-control" type="text" placeholder="Nombre de la comida" id="camponombrecomida"
                    name="nombrecomida"></input>
            </output>

            <br />
            <br />

            <output>Descripcion:
                <br />
                <input class="form-control" type="text" placeholder="Descripcion de la comida" id="descripcioncomida"
                    name="descripcioncomida"></input>
            </output>

            <br />
            <br />

            <output>Tipo:
                <br />
                <input class="form-control" type="text" placeholder="Tipo de comida" id="tipocomida"
                    name="tipocomida"></input>
            </output>

            <br />
            <br />

            <output>Precio:
                <br />
                <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input class="form-control" type="number" placeholder="precio de la comida" id="preciocomida"
                    name="preciocomida"></input>
                </div>
            </output>

            <br />
            <br />

            <output>Foto:
                <br />
                <input class="form-control" type="file" placeholder="Foto de la comida" id="fotocomida"
                    name="fotocomida"></input>
            </output>



            <br />
            <br />
            <button class="btn btn-primary" type=" submit"> Registrar </button>
        </div>
    </form>
</body>
<?php include("../../../includes/footer.php") ?>