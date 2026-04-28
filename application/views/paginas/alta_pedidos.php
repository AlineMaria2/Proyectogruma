<div class="container" style="margin-top: 150px; margin-bottom: 100px; display: flex; justify-content: center;">
    
    <div style="width: 100%; max-width: 450px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        
        <div style="display: flex; align-items: center; margin-bottom: 30px;">
            <i class="fa-solid fa-user" style="font-size: 35px; margin-right: 15px;"></i>
            <h1 style="font-size: 32px; margin: 0; color: #333; font-weight: 500;">Inicio de Sesion</h1>
        </div>

        <form action="#" method="POST" style="padding-left: 20px;">
            
            <div style="display: flex; align-items: center; margin-bottom: 20px;">
                <label style="width: 120px; font-weight: bold; color: #333;">Usuario</label>
                <input type="text" name="usuario" placeholder="Usuario" style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 4px; outline: none;">
            </div>

            <div style="display: flex; align-items: center; margin-bottom: 20px;">
                <label style="width: 120px; font-weight: bold; color: #333;">Contraseña</label>
                <input type="password" name="password" placeholder="Contraseña" style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 4px; outline: none;">
            </div>

            <div style="display: flex; align-items: center; margin-bottom: 25px;">
                <div style="width: 120px;"></div> <div id="captcha-container" onclick="activarCaptcha()" style="background: #f9f9f9; border: 1px solid #d3d3d3; border-radius: 3px; padding: 10px; display: flex; align-items: center; width: 100%; cursor: pointer; user-select: none;">
                    <div id="captcha-box" style="width: 20px; height: 20px; border: 2px solid #c1c1c1; background: #fff; border-radius: 2px; display: flex; align-items: center; justify-content: center;">
                        <i id="captcha-check" class="fa-solid fa-check" style="color: #00a651; display: none; font-size: 14px;"></i>
                    </div>
                    <span style="margin-left: 10px; font-size: 13px; color: #555;">No soy un robot</span>
                    <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA" style="margin-left: auto; width: 25px;">
                </div>
            </div>

            <div style="display: flex; justify-content: center; margin-bottom: 40px;">
                <button type="submit" style="background: #fff; border: 1px solid #999; padding: 8px 30px; border-radius: 4px; cursor: pointer; color: #333; font-size: 14px;">
                    Ingresar
                </button>
            </div>
        </form>

        <div style="text-align: center; font-size: 14px; line-height: 2.5;">
            <p style="margin: 0;">¿No tienes cuenta? <a href="#" style="color: #055212; text-decoration: none;">Solicitala aqui <i class="fa-solid fa-hand-point-left"></i></a></p>
            <p style="margin: 0;">¿Ya eres cliente Minsa? <a href="#" style="color: #055212; text-decoration: none;">Solicita tu acceso aqui <i class="fa-solid fa-pen-to-square"></i></a></p>
            
            <div style="margin-top: 40px;">
                <a href="#" style="color: #055212; text-decoration: none; display: block;">Terminos y condiciones <i class="fa-solid fa-book"></i></a>
                <a href="#" style="color: #055212; text-decoration: none; display: block;">Aviso de privacidad <i class="fa-solid fa-file-lines"></i></a>
            </div>
        </div>

    </div>
</div>

<script>
function activarCaptcha() {
    document.getElementById('captcha-box').style.borderColor = "#00a651";
    document.getElementById('captcha-check').style.display = "block";
}
</script>