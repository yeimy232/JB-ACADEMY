<?php
include "conexion.php";

$sql = "DELETE FROM alumnos"; // Borra todo el contenido de la tabla
if ($conn->query($sql) === TRUE) {
    header("Location: historial.php?msg=Todos los registros fueron eliminados");
} else {
    echo "Error al eliminar registros: " . $conn->error;
}

$conn->close();
?>
