<?php
$conexion = new mysqli("localhost", "root", "", "citas_medicas");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$accion = $_POST['accion'];

if ($accion == "nuevo") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $medico = $_POST['medico'];

    $conexion->query("INSERT INTO usuarios (nombre, correo, telefono) VALUES ('$nombre','$correo','$telefono')");
    $id_usuario = $conexion->insert_id;
    $conexion->query("INSERT INTO citas (id_usuario, fecha, hora, medico) VALUES ($id_usuario, '$fecha', '$hora', '$medico')");
    echo "✅ Cita registrada correctamente";
}

if ($accion == "consultar") {
    $resultado = $conexion->query("SELECT u.nombre, u.correo, c.fecha, c.hora, c.medico 
                                   FROM usuarios u 
                                   JOIN citas c ON u.id = c.id_usuario");
    while ($fila = $resultado->fetch_assoc()) {
        echo "<p>Paciente: {$fila['nombre']} - Correo: {$fila['correo']} - Fecha: {$fila['fecha']} - Hora: {$fila['hora']} - Médico: {$fila['medico']}</p>";
    }
}

if ($accion == "actualizar") {
    // Aquí pondrías la lógica para actualizar (por ejemplo, usando el correo o ID)
    echo "🔄 Función de actualización pendiente de implementar.";
}

if ($accion == "eliminar") {
    // Aquí pondrías la lógica para eliminar (por ejemplo, usando el correo o ID)
    echo "🗑️ Función de eliminación pendiente de implementar.";
}
?>
