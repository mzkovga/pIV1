<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Aplicación Básica POST / GET</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    .img-fluid {
  width: auto; /* Adjust width as desired */
  max-height: 125px; /* Set a maximum height if needed */
  margin: auto; /* Center the image horizontally and vertically */

}
  </style>
</head>
<body>
  <div class="container mt-5">
  <div class="text-center">
    <img src="https://rb.gy/qv7le5" alt="Centered Image" class="img-fluid">
  </div>
    <h1>Aplicación Básica POST / GET</h1>
    <div class='alert alert-dark w-50 mt-3'>
        <strong>UGB</strong>
        <br>
        <strong>Programacion IV</strong>
        <br>
        <strong>Nombre de la actividad: </strong> Aplicación Básica POST / GET
        <br>
        <strong>Docente: </strong> Master. Luis Antonio Amaya Villalta
        <br>
        <strong>Alumno: </strong> Oscar Ernesto Cienfuegos Vega - ISNP176523
    </div>

    <form
      method="POST"
      action="ejemplo_procesar.php"
      name="form1"
      id="form1"
      class="form"
      onsubmit="return validarFormulario();"
    >
      <div class="form-group">
        <label for="nombres">Nombres:</label>
        <input
          type="text"
          name="nombres"
          id="nombres"
          placeholder="Nombres"
          class="form-control"
          required
        />
      </div>
      <div class="form-group">
        <label for="apellidos">Apellidos:</label>
        <input
          type="text"
          name="apellidos"
          id="apellidos"
          placeholder="Apellidos"
          class="form-control"
          required
        />
      </div>
      <div class="form-group">
        <label for="edad">Edad:</label>
        <input
          type="number"
          name="edad"
          id="edad"
          placeholder="Edad"
          class="form-control"
          required
        />
      </div>
      <div class="form-group">
        <label for="sexo">Sexo</label>
        <select name="sexo" id="sexo" class="form-control" required>
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
        </select>
      </div>
      <div class="form-group">
        <label for="telefono">Telefono:</label>
        <input
          type="number"
          name="telefono"
          id="telefono"
          placeholder="Telefono"
          class="form-control"
          required
        />
      </div>
      <div class="form-group">
        <label for="direccion">Direccion:</label>
        <input
          type="text"
          name="direccion"
          id="direccion"
          placeholder="Direccion"
          class="form-control"
          required
        />
      </div>
      <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
  </div>

  <script>
    function validarFormulario() {
      const inputs = document.querySelectorAll('input[required], select[required]');
      for (const input of inputs) {
        if (!input.value) {
          alert('Por favor, complete todos los campos obligatorios.');
          input.focus();
          return false;
        }
      }
      return true;
    }
  </script>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>