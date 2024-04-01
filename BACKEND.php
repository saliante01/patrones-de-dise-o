<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Conexion.php'; 
    include 'ConexionFactory.php';

    $nombre = $_POST['nombre'];
    $gmail = $_POST['gmail'];

  
    $factory = new ConexionFactory();
    $conexion = $factory->crearConexion();
    $conexionBD = $conexion->obtenerConexion();

    $sql = "INSERT INTO usuarios (nombre, gmail) VALUES ('$nombre', '$gmail')";

    if ($conexionBD->query($sql) === TRUE) {
        echo "Datos almacenados correctamente.";
    } else {
        echo "Error al almacenar los datos: " . $conexionBD->error;
    }
}
?>
