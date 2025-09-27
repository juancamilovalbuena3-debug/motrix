<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Motrix</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- NAVBAR -->
  <header class="navbar">
    <div class="container nav-inner">
      <div class="nav-left">
        <a class="logo" href="index.php">MOTRIX</a>
        <nav class="main-nav">
          <a href="index.php" class="active">Inicio</a>
          <a href="carros.php">Carro</a>
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

  <!-- HERO / SLIDER (solo aparece en la página de Inicio) -->
  <main>
    <section class="hero-slider">
      <div class="slide" style="background-image:url('img/auto1.jpg')"></div>
      <div class="slide" style="background-image:url('img/auto2.jpg')"></div>
      <div class="slide" style="background-image:url('img/auto3.jpg')"></div>

      <div class="hero-overlay"></div>

      <div class="hero-content">
        <h1>Tu próximo vehículo está en Motrix</h1>
        <p>Busca, compara y encuentra el mejor precio en carros y motos.</p>
        <div class="hero-cta">
          <a href="carros.php" class="btn-primary">Explorar Vehículos</a>
          <a href="vender.php" class="btn-outline">Vender mi vehículo</a>
        </div>
      </div>
    </section>

    <!-- Ejemplo de sección inferior sencilla -->
    <section class="cards">
      <div class="container">
        <h2>Explora categorías</h2>
        <div class="card-grid">
          <div class="card">
            <img src="img/auto5.jpg" alt="Carros (placeholder)">
            <h3>Carros</h3>
            <p>Encuentra carros usados y nuevos.</p>
          </div>
          <div class="card">
            <img src="img/moto1.jpg" alt="Motos (placeholder)">
            <h3>Motos</h3>
            <p>Oferta en motos de todo tipo.</p>
          </div>
          <div class="card">
            <img src="img/auto4.jpg" alt="Vender (placeholder)">
            <h3>Vender</h3>
            <p>Publica tu vehículo en minutos.</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="slider.js"></script>
</body>
</html>
