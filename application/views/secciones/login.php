<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Gruma</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-card {
            background: white;
            padding: 40px 35px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 380px;
            text-align: center;
        }

        .login-card img.logo {
            width: 90px;
            margin-bottom: 20px;
        }

        .login-card h2 {
            color: #1a1a2e;
            font-size: 22px;
            margin-bottom: 25px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
        }

        .form-group input:focus {
            border-color: #1a6b3c;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: #555;
            margin-bottom: 16px;
        }

        .recaptcha-wrapper {
            display: flex;
            justify-content: center;
            margin-bottom: 16px;
        }

        .btn-login {
            width: 100%;
            padding: 11px;
            background-color: #1a6b3c;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-login:hover { background-color: #145c32; }

        .links {
            margin-top: 16px;
            font-size: 13px;
            color: #555;
        }

        .links a {
            color: #1a6b3c;
            text-decoration: none;
            display: block;
            margin-top: 5px;
        }

        .links a:hover { text-decoration: underline; }

        .error-msg {
            background: #ffe0e0;
            color: #c00;
            padding: 10px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 14px;
        }
    </style>
</head>
<body>

<div class="login-card">

    <img src="../../../assets/img/logo.png" alt="Gruma" class="logo">

    <h2>Bienvenido a Gruma</h2>

    <?php if (isset($_SESSION['login_error'])): ?>
        <div class="error-msg">
            <?= $_SESSION['login_error']; unset($_SESSION['login_error']); ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="../../../controllers/AuthController.php">

        <div class="form-group">
            <label>Username *</label>
            <input type="text" name="username" placeholder="Enter your Username" required>
        </div>

        <div class="form-group">
            <label>Password *</label>
            <input type="password" name="password" placeholder="Enter your Password" required>
        </div>

        <div class="remember">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </div>

        <div class="recaptcha-wrapper">
            <div class="g-recaptcha" data-sitekey="TU_SITE_KEY_AQUI"></div>
        </div>

        <button type="submit" name="submit" class="btn-login">Acceso</button>
    </form>

    <div class="links">
        <a href="#">¿Se te olvidó tu contraseña?</a>
        <a href="#">¿No tienes una cuenta?</a>
    </div>

</div>

</body>
</html>