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
    <?php
    if ($_POST) {
      $nombres = $_POST["nombres"];
      $apellidos = $_POST["apellidos"];
      $edad = $_POST["edad"];
      $sexo = $_POST["sexo"];
      $telefono = $_POST["telefono"];
      $direccion = $_POST["direccion"];
    }

    ?>

<div class="container mt-5">
<div class="text-center">
    <img src="https://rb.gy/qv7le5" alt="Centered Image" class="img-fluid">
  </div>
       <h1>Aplicación Básica POST / GET</h1>
        <div class="form-group">
            <label for="nombres">Nombres:</label>
            <input
            type="text"
            name="nombres"
            id="nombres"
            class="form-control"
            readonly
            value="<?php echo $nombres; ?>"
        />
        <div class="form-group">
            <label for="nombres">Apellidos:</label>
            <input
            type="text"
            name="apellidos"
            id="apellidos"
            class="form-control"
            readonly
            value="<?php echo $apellidos; ?>"
        />
        <div class="form-group">
            <label for="nombres">Edad:</label>
            <input
            type="text"
            name="edad"
            id="edad"
            class="form-control"
            readonly
            value="<?php echo $edad; ?>"
        />
        <div class="form-group">
            <label for="nombres">Sexo:</label>
            <input
            type="text"
            name="sexo"
            id="sexo"
            class="form-control"
            readonly
            value="<?php echo $sexo; ?>"
        />
        <div class="form-group">
            <label for="nombres">Telefono:</label>
            <input
            type="text"
            name="telefono"
            id="telefono"
            class="form-control"
            readonly
            value="<?php echo $telefono; ?>"
        />
        <div class="form-group">
            <label for="nombres">Direccion:</label>
            <input
            type="text"
            name="direccion"
            id="direccion"
            class="form-control"
            readonly
            value="<?php echo $direccion; ?>"
        />

</div>

<a href="formulario.php" class="btn btn-success mt-3">Volver a la página principal</a>

</body>
</html>