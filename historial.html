<?php
include "conexion.php";

// Consulta de todos los registros
$sql = "SELECT * FROM alumnos ORDER BY fecha DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>JB ACADEMY</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h2>Historial</h2>

    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Asistencia</th>
                <th>Uniforme</th>
                <th>Compartidas/Reacciones</th>
                <th>Material</th>
                <th>Evaluación</th>
                <th>Observaciones</th>
                <th>Fecha</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$i++."</td>";
                    echo "<td>".$row['nombre']."</td>";
                    echo "<td>".($row['asistencia'] ? '✔️' : '❌')."</td>";
                    echo "<td>".($row['uniforme'] ? '✔️' : '❌')."</td>";
                    echo "<td>".($row['compartidas'] ? '✔️' : '❌')."</td>";
                    echo "<td>".($row['material'] ? '✔️' : '❌')."</td>";
                    echo "<td>".$row['evaluacion']."</td>";
                    echo "<td>".$row['observaciones']."</td>";
                    echo "<td>".$row['fecha']."</td>";
                    echo "</tr>";
                }
                
            } else {
                echo "<tr><td colspan='9'>No hay registros guardados</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <div style="text-align:center; margin-top:20px;">
        <a href="index.php" style="padding:10px 20px; background:#007BFF; color:white; border-radius:6px; text-decoration:none;">Volver</a>

        <a href="eliminar.php" 
       onclick="return confirm('⚠️ ¿Seguro que quieres borrar TODOS los registros?');"
       style="padding:10px 20px; background:#DC3545; color:white; border-radius:6px; text-decoration:none; margin-left:10px;">
       Eliminar Todo
    </a>
    </div>
    
</body>
</html>

<?php
$conn->close();
?>
