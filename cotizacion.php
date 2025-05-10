<?php

$servername = "localhost";
$username = "root";
$password = "";   
$dbname = "jjlcars"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$Id_Datos = $_POST['Id_Datos'];
$nom = $_POST['nom'];
$correo = $_POST['correo'];
$modelo = $_POST['modelo'];
$comentarios = $_POST['comentarios'];

$sql = "INSERT INTO cotizacion (nom, correo, modelo, comentarios) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nom, $correo, $modelo, $comentarios);

if ($stmt->execute()) {
    header("Location: index.php?mensaje=cotizacion_enviada");
    exit();
} else {
    echo "Error al guardar cotización: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
