<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Gestión de Citas Médicas</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom right, #c4d7da, #0c8080);
      padding: 20px;
      min-height: 100vh; /* Asegura que el gradiente cubra toda la altura */
      margin: 0;
    }
    h2 {
      text-align: center;
      color: white;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }
    form {
      background: white;
      padding: 25px;
      border-radius: 10px;
      width: 400px;
      margin: 0; /* El contenedor flex se encarga del centrado */
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      animation: slideDown 0.5s ease-out;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    form:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    @keyframes slideDown {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Animación escalonada para los inputs */
    form > input {
      animation: slideDown 0.5s ease-out both;
    }
    form > input:nth-child(1) { animation-delay: 0.1s; }
    form > input:nth-child(2) { animation-delay: 0.2s; }
    form > input:nth-child(3) { animation-delay: 0.3s; }
    form > input:nth-child(4) { animation-delay: 0.4s; }
    form > input:nth-child(5) { animation-delay: 0.5s; }
    form > input:nth-child(6) { animation-delay: 0.6s; }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }
    input, button {
      margin: 10px 0;
      padding: 12px;
      width: 100%;
      box-sizing: border-box; /* Asegura que padding no afecte el ancho */
    }
    input {
      border: 1px solid #ddd;
      border-radius: 5px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    input:focus {
      outline: none;
      border-color: #2196F3;
      box-shadow: 0 0 8px rgba(33, 150, 243, 0.4);
    }
    button {
      cursor: pointer;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      transition: transform 0.2s ease, filter 0.2s ease, box-shadow 0.2s ease;
    }
    button:hover {
      transform: translateY(-2px);
      filter: brightness(1.1);
    }
    button:active {
      transform: translateY(0);
      box-shadow: inset 0 2px 4px rgba(0,0,0,0.2);
    }
    .nuevo { background: #4CAF50; color: white; }
    .consultar { background: #2196F3; color: white; }
    .actualizar { background: #FFC107; color: black; }
    .eliminar { background: #F44336; color: white; }
    .button-container {
      display: flex;
      gap: 10px; /* Espacio entre los botones */
      margin-top: 20px; /* Espacio sobre los botones */
    }
    .button-container button {
      flex-grow: 1; /* Permite que los botones crezcan y ocupen el espacio */
      margin: 0; /* Resetea el margen vertical para alinearlos */
    }
    .search-one-container {
      background: white;
      padding: 20px;
      border-radius: 10px;
      width: 400px;
      margin: 20px 0 0 0; /* Margen superior para separarlo del form principal */
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      display: flex;
      gap: 10px;
      align-items: center;
    }

    .main-container {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 50px; /* Espacio entre el formulario y la imagen */
      padding: 20px;
    }
    .form-wrapper {
      display: flex;
      flex-direction: column;
    }
    .side-image {
      width: 300px;
      height: 350px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      animation: fadeIn 0.8s ease-out 0.3s; /* Retraso para que aparezca después del form */
      animation-fill-mode: backwards; /* Aplica estilos iniciales de la animación */
    }
    #resultado {
      max-width: 850px;
      margin: 30px auto;
      padding: 10px;
    }
    .cita-card {
      background: rgba(255, 255, 255, 0.9);
      border-left: 5px solid #178888;
      padding: 15px;
      margin-bottom: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      animation: fadeIn 0.5s ease-out;
    }
    .cita-card p {
      margin: 5px 0;
    }
    .cita-card b {
      color: #333;
    }
    /* Spinner de carga */
    .loader {
      border: 5px solid #f3f3f3;
      border-top: 5px solid #3498db;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      animation: spin 1s linear infinite;
      margin: 20px auto;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .nav-button {
      display: block;
      width: 200px;
      margin: 20px auto;
      padding: 15px;
      text-align: center;
      background: #6c757d;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    /* --- Estilos para el Catálogo de Doctores --- */
    .doctores-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        padding: 20px;
    }
    .doctor-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        width: 250px;
        text-align: center;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.5s ease-out forwards;
    }
    .doctor-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    }
    .doctor-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }
    .doctor-info {
        padding: 20px;
    }
    .doctor-info h3 {
        margin-top: 0;
        margin-bottom: 5px;
        color: #333;
    }
    .doctor-info p {
        margin: 0;
        color: #666;
        font-style: italic;
    }
    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    /* Clase para ocultar vistas */
    .hidden {
      display: none;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
</head>
<body>
  <!-- Vista para Agendar Citas -->
  <div id="vistaCitas">
    <h2>Registrar Cita Médica</h2>
    <div class="main-container">
      <div class="form-wrapper">
        <form id="citaForm">
          <input type="text" name="nombre" placeholder="Nombre del paciente" required>
          <input type="email" name="correo" placeholder="Correo" required>
          <input type="text" name="telefono" placeholder="Teléfono" required>
          <input type="date" name="fecha" required>
          <input type="time" name="hora" required>
          <input type="text" name="medico" placeholder="Médico" required>
          <div class="button-container">
            <button type="submit" name="accion" value="nuevo" class="nuevo">Nuevo</button>
            <button type="submit" name="accion" value="consultar" class="consultar">Consultar</button>
          </div>
        </form>
        <form id="buscarCitaForm" class="search-one-container">
            <input type="email" name="correo_busqueda" placeholder="Ingresa tu correo para buscar" required style="margin:0;">
            <button type="submit" name="accion" value="consultar_una" class="consultar" style="margin:0; white-space: nowrap;">Mi Cita</anaquel>
        </form>
      </div>
      <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Imagen de un doctor" class="side-image">
    </div>
    <button id="btnVerDoctores" class="nav-button consultar">Ver Catálogo de Doctores</button>
    <div id="resultado"></div>
  </div>

  <!-- Vista para el Catálogo de Doctores (inicialmente oculta) -->
  <div id="vistaDoctores" class="hidden">
      <h2>Nuestro Equipo Médico</h2>
      <div id="doctoresContainer" class="doctores-container">
          <!-- Los doctores se cargarán aquí dinámicamente -->
      </div>
      <button id="btnVerCitas" class="nav-button">Agendar una Cita</button>
  </div>

  <script>
    // Variables para las vistas y estado de carga
    const vistaCitas = document.getElementById('vistaCitas');
    const vistaDoctores = document.getElementById('vistaDoctores');
    const btnVerDoctores = document.getElementById('btnVerDoctores');
    const btnVerCitas = document.getElementById('btnVerCitas');
    let doctoresCargados = false;

    // --- NAVEGACIÓN ENTRE VISTAS ---
    btnVerDoctores.addEventListener('click', () => {
      vistaCitas.classList.add('hidden');
      vistaDoctores.classList.remove('hidden');
      // Cargar doctores solo la primera vez
      if (!doctoresCargados) {
        cargarDoctores();
      }
    });

    btnVerCitas.addEventListener('click', () => {
      vistaDoctores.classList.add('hidden');
      vistaCitas.classList.remove('hidden');
    });

    // --- LÓGICA DEL FORMULARIO DE BÚSQUEDA INDIVIDUAL ---
    document.getElementById('buscarCitaForm').addEventListener('submit', manejarSubmit);

    function manejarSubmit(event) {
      event.preventDefault(); // Previene el envío tradicional del formulario

      const form = event.target;
      const formData = new FormData(form);
      // El botón presionado nos da la acción
      const accion = event.submitter.value;
      formData.append('accion', accion);

      enviarPeticion(formData, accion, form);
    }

    // --- LÓGICA DEL FORMULARIO DE CITAS ---
    document.getElementById('citaForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Previene el envío tradicional del formulario

      const form = event.target;
      const formData = new FormData(form);
      const accion = event.submitter.value; // Obtiene el valor del botón presionado
      formData.append('accion', accion);

      enviarPeticion(formData, accion, form);
    });

    // --- FUNCIÓN CENTRAL PARA ENVIAR PETICIONES ---
    function enviarPeticion(formData, accion, form = null) {
      // Muestra un indicador de carga
      const resultadoDiv = document.getElementById('resultado');
      resultadoDiv.innerHTML = '<div class="loader"></div>'; // Limpia resultados anteriores y muestra spinner

      fetch('Bakend.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        // Usamos Noty para notificaciones más elegantes
        if (data.message) {
            new Noty({
                text: data.message,
                type: data.success ? 'success' : 'error',
                layout: 'topRight',
                timeout: 3000
            }).show();
        }

        if (data.success) {
          if (accion === 'nuevo' && form) {
            form.reset(); // Limpia el formulario de registro si fue exitoso
            // Opcional: consultar citas automáticamente después de agregar una nueva
            document.querySelector('button[value="consultar"]').click();
          } else if (accion === 'consultar') {
            mostrarCitas(data.citas);
          } else if (accion === 'consultar_una') {
            mostrarCitas([data.cita]); // Reutilizamos la función mostrarCitas con un array de un solo elemento
          } else {
            resultadoDiv.innerHTML = ''; // Limpia para otras acciones
          }
        } else {
            // Si hubo un error, limpiar el spinner
            if (accion !== 'consultar') {
                resultadoDiv.innerHTML = '';
            }
        }
      })
      .catch(error => {
        console.error('Error:', error);
        resultadoDiv.innerHTML = '<p>Ocurrió un error de conexión.</p>';
        new Noty({
            text: 'Ocurrió un error de conexión con el servidor.',
            type: 'error',
            layout: 'topRight',
            timeout: 3000
        }).show();
      });      
    }

    // --- FUNCIÓN PARA MOSTRAR CITAS ---
    function mostrarCitas(citas) {
      const resultadoDiv = document.getElementById('resultado');
      if (citas.length === 0) {
        resultadoDiv.innerHTML = '<p style="text-align: center;">No hay citas registradas.</p>';
        return;
      }

      let html = `<h3 style="text-align: center;">${citas.length > 1 ? 'Citas Registradas' : 'Tu Cita Agendada'}:</h3>`;
      citas.forEach(cita => {
        html += `
          <div class="cita-card">
            <p><b>Paciente:</b> ${cita.paciente.nombre} (${cita.paciente.correo})</p>
            <p><b>Fecha y Hora:</b> ${cita.fecha} a las ${cita.hora}</p>
            <p><b>Médico:</b> ${cita.medico}</p>
          </div>`;
      });
      resultadoDiv.innerHTML = html;
    }

    // --- FUNCIÓN PARA CARGAR Y MOSTRAR DOCTORES ---
    function cargarDoctores() {
        // La lista de doctores ahora está directamente aquí en el HTML.
        const doctores = [
            {nombre: 'Dr. Christian Angelones', especialidad: 'Cardiología', foto_url: 'https://images.pexels.com/photos/5214996/pexels-photo-5214996.jpeg?auto=compress&cs=tinysrgb&w=600'},
            {nombre: 'Dra. Valentina Contreras', especialidad: 'Medicina General', foto_url: 'https://images.pexels.com/photos/5452201/pexels-photo-5452201.jpeg?auto=compress&cs=tinysrgb&w=600'},
            {nombre: 'Dr. Ricael Palacios', especialidad: 'Odontología', foto_url: 'https://images.pexels.com/photos/6528859/pexels-photo-6528859.jpeg?auto=compress&cs=tinysrgb&w=600'},
            {nombre: 'Dr. Jesús Andrés', especialidad: 'Oftalmología', foto_url: 'https://images.pexels.com/photos/8442537/pexels-photo-8442537.jpeg?auto=compress&cs=tinysrgb&w=600'}
        ];

        const container = document.getElementById('doctoresContainer');
        container.innerHTML = ''; // Limpiar el contenedor

        doctores.forEach((doctor, index) => {
            const card = `
                <div class="doctor-card" style="animation-delay: ${index * 0.1}s">
                    <img src="${doctor.foto_url}" alt="Foto de ${doctor.nombre}">
                    <div class="doctor-info">
                        <h3>${doctor.nombre}</h3>
                        <p>${doctor.especialidad}</p>
                    </div>
                </div>`;
            container.innerHTML += card;
        });
        doctoresCargados = true;
    }
  </script>
</body>

</html>
