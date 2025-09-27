<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carros - Motrix</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- HEADER -->
  <header class="navbar">
    <div class="container nav-inner">
      <div class="nav-left">
        <a class="logo" href="index.php">MOTRIX</a>
        <nav class="main-nav">
          <a href="index.php">Inicio</a>
          <a href="carros.php" class="active">Carro</a>
          <a href="motos.php">Moto</a>
          <a href="vender.php">Vender tu vehículo</a>
        </nav>
      </div>
      <div class="nav-right">
        <a href="login.php" class="link-login">Inicia sesión</a>
        <a href="register.php" class="btn-register">Regístrate</a>
      </div>
    </div>
  </header>

  <!-- HERO CARROS -->
  <section class="hero-cars">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1>Encuentra tu carro ideal</h1>
      <p>Explora las mejores opciones en Motrix</p>
    </div>
  </section>

  <!-- LISTA DE CARROS -->
  <section class="cars-list container">
    <h2>Carros destacados</h2>
    <div class="card-grid">
      <div class="card">
        <img src="img/lambo1.jpg" alt="Carro 1">
        <h3>Lamborigini De temu</h3>
        <p>Precio: $58.000.000 COP</p>
      </div>
      <div class="card">
        <img src="img/bmw.jpg" alt="Carro 2">
        <h3>bmw modelo 70</h3>
        <p>Precio: $75.000.000 COP</p>
      </div>
      <div class="card">
        <img src="img/pichi.jpg" alt="Carro 3">
        <h3>Escarbajo modelo 70</h3>
        <p>Precio: $42.000.000 COP</p>
      </div>
    </div>
  </section>

  <!-- INFORMACIÓN EXTRA -->
  <section class="info container">
    <h2>¿Por qué vender tu carro con Motrix?</h2>
    <p>
      En Motrix te ofrecemos un espacio seguro, confiable y rápido para vender tu vehículo.
      Al publicar con nosotros, tu carro será visto por miles de compradores interesados.
      Además, contarás con asesoría en todo el proceso y herramientas de cotización que 
      te ayudarán a obtener el mejor precio.
    </p>
    <p>
      Vende fácil, rápido y seguro. ¡Con Motrix todo es más sencillo!
    </p>
  </section>

</body>
</html>
