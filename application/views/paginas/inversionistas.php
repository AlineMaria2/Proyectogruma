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

    /* Banner Principal estilo Minsa */
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

    /* Sección de Reportes */
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
        border-bottom: 2px solid transparent;
    }

    .acordeon-header:hover {
        background: #f0f0f0;
        color: var(--verde-gruma);
    }

    .acordeon-header i {
        margin-right: 15px;
        color: var(--verde-gruma);
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
    }

    .lista-reportes li a:hover {
        color: var(--verde-gruma);
    }

    .lista-reportes i {
        margin-right: 8px;
        color: #d9534f; /* Color PDF */
    }
</style>

<div class="inversionistas-container">
    <section class="banner-inversionistas">
        <h1>Inversionistas</h1>
    </section>

    <section class="reportes-seccion">
        <h2 style="color: var(--verde-gruma); margin-bottom: 30px;">Información Financiera</h2>
        
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
            <div class="acordeon-header" onclick="toggleAcordeon('trimestrales')">
                <i class="fas fa-chevron-right" id="icon-trimestrales"></i> Reportes de Resultados
            </div>
            <div class="acordeon-content" id="trimestrales">
                <ul class="lista-reportes">
                    <li><a href="#"><i class="fas fa-chart-line"></i> 1er Trimestre 2026</a></li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> 4to Trimestre 2025</a></li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> 3er Trimestre 2025</a></li>
                </ul>
            </div>
        </div>
    </section>
</div>

<script>
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