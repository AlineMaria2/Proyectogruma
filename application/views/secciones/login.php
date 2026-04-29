<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Inicio de Sesión</title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    /* Barra superior */
    .header {
        background-color: #0a7a33;
        color: white;
        padding: 15px 30px;
        font-size: 20px;
        font-weight: bold;
    }

    /* Fondo tipo banner */
    .banner {
        background: linear-gradient(rgba(10,122,51,0.9), rgba(10,122,51,0.9)),
                    url('https://images.unsplash.com/photo-1500382017468-9049fed747ef');
        background-size: cover;
        background-position: center;
        height: 180px;
        display: flex;
        align-items: center;
        padding-left: 40px;
        color: white;
        font-size: 28px;
        font-weight: bold;
    }

    /* Contenedor */
    .container {
        display: flex;
        justify-content: center;
        margin-top: -60px;
    }

    /* Caja login */
    .login-box {
        background: white;
        padding: 30px;
        width: 350px;
        border-radius: 10px;
        box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
    }

    .login-box h2 {
        text-align: center;
        color: #0a7a33;
    }

    .input-group {
        margin: 15px 0;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .btn {
        width: 100%;
        padding: 10px;
        background-color: #0a7a33;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .btn:hover {
        background-color: #066128;
    }

    .footer {
        margin-top: 40px;
        text-align: center;
        color: #666;
        font-size: 14px;
    }
</style>
</head>

<body>

<div class="header">
    Empresa - Inversionistas
</div>

<div class="banner">
    INICIO DE SESIÓN
</div>

<div class="container">
    <div class="login-box">
        <h2>Acceder</h2>

        <form>
            <div class="input-group">
                <label>Usuario</label>
                <input type="text" placeholder="Ingresa tu usuario">
            </div>

            <div class="input-group">
                <label>Contraseña</label>
                <input type="password" placeholder="Ingresa tu contraseña">
            </div>

            <button class="btn">Iniciar sesión</button>
        </form>
    </div>
</div>

<div class="footer">
    © 2026 Empresa | Todos los derechos reservados
</div>

</body>
</html>