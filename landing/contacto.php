<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My primera web</title>
</head>

<body>
  <!-- Header   -->
  <h1>Mi primera web</h1>
  <!-- Menu -->
  <ul>
    <li><a href="/landing/home.php/">Inicio</a></li>
    <li><a href="/landing/contenidos.php/">Contenidos</a></li>
    <li><a href="/landing/contacto.php/">Contactos</a></li>
  </ul>

  <hr>
  <!-- Contenido de contenidos -->
  <h2>Tabla de contacto</h2>
  <form action="">
    <p>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre">
    </p>
    <p>
      <label for="nombre">Descripción</label>
      <textarea type="text" name="description" id="description"></textarea>
    </p>
    <p>
      <label for="edad">Edad</label>
      <select name="edad" id="edad">
        <option value="edad">Mayor de edad</option>
        <option value="adulto">Adulto</option>
        <option value="65">Mayor de 65</option>
      </select>
    </p>
    <button type="submit">Enviar</button>
  </form>
</body>

</html>