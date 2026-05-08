<?php $this->load->view('secciones/header'); ?>

<div class="container" style="margin-top: 150px; margin-bottom: 100px; display: flex; justify-content: center;">
    
    <div style="
        width: 100%; 
        max-width: 450px; 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 25px rgba(0,0,0,0.15);
        padding: 40px 35px;
        text-align: center;
    ">
        
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="Gruma" style="width: 85px; margin-bottom: 15px;">

        <h1 style="font-size: 26px; margin: 0 0 30px 0; color: #333; font-weight: 600;">Bienvenido a Gruma</h1>

        <form action="#" method="POST" style="text-align: left;">
            
            <div style="margin-bottom: 18px;">
                <label style="display: block; font-weight: bold; color: #333; margin-bottom: 5px; font-size: 13px;">Usuario *</label>
                <input type="text" name="usuario" placeholder="Enter your Username" style="width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 6px; outline: none; font-size: 14px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 18px;">
                <label style="display: block; font-weight: bold; color: #333; margin-bottom: 5px; font-size: 13px;">Contraseña *</label>
                <input type="password" name="password" placeholder="Enter your Password" style="width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 6px; outline: none; font-size: 14px; box-sizing: border-box;">
            </div>

            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 18px;">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember" style="font-size: 13px; color: #555;">Remember me</label>
            </div>

            <div style="margin-bottom: 20px;">
                <div id="captcha-container" onclick="activarCaptcha()" style="background: #f9f9f9; border: 1px solid #d3d3d3; border-radius: 3px; padding: 10px; display: flex; align-items: center; cursor: pointer; user-select: none;">
                    <div id="captcha-box" style="width: 20px; height: 20px; border: 2px solid #c1c1c1; background: #fff; border-radius: 2px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <i id="captcha-check" class="fa-solid fa-check" style="color: #00a651; display: none; font-size: 14px;"></i>
                    </div>
                    <span style="margin-left: 10px; font-size: 13px; color: #555;">No soy un robot</span>
                    <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA" style="margin-left: auto; width: 25px;">
                </div>
            </div>

            <button type="submit" style="
                width: 100%; 
                padding: 11px; 
                background-color: #1a6b3c; 
                color: white; 
                border: none; 
                border-radius: 6px; 
                font-size: 15px; 
                cursor: pointer; 
                font-weight: bold;
            ">Acceso</button>
        </form>

        <div style="margin-top: 16px; font-size: 13px; color: #555;">
            <a href="#" style="color: #1a6b3c; text-decoration: none; display: block; margin-top: 5px;">¿Se te olvidó tu contraseña?</a>
            <a href="#" style="color: #1a6b3c; text-decoration: none; display: block; margin-top: 5px;">¿No tienes una cuenta?</a>
        </div>

    </div>
</div>

<script>
function activarCaptcha() {
    document.getElementById('captcha-box').style.borderColor = "#00a651";
    document.getElementById('captcha-check').style.display = "block";
}
</script>

<?php $this->load->view('secciones/footer'); ?>