<?php
include("../../../config/conexion.php");
?>
<?php
include("../../../includes/header.php");
?>
<?php include("../../../includes/navbar.php") ?>



<body style="font-family: 'Handlee', cursive;">
<a href="./listarmeseros.php"><i class="bi bi-caret-left-square-fill m-3" style="font-size: 50px; color: black;"></i></a>
  

    <form enctype="multipart/form-data" class="form" action="./respuestacrearmesero.php" method="post">
        <div class="form-row align-items-center m-5">

            <h2>Nuevo Mesero</h2>


            <output>Documento:
                <br />
                <input class="form-control" type="number" placeholder="Documento del mesero" id="documentomesero"
                    name="documentomesero"></input>
            </output>

            <br />
            <br />

            <output>Nombre:
                <br />
                <input class="form-control" type="text" placeholder="Nombre del mesero" id="nombremesero"
                    name="nombremesero"></input>
            </output>

            <br />
            <br />

            <output>Primer Apellido:
                <br />
                <input class="form-control" type="text" placeholder="Primer apellido" id="primerapellido"
                    name="primerapellido"></input>
            </output>

            <br />
            <br />

            <output>Segundo Apellido:
                <br />
                <input class="form-control" type="text" placeholder="Segundo apellido" id="segundoapellido"
                    name="segundoapellido"></input>
            </output>

            <br />
            <br />

            <output>Fecha Nacimiento:
                <br />
                <input class="form-control" type="date" placeholder="Fecha Nacimiento" id="fechanacimiento"
                    name="fechanacimiento"></input>
            </output>

            <br />
            <br />

            <output>Nit Restaurante:
                <br />
                <input class="form-control" type="number" placeholder="Fecha Nacimiento" id="nitrestaurante"
                    name="nitrestaurante"></input>
            </output>

            <br />
            <br />

            <output>Foto:
                <br />
                <input class="form-control" type="file" placeholder="Foto del mesero" id="fotomesero"
                    name="fotomesero"></input>
            </output>
            
            <output style="display:none;">Tipo:
                <br />
                <input class="form-control" type="text" placeholder="tipo" id="tipo"
                    name="tipo" value="mesero" readonly></input>
            </output>


            <br />
            <br />
            <button class="btn btn-primary" type=" submit"> Registrar </button>
        </div>
    </form>
</body>
<?php include("../../../includes/footer.php") ?>