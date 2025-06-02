<?php
session_start();
include '../includes/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Consulta segura (evita inyección SQL)
    $stmt = $conn->prepare("SELECT id, password FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['admin'] = $row['id'];
            header('Location: ../admin/dashboard.php');
            exit;
        } else {
            // Contraseña incorrecta
            header('Location: ../public/login.php?error=wrong_password');
            exit;
        }
    } else {
        // Usuario no encontrado
        header('Location: ../public/login.php?error=not_found');
        exit;
    }

    $stmt->close();
    $conn->close();
} else {
    // Acceso no autorizado (sin POST)
    header('Location: ../public/login.php');
    exit;
}
