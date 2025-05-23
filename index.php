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
  <h1>JJLCAR'S</h1>
</header>

<nav>
  <a href="#vehiculos">Vehículos</a>
  <a href="#cotizacion">Cotización</a>
  <a href="#faq">Preguntas Frecuentes</a>
  <a href="registro_login.html">Iniciar Sesion</a>

</nav>


  <section id="vehiculos">
    <h2>Vehículos Disponibles</h2>
    <div class="vehiculos-container">
      <div class="card">
        <img src="" alt="Carro 1">
        <h3>Modelo A</h3>
        <p>Precio: Q.0</p>
      </div>
      <div class="card">
        <img src="" alt="Carro 2">
        <h3>Modelo B</h3>
        <p>Precio: Q.0</p>
      </div>
      <div class="card">
        <img src="" alt="Carro 3">
        <h3>Modelo C</h3>
        <p>Precio: Q.0</p>
      </div>
    </div>
  </section>

  <section id="cotizacion">
  <h2>Solicita una Cotización</h2>
  <form action="cotizacion.php" method="POST">
  <input type="nom" name="nom" placeholder="Ingresa tu nombre" required>
    <input type="email" name="correo" placeholder="Tu correo" required>
    <input type="text" name="modelo" placeholder="Modelo de vehículo" required>
    <textarea name="comentarios" placeholder="Comentarios adicionales" rows="4"></textarea>
    <button type="submit">Enviar Cotización</button>
  </form>
</section>


  <section id="faq">
    <h2>Preguntas Frecuentes</h2>
    <p><strong>¿Dónde se encuentran ubicados?</strong><br> Estamos en Ciudad Automotriz, Calle Principal #123.</p>
    <p><strong>¿Aceptan financiamiento?</strong><br> Sí, contamos con planes de financiamiento personalizados.</p>
    <p><strong>¿Qué documentos necesito?</strong><br> Identificación persona, comprobante de domicilio y comprobante de ingresos.</p>
  </section>

