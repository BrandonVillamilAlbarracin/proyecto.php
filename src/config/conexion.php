<?php
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'bd_proyectofinal'
    );
    return $conn;

    // Validacion de conexion
    // if (isset($conn)) {
    //     echo "conexion exitosa con BD, lo logramos mano :D.";
    // }
    
?>