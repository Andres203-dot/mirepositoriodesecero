<?php
// Cargar el autoloader de Composer para la librería de MongoDB
require 'vendor/autoload.php';

// Establecer la cabecera para devolver JSON
header('Content-Type: application/json');

// Conexión a MongoDB
try {
    // ¡MEJORA DE SEGURIDAD! Leemos la cadena de conexión de una variable de entorno.
    $uri = getenv('MONGODB_URI');
    if ($uri === false) {
        // Si la variable de entorno no está configurada, termina con un error.
        // No muestres el error en producción, solo regístralo.
        throw new Exception("La variable de entorno MONGODB_URI no está configurada.");
    }

    $cliente = new MongoDB\Client($uri);
    
    // Selecciona la base de datos. Puedes usar la misma o una nueva en tu clúster.
    $db = $cliente->citas_medicas; // Selecciona la base de datos 'citas_medicas'
} catch (Exception $e) {
    // Si hay un error en la conexión, devolverlo en formato JSON y terminar el script
    echo json_encode(['success' => false, 'message' => 'Error de conexión con MongoDB: ' . $e->getMessage()]);
    exit();
}

/**
 * Función para convertir los tipos de datos de MongoDB a tipos nativos de PHP.
 * Esto es necesario para que json_encode funcione correctamente.
 */
function convertirMongoAArray($mongoArray) {
    $json = MongoDB\BSON\toJSON(MongoDB\BSON\fromPHP($mongoArray));
    return json_decode($json, true);
}


$accion = isset($_POST['accion']) ? $_POST['accion'] : '';
$response = ['success' => false, 'message' => 'Acción no reconocida.'];

if ($accion == "nuevo") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $medico = $_POST['medico'];

    // Seleccionamos la colección 'citas'
    $citasCollection = $db->citas;

    // Creamos un documento para insertar en la colección
    $documento = [
        'paciente' => [
            'nombre' => $nombre,
            'correo' => $correo,
            'telefono' => $telefono,
        ],
        'fecha' => $fecha,
        'hora' => $hora,
        'medico' => $medico,
    ];

    $resultado = $citasCollection->insertOne($documento);

    if ($resultado->getInsertedCount() == 1) {
        $response = ['success' => true, 'message' => '✅ Cita registrada correctamente.'];
    } else {
        $response['message'] = 'Error al registrar la cita.';
    }
}

if ($accion == "consultar") {
    $citasCollection = $db->citas;
    // Ordenar por fecha y hora ascendente
    $opciones = ['sort' => ['fecha' => 1, 'hora' => 1]]; // Ordenar por fecha y hora
    $cursor = $citasCollection->find([], $opciones);
    $citasMongo = $cursor->toArray();
    $citasArray = convertirMongoAArray($citasMongo); // Convertimos los datos
    $response = ['success' => true, 'citas' => $citasArray];
}

if ($accion == "consultar_una") {
    $correo = $_POST['correo'] ?? '';

    if (empty($correo)) {
        $response = ['success' => false, 'message' => 'Por favor, proporciona un correo para la búsqueda.'];
    } else {
        $citasCollection = $db->citas;
        // Buscar la cita más reciente para el correo proporcionado
        $filtro = ['paciente.correo' => $correo];
        $opciones = ['sort' => ['fecha' => -1, 'hora' => -1]]; // Ordena para obtener la más nueva primero
        $citaMongo = $citasCollection->findOne($filtro, $opciones);

        if ($citaMongo) {
            $response = ['success' => true, 'cita' => convertirMongoAArray($citaMongo)];
        } else {
            $response = ['success' => false, 'message' => 'No se encontraron citas para el correo proporcionado.'];
        }
    }
}

if ($accion == "actualizar") {
    $response = ['success' => false, 'message' => '🔄 Función de actualización pendiente de implementar.'];
}

if ($accion == "eliminar") {
    $response = ['success' => false, 'message' => '🗑️ Función de eliminación pendiente de implementar.'];
}

if ($accion == "consultar_doctores") {
    // Se utiliza una lista fija de doctores en lugar de consultar la base de datos.
    $doctores = [
        ['nombre' => 'Dr. Christian Angelones', 'especialidad' => 'Cardiología', 'foto_url' => 'https://images.pexels.com/photos/5214996/pexels-photo-5214996.jpeg?auto=compress&cs=tinysrgb&w=600'],
        ['nombre' => 'Dra. Valentina Contreras', 'especialidad' => 'Medicina General', 'foto_url' => 'https://images.pexels.com/photos/5452201/pexels-photo-5452201.jpeg?auto=compress&cs=tinysrgb&w=600'],
        ['nombre' => 'Dr. Ricael Palacios', 'especialidad' => 'Odontología', 'foto_url' => 'https://images.pexels.com/photos/6528859/pexels-photo-6528859.jpeg?auto=compress&cs=tinysrgb&w=600'],
        ['nombre' => 'Dr. Jesús Andrés', 'especialidad' => 'Oftalmología', 'foto_url' => 'https://images.pexels.com/photos/8442537/pexels-photo-8442537.jpeg?auto=compress&cs=tinysrgb&w=600']
    ];
    $response = ['success' => true, 'doctores' => $doctores];
}

echo json_encode($response);
?>
