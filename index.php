<?php
include 'conexion.php'; //conexion
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Lateral con Formulario de Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kreon:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Menú Lateral -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Menú</h2>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="#registro" id="btnRegistro">
                    <i class="fas fa-user-plus"></i>
                    <span>Registro</span>
                </a>
            </li>
            <li>
                <a href="#tabla" id="btnTabla">
                    <i class="fas fa-table"></i>
                    <span>Tabla</span>
                </a>
                </a>
            </li>
        </ul>
    </div>

   <!-- Contenido Principal -->
<div class="content" id="formulario">
    <h1>Formulario de Producto</h1>
    <form action="insertar.php" method="POST">
        <h2>Formulario de Producto</h2>
        
        <div class="input-group">
            <label for="productId">ID de Producto:</label>
            <input type="text" id="id" name="id" required> <!-- Cambiado aquí -->
            <i class="fas fa-barcode icon"></i>
        </div>
        
        <div class="input-group">
            <label for="productName">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required> <!-- Cambiado aquí -->
            <i class="fas fa-tag icon"></i>
        </div>
        
        <div class="input-group">
            <label for="productPrice">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" min="0" required> <!-- Cambiado aquí -->
            <i class="fas fa-dollar-sign icon"></i>
        </div>
        
        <div class="input-group">
            <label for="productStock">Existencia:</label>
            <input type="number" id="existencia" name="existencia" step="1" min="0" required> <!-- Cambiado aquí -->
            <i class="fas fa-boxes icon"></i>
        </div>
        
        <input type="submit" value="Enviar">
    </form>
</div>


    




    <!-- contenido que se muestra inicialmente -->
    <div class="content" id="predeterminado">
    <h2>Lista de Productos</h2>
    <table border="1">
        <thead>
            <tr>
                <th>idProd</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencia</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Consulta para obtener los productos
            $sql = "SELECT id_produ, nombre, precio, existencia FROM product";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Mostrar los productos en la tabla
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id_produ"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>$" . number_format($row["precio"], 2) . "</td>";
                    echo "<td>" . $row["existencia"] . "</td>";
                    echo "<td><a href='eliminar.php?idProd=" . $row["id_produ"] . "'>Eliminar</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay productos registrados</td></tr>";
            }

            // Cerrar conexión
            $conn->close();
            ?>
        </tbody>
    </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="control_men.js"></script>

</body>
</html>
