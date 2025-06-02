<?php
include '../includes/conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$pais = $_POST['pais'];
$comentario = $_POST['comentario'];

$sql = "INSERT INTO comentarios (nombre, apellido, email, pais, comentario)
        VALUES ('$nombre', '$apellido', '$email', '$pais', '$comentario')";

if ($conn->query($sql) === TRUE) {
  // Redirige con un mensaje en la URL (opcional)
  header('Location: ../index.php?mensaje=comentario_enviado');
  exit();
} else {
  // Redirige con mensaje de error
  header('Location: ../index.php?mensaje=error');
  exit();
}

$conn->close();
