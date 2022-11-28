<?php include("../../includes/header.php") ?>
<?php include("../../includes/navbar.php") ?>
<a href="../../../login.php"><i class="bi bi-caret-left-square-fill m-3"
        style="font-size: 50px; color: black;"></i></a>

<body style="background-color: #f5f5f5" id="miContenido" name="miContenido">
<br/>
  <div class="container-fluid d-flex justify-content-center">
    <div>
      <img style="height:300px ; width: 300px" src="../../images/logo2.jpg" class="rounded mx-auto d-block"
        alt="<?php echo "foto" ?>">
      </br>
      <p class="text-center" style="font-family: 'Handlee', cursive;">Eres el INGENIERISIMO?      </p>
      </br>
      <div class="container-fluid d-flex justify-content-center">
        <div class="m-4">
          <button type="button" style="font-family: 'Handlee', cursive;" class="btn btn-primary" onclick="myFunction()">
            Solicitar Ingreso
          </button>
        </div>
      </div>
    </div>

  </div>




  <script>
    function myFunction() {
      //const emailTrue = "brandon.villamil@usantoto.edu.co";
      const passwordTrue = "0000";
      //const wordTrue = "perro";

      // Guardar email ingresado en el alert
      //const email = prompt("Please enter your email:");

      // Guardar clave ingresada en el alert
      const password = prompt("Ingresa la clave de administrador:");

      // Guardar contraseña de alert

      //obtener el div con el id miContenido
      let body = document.getElementById("miContenido");
      body.innerHTML = "";


      if ((password == passwordTrue)) {
        body.innerHTML += `

    <?php include("../../includes/navbar.php") ?>
    <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

    <div class="container-fluid d-flex justify-content-center">

<div class="container-fluid d-flex justify-content-center">

    <div class="m-4">
        <a style="font-family: 'Handlee', cursive;" class="btn btn-primary"href="./comidas/listarcomidas.php">Comidas</a>
    </div>
    <div class="m-4">
        <a style="font-family: 'Handlee', cursive;" class="btn btn-primary" href="./bebidas/listarbebidas.php">Bebidas</a>
    </div>
    <div class="m-4">
        <a style="font-family: 'Handlee', cursive;" class="btn btn-primary" href="./meseros/listarmeseros.php">Meseros</a>
    </div>
    <div class="m-4">
        <a style="font-family: 'Handlee', cursive;" class="btn btn-primary" href="./cocineros/listarcocineros.php">Cocineros</a>
    </div>
</div>
</div>
<br/>
        <br/>
        <br/>
        <br/>
<?php include("../../includes/footer.php") ?> 
    `;

      } else {
        body.innerHTML += `
    <?php include("../../includes/navbar.php") ?>

    <br/>
        <br/>
        <br/>



    <div class="container-fluid d-flex justify-content-center" >
        
        <div><img class="img-fluid rounded mx-auto d-block" style="width:300px" src="../../images/gatoasustado.jpg" alt="Gato "/>
          
        <h1> <span class="badge bg-danger" style="font-family: 'Handlee', cursive;">USTED NO ES EL INGENIERISIMO !</span> </h1></div>

        


    </div>
    <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

    <?php include("../../includes/footer.php") ?>
    
    `;
      }
    }
  </script>
  
</body>

<?php include("../../includes/footer.php") ?>