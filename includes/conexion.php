<?php
$host = "basedatos_web";
$user = "usuario_david";
$password = "1234";
$db = "santuario_web";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
