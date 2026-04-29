<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_captcha = $_POST['captcha_input'];
    $real_captcha = $_SESSION['captcha_code'];

    // 1. Validar el CAPTCHA
    if ($user_captcha === $real_captcha) {
        
        // 2. Aquí iría tu lógica de base de datos
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        if ($usuario == "admin" && $password == "1234") {
            echo "¡Login exitoso! Bienvenido.";
        } else {
            echo "Usuario o contraseña incorrectos.";
        }

    } else {
        echo "Error: El código CAPTCHA no coincide.";
    }
}
?>