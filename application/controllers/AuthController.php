<?php
session_start();

if (isset($_POST['submit'])) {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Usuario de prueba (después conectas BD)
    if ($username === 'admin' && $password === '1234') {
        $_SESSION['usuario'] = $username;
        header('Location: ../Proyectogruma/application/views/paginas/inicio.php');
        exit;
    } else {
        $_SESSION['login_error'] = 'Usuario o contraseña incorrectos.';
        header('Location: ../Proyectogruma/application/views/paginas/login.php');
        exit;
    }
}
?>