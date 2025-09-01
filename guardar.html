<?php

include 'conexion.php';

$nombres = $_POST['nombre'];
$evaluaciones = $_POST['evaluacion'];
$observaciones = $_POST['observaciones'];
$fecha = date("Y-m-d");

for ($i = 0; $i < count($nombres); $i++) {
    $nombre = $nombres[$i];

    if (empty($nombre)) {
        continue;
    }

    $asistencia  = isset($_POST['asistencia'][$i]) ? $_POST['asistencia'][$i] : 0;
    $uniforme = isset($_POST['uniforme'][$i]) ? 1 : 0;
    $compartidas = isset($_POST['compartidas'][$i]) ? 1 : 0;
    $material = isset($_POST['material'][$i]) ? 1 : 0;
    $evaluacion  = !empty($evaluaciones[$i]) ? $evaluaciones[$i] : "NULL";
    $obs         = !empty($observaciones[$i]) ? $observaciones[$i] : "";

    $sql = "INSERT INTO alumnos 
    (nombre, asistencia, uniforme, compartidas, material, evaluacion, observaciones, fecha)
    VALUES 
    ('$nombre', '$asistencia', '$uniforme', '$compartidas', '$material', " .
    ($evaluacion === "NULL" ? "NULL" : "'$evaluacion'") . ", 
    '$obs', '$fecha')";

    $conn->query($sql);
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registros Guardados</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body style="text-align:center; font-family:'Raleway'">

  <h2 style="color:green;">✅ Los registros fueron guardados correctamente</h2>

  <!-- Botón para volver -->
  <a href="index.php">
    <button style="background-color:#007BFF; color:white; padding:10px 20px; border:none; border-radius:6px; cursor:pointer; font-size:16px;">
      Volver al Formulario
    </button>
  </a>
  <a href="historial.php">
    <button style="background-color:#007BFF; color:white; padding:10px 20px; border:none; border-radius:6px; cursor:pointer; font-size:16px;">
      Historial 
    </button>
  </a>

</body>
</html>
