<?php
include 'conexion.php';  // Conexión a la base de datos

// Verifica si se ha recibido un idProd para eliminar
if (isset($_GET["idProd"])) {
    $id = $_GET["idProd"];

    // Elimina el producto de la base de datos
    $sql = "DELETE FROM product WHERE id_produ = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Producto eliminado correctamente.";
    } else {
        echo "Error al eliminar el producto: " . $conn->error;
    }

    // Redirigir al index.php
    header("Location: index.php");
    exit();
}
?>
