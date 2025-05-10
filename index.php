<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>JJLCAR - Tienda de Carros</title>
  <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
<header>
  <img src="img/logo.jpg" alt="JJLCAR Logo" class="logo">
  <h1>JJLCAR - Tienda de Carros</h1>
</header>

<nav>
  <a href="#vehiculos">Vehículos</a>
  <a href="#cotizacion">Cotización</a>
  <a href="#faq">Preguntas Frecuentes</a>
  <a href="#login">Login / Registrarse</a>
</nav>

  <?php include 'header.php'; ?>

  <section id="vehiculos">
    <h2>Vehículos Disponibles</h2>
    <div class="vehiculos-container">
      <div class="card">
        <img src="https://via.placeholder.com/250x150?text=Carro+1" alt="Carro 1">
        <h3>Modelo A</h3>
        <p>Precio: Q.0</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/250x150?text=Carro+2" alt="Carro 2">
        <h3>Modelo B</h3>
        <p>Precio: Q.0</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/250x150?text=Carro+3" alt="Carro 3">
        <h3>Modelo C</h3>
        <p>Precio: Q.0</p>
      </div>
    </div>
  </section>

  <section id="cotizacion">
    <h2>Solicita una Cotización</h2>
    <form action="cotizar.php" method="POST">
      <input type="text" name="nombre" placeholder="Nombre completo" required>
      <input type="email" name="correo" placeholder="Correo electrónico" required>
      <select name="modelo" required>
        <option value="">Selecciona un modelo</option>
        <option>Modelo A</option>
        <option>Modelo B</option>
        <option>Modelo C</option>
      </select>
      <textarea name="comentarios" placeholder="Comentarios adicionales"></textarea>
      <button type="submit">Enviar Cotización</button>
    </form>
  </section>

  <section id="faq">
    <h2>Preguntas Frecuentes</h2>
    <p><strong>¿Dónde se encuentran ubicados?</strong><br> Estamos en Ciudad Automotriz, Calle Principal #123.</p>
    <p><strong>¿Aceptan financiamiento?</strong><br> Sí, contamos con planes de financiamiento personalizados.</p>
    <p><strong>¿Qué documentos necesito?</strong><br> Identificación persona, comprobante de domicilio y comprobante de ingresos.</p>
  </section>

  <section id="login">
    <h2>Login / Registrarse</h2>
    <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="Correo electrónico" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Iniciar Sesión</button>
    </form>
    <p>¿No tienes cuenta? <a href="#" style="color:#ccc;">Regístrate aquí</a></p>
  </section>

</body>
</html>
