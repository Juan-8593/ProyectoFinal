<!-- Encabezado, tenemos todas las cosas del menu principa // FALTA CONECTAR CREO -->
<header>
  <img src="Logo.jpg" alt="JJLCAR Logo" class="logo">
  <h1>JJLCAR - Tienda de Carros</h1>
</header>

<nav>
  <a href="#vehiculos">Vehículos</a>
  <a href="#cotizacion">Cotización</a>
  <a href="#faq">Preguntas Frecuentes</a>
  <a href="#login">Login / Registrarse</a>
</nav>
<!-- Cuerpo de la pagona web // Sin conectar -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>JJLCAR - Tienda de Carros</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #0A0D3A;
      color: white;
    }

    header {
      text-align: center;
      padding: 20px;
    }

    .logo {
      width: 180px;
      margin-bottom: 10px;
    }

    nav {
      display: flex;
      justify-content: center;
      background-color: #0A0D3A;
      padding: 10px 0;
      border-bottom: 2px solid white;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 20px;
      font-weight: bold;
    }

    nav a:hover {
      color: #cccccc;
    }

    section {
      padding: 40px 20px;
      text-align: center;
    }

    .vehiculos-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 20px;
    }

    .card {
      background-color: #1A1F5A;
      border-radius: 10px;
      padding: 20px;
      width: 250px;
      box-shadow: 0 0 10px rgba(255,255,255,0.1);
    }

    .card img {
      width: 100%;
      border-radius: 8px;
    }

    .card h3 {
      margin-top: 10px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #1A1F5A;
      padding: 20px;
      border-radius: 10px;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 5px;
    }

    button {
      padding: 10px 20px;
      background-color: white;
      color: #0A0D3A;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background-color: #ccc;
    }

    h1, h2 {
      color: white;
    }
  </style>
</head>
<body>
  
 <!-- Falta codigo, dando error linea 125 -->
  <?php include 'header.php'; ?>

  <section id="vehiculos">
    <h2>Vehículos Disponibles</h2>
    <div class="vehiculos-container">
      <div class="card">
        <img src="" alt="Carro ">
        <h3>Modelo A</h3>
        <p>Precio: Q.0</p>
      </div>
      <div class="card">
        <img src="" alt="Carro ">
        <h3>Modelo B</h3>
        <p>Precio: Q.0</p>
      </div>
      <div class="card">
        <img src="" alt="Carro ">
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
    <p><strong>¿Qué documentos necesito?</strong><br> Identificación oficial, comprobante de domicilio y comprobante de ingresos.</p>
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
<!-- Falta la conexion a la base de datos -->
