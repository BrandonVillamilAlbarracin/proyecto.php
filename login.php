<?php include("./src/includes/header.php") ?>
<?php include("./src/includes/navbar.php") ?>


<body style="background-color: #f5f5f5">
<a href="./index.php"><i class="bi bi-caret-left-square-fill m-3" style="font-size: 50px; color: black;"></i></a>
    <div class="container-fluid d-flex justify-content-center">
        <div>
            
            <img style="height:300px ; width: 300px" src="./src/images/logo2.jpg" class="rounded mx-auto d-block"
                alt="<?php echo "foto" ?>">
            </br>
            <p class="text-center" style="font-family: 'Handlee', cursive;">Bienvenido al Trabajo, Selecciona tu puesto.
            </p>
            </br>
            <div class="container-fluid d-flex justify-content-center">

                <div class="m-4">
                    <a class="btn btn-primary" style="font-family: 'Handlee', cursive;" href="./src/views/mesero/mesero.php">Mesero</a>
                </div>
                <div class="m-4">
                    <a class="btn btn-primary" style="font-family: 'Handlee', cursive;" href="src/views/bebidas/listarbebidas.php">Cocinero</a>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-center">
                <div class="m-4">
                    <a class="btn btn-primary" style="font-family: 'Handlee', cursive;" href="./src/views/administrador/administrador.php">Administrador</a>
                </div>
            </div>
        </div>  

    </div>

</body>
<?php include("./src/includes/footer.php") ?>



</html>