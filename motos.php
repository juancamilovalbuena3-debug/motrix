<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Motos - Motrix</title>
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
          <a href="carros.php">Carro</a>
          <a href="motos.php" class="active">Moto</a>
          <a href="vender.php">Vender tu vehículo</a>
        </nav>
      </div>
      <div class="nav-right">
        <a href="login.php" class="link-login">Inicia sesión</a>
        <a href="register.php" class="btn-register">Regístrate</a>
      </div>
    </div>
  </header>

  <!-- HERO MOTOS -->
  <section class="hero-motos">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1>Descubre tu moto perfecta</h1>
      <p>Encuentra el estilo y la velocidad que buscas en Motrix</p>
    </div>
  </section>

  <!-- LISTA DE MOTOS -->
  <section class="motos-list container">
    <h2>Motos destacadas</h2>
    <div class="card-grid">
      <div class="card">
        <img src="img/moto11.png" alt="Moto 1">
        <h3>Yamaha FZ 2.0</h3>
        <p>Precio: $9.500.000 COP</p>
      </div>
      <div class="card">
        <img src="img/moto2.png" alt="Moto 2">
        <h3>Honda CB 190R</h3>
        <p>Precio: $12.800.000 COP</p>
      </div>
      <div class="card">
        <img src="img/moto3.png" alt="Moto 3">
        <h3>Kawasaki Z400</h3>
        <p>Precio: $28.000.000 COP</p>
      </div>
    </div>
  </section>

  <!-- INFORMACIÓN EXTRA -->
  <section class="info container">
    <h2>¿Por qué comprar o vender tu moto con Motrix?</h2>
    <p>
      En Motrix nos apasiona la velocidad y la libertad que una moto puede darte. 
      Con nosotros podrás publicar tu moto usada fácilmente o encontrar la que mejor se ajuste a tu estilo de vida.
    </p>
    <p>
      Ofrecemos un sistema confiable, asesoría personalizada y miles de compradores interesados.
      ¡Vive la experiencia de dos ruedas con Motrix!
    </p>
  </section>

</body>
</html>
