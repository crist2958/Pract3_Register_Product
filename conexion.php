<?php
// Datos de la base de datos en tu hosting de InfinityFree
$host = 'localhost';  // Cambia 'sqlXXX' por el nombre correcto del host que te dio InfinityFree
$usuario = 'root';  // Tu usuario de base de datos
$password = '';  // Tu contraseña de base de datos
$base_datos = 'produ';  // El nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($host, $usuario, $password, $base_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>