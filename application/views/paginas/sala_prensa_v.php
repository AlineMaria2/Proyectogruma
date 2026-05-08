<div style="font-family: Arial, sans-serif; background-color: #f4f4f4;">

    <div style="
        width: 100%; 
        height: 300px; 
        background-image: linear-gradient(rgba(0, 45, 114, 0.6), rgba(0, 45, 114, 0.6)), url('https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=1350&q=80'); 
        background-size: cover; 
        background-position: center; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        color: white; 
        text-align: center;">
        <div>
            <h1 style="font-size: 3rem; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 2px;">Sala de Prensa</h1>
            <p style="font-size: 1.2rem; opacity: 0.9;">Mantente al día con nuestras últimas actualizaciones</p>
        </div>
    </div>

    <div style="padding: 40px 10%; background-color: #f9f9f9;">
        <p style="margin-bottom: 30px; font-size: 0.9rem; color: #555;">
            Inicio » Sala de Prensa » <b style="color: #002d72;">Noticias</b>
        </p>

        <div style="margin-top: 10px;">
            <?php foreach($noticias as $n): ?>
                <div style="background: white; padding: 25px; margin-bottom: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-left: 6px solid #00833e; transition: transform 0.2s;">
                    <small style="color: #888; font-weight: bold; text-transform: uppercase; font-size: 0.75rem;">
                        📅 <?= $n['fecha'] ?>
                    </small>
                    <h3 style="color: #002d72; margin: 10px 0; font-size: 1.5rem;">
                        <?= $n['titulo'] ?>
                    </h3>
                    <p style="line-height: 1.6; color: #444;">
                        <?= $n['extracto'] ?>
                    </p>
                    <a href="#" style="color: #00833e; font-weight: bold; text-decoration: none; display: inline-block; margin-top: 10px;">
                        Leer más →
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>