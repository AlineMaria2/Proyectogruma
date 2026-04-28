<div class="container" style="margin-top: 120px; margin-bottom: 50px;">
    <div style="text-align: center; margin-bottom: 40px;">
        <h1 style="color: #007A3D; font-weight: bold;">Contáctanos</h1>
        <p>Estamos para escucharte. Envíanos tus dudas o comentarios.</p>
    </div>

    <div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">
        
        <div style="flex: 1; min-width: 320px; max-width: 550px; background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <form action="#" method="POST" id="formContacto">
                <div style="margin-bottom: 15px;">
                    <label style="display: block; color: #003087; font-weight: bold;">Nombre Completo</label>
                    <input type="text" name="nombre" placeholder="Tu nombre..." style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                </div>
                
                <div style="margin-bottom: 15px;">
                    <label style="display: block; color: #003087; font-weight: bold;">Correo Electrónico</label>
                    <input type="email" name="correo" placeholder="ejemplo@correo.com" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display: block; color: #003087; font-weight: bold;">Mensaje</label>
                    <textarea name="mensaje" rows="4" placeholder="¿En qué podemos ayudarte?" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;"></textarea>
                </div>

                <div id="captcha-container" style="background: #f9f9f9; border: 1px solid #d3d3d3; border-radius: 3px; padding: 15px; margin-bottom: 20px; display: flex; align-items: center; width: 100%; max-width: 300px; cursor: pointer; user-select: none;" onclick="activarCaptcha()">
                    <div id="captcha-box" style="width: 24px; height: 24px; border: 2px solid #c1c1c1; background: #fff; border-radius: 2px; display: flex; align-items: center; justify-content: center; transition: 0.3s;">
                        <i id="captcha-check" class="fa-solid fa-check" style="color: #00a651; display: none; font-size: 18px;"></i>
                    </div>
                    <span style="margin-left: 15px; font-family: Arial; font-size: 14px; color: #555;">No soy un robot</span>
                    <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA" style="margin-left: auto; width: 30px;">
                </div>

                <button type="submit" style="background: #007A3D; color: white; border: none; padding: 12px 25px; border-radius: 25px; cursor: pointer; width: 100%; font-weight: bold; font-size: 16px; transition: 0.3s;">
                    Enviar Mensaje
                </button>
            </form>
        </div>

        <div style="flex: 1; min-width: 320px; max-width: 400px; padding: 20px;">
            <h3 style="color: #007A3D; border-bottom: 3px solid #FFD100; display: inline-block; padding-bottom: 5px;">Información de Contacto</h3>
            
            <div style="margin-top: 25px;">
                <p style="margin-bottom: 15px;"><strong>Interior de la República:</strong><br>
                <a href="tel:8007125050" style="color: #003087; text-decoration: none; font-size: 18px;">800 712 5050</a></p>
                
                <p style="margin-bottom: 15px;"><strong>Área Metropolitana / CDMX:</strong><br>
                <a href="tel:5553669905" style="color: #003087; text-decoration: none; font-size: 18px;">55 5366 9905</a></p>
                
                <p style="margin-bottom: 15px; background: #f0f7f3; padding: 15px; border-left: 5px solid #00a651;">
                    <strong style="color: #007A3D;"><i class="fa-solid fa-clock"></i> Servicio al cliente:</strong><br>
                    Lunes a Viernes: 8:00 am - 8:00 pm<br>
                    Sábado: 9:00 am - 2:00 pm
                </p>

                <p style="margin-bottom: 15px;">
                    <strong style="color: #003087;"><i class="fa-solid fa-location-dot"></i> Dirección:</strong><br>
                    Av. Toltecas 4, Los Reyes Ixtacala,<br>
                    Tlalnepantla, Estado de México
                </p>
            </div>
        </div>

    </div>
</div>

<script>
function activarCaptcha() {
    const box = document.getElementById('captcha-box');
    const check = document.getElementById('captcha-check');
    
    // Cambiamos el estilo del cuadro y mostramos la palomita
    box.style.borderColor = "#00a651";
    check.style.display = "block";
}
</script>