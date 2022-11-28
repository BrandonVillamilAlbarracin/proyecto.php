<?php include("./src/includes/header.php") ?>
<?php include("./src/includes/navbar.php") ?>


<body style="background-color: #f5f5f5">
<div class="container-fluid d-flex justify-content-center">
    <div>
        <img style="height:300px ; width: 300px" src="./src/images/logo2.jpg" class="rounded mx-auto d-block"
            alt="<?php echo "foto" ?>">
        </br>
        <p class="text-center" style="font-family: 'Handlee', cursive;" >Bienvenidos a Bienvenidos a VIFLOR, una inovacion
            en el mejor restaurante de Tunja!.</p>
        </br>

        <div class="m-4 d-flex justify-content-center">
            <a class="btn btn-primary" href="login.php">Login</a>
        </div>
        <br>
        <br>
        <div class="m-4 text-center ">
            <h3>Autores.</h3>
        </div>
        <div class="container-fluid d-flex justify-content-center my-4">


            <div class="card m-4 border border-3 border-dark " style="width: 250px; height: 300px">
                <img style="height: 100px; width: 100px" src="./src/images/fotocreador1.jpg"
                    class="rounded mx-auto d-block my-2 border border-1 border-dark" alt="..<?php echo "Brandon Villamil" ?>">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-family: 'Handlee', cursive;" ><b> Brandon Villamil</b></h5>
                    <p class="card-text fuenteChimba" style="font-family: 'Handlee', cursive;" >Estudiante de la universidad Santo Tomas Seccional Tunja, cursando 4to semestre
                        de ingenieria de sistemas.</p>
                </div>
            </div>

            <div class="card m-4 border border-3 border-dark" style="width: 250px; height: 300px">
                <img style="height: 100px; width: 100px" src="./src/images/fotocreador2.jpg"
                    class="rounded mx-auto d-block my-2 border border-1  border-dark" alt="..<?php echo "Fernando Florez" ?>">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-family: 'Handlee', cursive;" > <b> Fernando Florez</b></h5>
                    <p class="card-text" style="font-family: 'Handlee', cursive;" >Estudiante de la universidad Santo Tomas Seccional Tunja, cursando 4to semestre
                        de ingenieria de sistemas.</p>
                </div>
            </div>
        </div>

    </div>





</div>
</body>
<?php include("./src/includes/footer.php") ?>



</html>