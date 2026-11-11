<?php
$host = "db";
$user = "root";
$pass = "root";
$db   = "hola_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "<h1>Hola mundo</h1>";
echo "<p>Conectado a MySQL correctamente ✅</p>";

$conn->close();
?>