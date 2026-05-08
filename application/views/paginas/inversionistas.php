<style>
    :root {
        --verde-gruma: #00833e;
        --amarillo-gruma: #ffda00;
        --blanco: #ffffff;
    }

    .inversionistas-container {
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    .banner-inversionistas {
        background: linear-gradient(rgba(0, 131, 62, 0.8), rgba(0, 131, 62, 0.8)), 
                    url('<?= base_url('assets/img/banner_gruma.jpg') ?>');
        background-size: cover;
        background-position: center;
        height: 300px;
        display: flex;
        align-items: center;
        padding: 0 10%;
        color: var(--blanco);
    }

    .banner-inversionistas h1 {
        font-size: 3rem;
        border-left: 5px solid var(--amarillo-gruma);
        padding-left: 20px;
        text-transform: uppercase;
    }

    .reportes-seccion {
        padding: 50px 10%;
        background-color: #f9f9f9;
    }

    .acordeon-item {
        background: var(--blanco);
        margin-bottom: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .acordeon-header {
        background: var(--blanco);
        padding: 20px;
        cursor: pointer;
        display: flex;
        align-items: center;
        font-weight: bold;
        transition: 0.3s;
    }

    .acordeon-header:hover {
        background: #f0f0f0;
        color: var(--verde-gruma);
    }

    .acordeon-header i {
        margin-right: 15px;
        color: var(--verde-gruma);
        transition: 0.3s;
    }

    .acordeon-content {
        display: none;
        padding: 20px;
        border-top: 1px solid #eee;
    }

    .lista-reportes {
        list-style: none;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 15px;
    }

    .lista-reportes li a {
        text-decoration: none;
        color: #555;
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #eee;
        transition: 0.2s;
    }

    .lista-reportes li a:hover {
        color: var(--verde-gruma);
        border-color: var(--verde-gruma);
        background: #f0fff7;
    }

    .lista-reportes i {
        margin-right: 8px;
        color: #d9534f;
        font-size: 1.2rem;
    }

    .lista-reportes i.fa-chart-line {
        color: var(--verde-gruma);
    }

    .tabla-financiera {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
        margin-top: 10px;
    }

    .tabla-financiera th {
        background: var(--verde-gruma);
        color: white;
        padding: 10px 15px;
        text-align: left;
    }

    .tabla-financiera td {
        padding: 10px 15px;
        border-bottom: 1px solid #eee;
    }

    .tabla-financiera tr:hover td {
        background: #f0fff7;
    }

    .tabla-financiera .positivo { color: var(--verde-gruma); font-weight: bold; }
    .tabla-financiera .negativo { color: #d9534f; font-weight: bold; }
</style>

<div class="inversionistas-container">

    <section class="banner-inversionistas">
        <h1>Inversionistas</h1>
    </section>

    <section class="reportes-seccion">
        <h2 style="color: var(--verde-gruma); margin-bottom: 30px;">Información Financiera</h2>

        <div class="acordeon-item">
            <div class="acordeon-header" onclick="toggleAcordeon('datos1t26')">
                <i class="fas fa-chevron-right" id="icon-datos1t26"></i> Datos Sobresalientes 1T26
            </div>
            <div class="acordeon-content" id="datos1t26">
                <table class="tabla-financiera">
                    <thead>
                        <tr>
                            <th>Concepto (USD millones)</th>
                            <th>1T26</th>
                            <th>1T25</th>
                            <th>VAR (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Volumen (miles de ton.)</td><td>1,068</td><td>1,062</td><td class="positivo">+1%</td></tr>
                        <tr><td>Ventas Netas</td><td>1,624.7</td><td>1,548.5</td><td class="positivo">+5%</td></tr>
                        <tr><td>Utilidad de Operación</td><td>189.2</td><td>217.1</td><td class="negativo">-13%</td></tr>
                        <tr><td>Margen Operativo</td><td>11.6%</td><td>14.0%</td><td class="negativo">-240pb</td></tr>
                        <tr><td>UAFIRDA</td><td>261.9</td><td>276.0</td><td class="negativo">-5%</td></tr>
                        <tr><td>Resultado Neto Mayoritario</td><td>100.6</td><td>125.9</td><td class="negativo">-20%</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

<div class="acordeon-item">

    <div class="acordeon-header" onclick="toggleAcordeon('trimestrales')">
        <i class="fas fa-chevron-right" id="icon-trimestrales"></i> Reportes Trimestrales
    </div>

    <div class="acordeon-content" id="trimestrales">

        <p style="color:#555; margin-bottom:15px; font-size:14px;">
            <strong>2026</strong> — Primer Trimestre
        </p>

        <ul class="lista-reportes">

            <li>
                <a href="<?= base_url('assets/docs/gruma.pdf') ?>" target="_blank">
                    <i class="fas fa-file-pdf"></i> 1T26 - Reporte de Resultados
                </a>
            </li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> 4T25 - Reporte de Resultados</a></li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> 3T25 - Reporte de Resultados</a></li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> 2T25 - Reporte de Resultados</a></li>
                </ul>
            </div>
        </div>

        <div class="acordeon-item">
            <div class="acordeon-header" onclick="toggleAcordeon('estados')">
                <i class="fas fa-chevron-right" id="icon-estados"></i> Estados Financieros Auditados
            </div>
            <div class="acordeon-content" id="estados">
                <ul class="lista-reportes">
                    <li><a href="#"><i class="fas fa-file-pdf"></i> Reporte Auditado 2025</a></li>
                    <li><a href="#"><i class="fas fa-file-pdf"></i> Reporte Auditado 2024</a></li>
                </ul>
            </div>
        </div>

        <div class="acordeon-item">
            <div class="acordeon-header" onclick="toggleAcordeon('prospectos')">
                <i class="fas fa-chevron-right" id="icon-prospectos"></i> Prospectos
            </div>
            <div class="acordeon-content" id="prospectos">
                <ul class="lista-reportes">
                    <li><a href="#"><i class="fas fa-file-pdf"></i> Prospecto 2025</a></li>
                    <li><a href="#"><i class="fas fa-file-pdf"></i> Prospecto 2024</a></li>
                </ul>
            </div>
        </div>

        <div class="acordeon-item">
            <div class="acordeon-header" onclick="toggleAcordeon('responsables')">
                <i class="fas fa-chevron-right" id="icon-responsables"></i> Responsables de Información
            </div>
            <div class="acordeon-content" id="responsables">
                <p style="color:#555; font-size:14px; line-height:1.8;">
                    <strong>Investor Relations</strong><br>
                    ir@GRUMA.com<br>
                    Tel: 52 (81) 8399-3349<br>
                    <a href="https://www.gruma.com" target="_blank" style="color: var(--verde-gruma);">www.GRUMA.com</a><br><br>
                    San Pedro Garza García, N.L., México
                </p>
            </div>
        </div>

    </section>

    <!-- VISOR PDF -->
    <div id="visor-pdf" style="display:none; padding: 30px 10%; background:#f9f9f9;">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px;">
            <h3 style="color:#00833e; margin:0;">1T26 - Reporte de Resultados</h3>
            <button onclick="cerrarPDF()" style="
                background:#00833e;
                color:white;
                border:none;
                padding:8px 18px;
                border-radius:20px;
                cursor:pointer;
                font-weight:bold;
            ">✕ Cerrar</button>
        </div>
        <iframe id="iframe-pdf" src="" width="100%" height="700px" style="border:none; border-radius:10px;"></iframe>
    </div>

</div>

<script>
    function abrirPDF(url) {
        document.getElementById('iframe-pdf').src = url;
        document.getElementById('visor-pdf').style.display = 'block';
        document.getElementById('visor-pdf').scrollIntoView({behavior: 'smooth'});
    }

    function cerrarPDF() {
        document.getElementById('visor-pdf').style.display = 'none';
        document.getElementById('iframe-pdf').src = '';
    }

    function toggleAcordeon(id) {
        const content = document.getElementById(id);
        const icon = document.getElementById('icon-' + id);
        
        if (content.style.display === "block") {
            content.style.display = "none";
            icon.style.transform = "rotate(0deg)";
        } else {
            content.style.display = "block";
            icon.style.transform = "rotate(90deg)";
        }
    }
</script>