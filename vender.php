<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vende tu vehículo | Motrix</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #001f5b; /* Azul oscuro Motrix */
      padding: 15px;
      text-align: center;
      color: white;
    }

    .container {
      max-width: 1000px;
      margin: 40px auto;
      background: white;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h1 {
      color: #001f5b;
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #001f5b;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    button {
      background-color: #001f5b;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      margin-top: 20px;
    }

    button:hover {
      background-color: #003080;
    }
  </style>
</head>
<body>
  <header>
    <h2>Motrix</h2>
  </header>

  <div class="container">
    <h1>Vende tu vehículo</h1>
    <form action="procesar_vender.php" method="POST">
      
      <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca" required>
      </div>

      <div class="form-group">
        <label for="modelo">Modelo</label>
        <input type="text" id="modelo" name="modelo" required>
      </div>

      <div class="form-group">
        <label for="anio">Año</label>
        <input type="number" id="anio" name="anio" min="1900" max="2099" required>
      </div>

      <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" id="precio" name="precio" required>
      </div>

      <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea id="descripcion" name="descripcion" rows="4" placeholder="Escribe detalles de tu vehículo"></textarea>
      </div>

      <div class="form-group">
        <label for="contacto">Teléfono de contacto</label>
        <input type="tel" id="contacto" name="contacto" placeholder="+57 300 000 0000" required>
      </div>

      <button type="submit">Publicar vehículo</button>
    </form>
  </div>
</body>
</html>
