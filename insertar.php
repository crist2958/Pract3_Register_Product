<?php
include 'conexion.php';  // Conexión a la base de datos

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $existencia = $_POST["existencia"];

    // Inserta los datos en la base de datos
    $sql = "INSERT INTO product (id_produ, nombre, precio, existencia) VALUES ('$id', '$nombre', '$precio', '$existencia')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Producto registrado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirigir al index.php
    header("Location: index.php");
    exit();
}
?>
