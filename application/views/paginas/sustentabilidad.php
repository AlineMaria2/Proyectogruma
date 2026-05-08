<style>
    /* VARIABLES DE COLORES PARA SUSTENTABILIDAD (Verdes y Ecológicos) */
    :root {
        --verde-ecologico: #2d6a4f;
        --verde-lima: #95d5b2;
        --amarillo-gruma: #ffda00;
        --gris-suave: #f9f9f9;
        --blanco: #ffffff;
        --texto-oscuro: #333333;
    }

    .sustentabilidad-body {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        color: var(--texto-oscuro);
        line-height: 1.8;
    }

    /* === BANNER CON CAROUSEL DE FONDO === */
    .hero-sustentabilidad {
        position: relative;
        width: 100%;
        height: 400px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: var(--blanco);
        border-bottom: 6px solid var(--amarillo-gruma);
    }

    /* Capas de fondo animadas */
    .slide-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        opacity: 0;
        z-index: -2;
        animation: animacionCarrusel 15s linear infinite;
    }

    .slide-1 { 
        background-image: url('<?= base_url('assets/img/sustentabilidad/banner_sustentabilidad_1.jpg') ?>'); 
        animation-delay: 0s; 
    }
    .slide-2 { 
        background-image: url('<?= base_url('assets/img/sustentabilidad/banner_sustentabilidad_2.jpg') ?>'); 
        animation-delay: 5s; 
    }
    .slide-3 { 
        background-image: url('<?= base_url('assets/img/sustentabilidad/banner_sustentabilidad_3.jpg') ?>'); 
        animation-delay: 10s; 
    }

    /* Capa oscura para resaltar letras */
    .hero-sustentabilidad::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }

    .hero-sustentabilidad h1 {
        font-size: 3.5rem;
        text-transform: uppercase;
        margin-bottom: 15px;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .hero-sustentabilidad p {
        font-size: 1.2rem;
        max-width: 800px;
        margin: 0 auto;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }

    /* LÓGICA DE ANIMACIÓN */
    @keyframes animacionCarrusel {
        0% { opacity: 0; }
        5% { opacity: 1; }
        30% { opacity: 1; }
        33% { opacity: 0; }
        100% { opacity: 0; }
    }

    /* ESTRUCTURA DE BLOQUES ALTERNADOS */
    .bloque-sustentable {
        display: flex;
        align-items: center;
        padding: 80px 10%;
        gap: 60px;
    }

    .bloque-sustentable:nth-child(even) {
        flex-direction: row-reverse;
        background-color: var(--gris-suave);
    }

    .col-imagen { flex: 1; text-align: center; }
    .col-imagen img {
        width: 100%;
        max-width: 550px;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        border-bottom: 5px solid var(--verde-ecologico);
        transition: transform 0.3s ease;
    }
    
    .col-imagen img:hover { transform: scale(1.02); }

    .col-texto { flex: 1; }
    .col-texto h2 {
        color: var(--verde-ecologico);
        font-size: 2.5rem;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }

    .col-texto h2::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background-color: var(--amarillo-gruma);
        position: absolute;
        bottom: 0;
        left: 0;
    }
    
    .bloque-sustentable:nth-child(even) .col-texto h2::after { left: auto; right: 0; }
    .col-texto:nth-child(even) h2 { text-align: right; }
    .col-texto p { font-size: 1.1rem; margin-bottom: 20px; text-align: justify; }

    .lista-iconos {
        list-style: none;
        padding: 0;
        margin-top: 30px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .lista-iconos li {
        display: flex;
        align-items: center;
        background: var(--blanco);
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        border-left: 4px solid var(--verde-lima);
    }
    
    .lista-iconos li i {
        font-size: 1.5rem;
        color: var(--verde-ecologico);
        margin-right: 15px;
    }

    @media (max-width: 992px) {
        .bloque-sustentable, .bloque-sustentable:nth-child(even) {
            flex-direction: column;
            padding: 50px 5%;
            gap: 30px;
        }
        .col-texto h2, .col-texto:nth-child(even) h2 { text-align: center; font-size: 2rem; }
        .col-texto h2::after { left: 50%; transform: translateX(-50%); }
        .hero-sustentabilidad h1 { font-size: 2.5rem; }
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="sustentabilidad-body">

    <section class="hero-sustentabilidad">
        <div class="slide-bg slide-1"></div>
        <div class="slide-bg slide-2"></div>
        <div class="slide-bg slide-3"></div>
        
        <h1>Sustentabilidad</h1>
        <p>Socialmente responsables desde hace más de 70 años. Comprometidos con el desarrollo integral de nuestras comunidades y el medio ambiente.</p>
    </section>

    <section class="bloque-sustentable">
        <div class="col-imagen">
            <img src="<?= base_url('assets/img/sustentabilidad/vision_rs.jpg') ?>" alt="Visión Responsabilidad Social">
        </div>
        <div class="col-texto">
            <h2>Visión de Responsabilidad Social</h2>
            <p><strong>"Hemos procurado nuestro crecimiento con pleno apego a la legislación ambiental"</strong></p>
            <p>Nuestra filosofía empresarial se basa en reinvertir utilidades, propiciar el crecimiento continuo del negocio y crear empleos de calidad.</p>
        </div>
    </section>

    <section class="bloque-sustentable">
        <div class="col-imagen">
            <img src="<?= base_url('assets/img/sustentabilidad/pilares_grupos.jpg') ?>" alt="Pilares y Grupos de Interés">
        </div>
        <div class="col-texto">
            <h2>Pilares y Grupos de Interés</h2>
            <ul class="lista-iconos">
                <li><i class="fas fa-balance-scale"></i> Ética de Negocio</li>
                <li><i class="fas fa-hand-holding-heart"></i> Derechos Humanos</li>
                <li><i class="fas fa-heartbeat"></i> Salud y Seguridad</li>
                <li><i class="fas fa-seedling"></i> Naturaleza</li>
            </ul>
        </div>
    </section>

    <section class="seccion-gris bloque-sustentable">
        <div class="col-imagen">
            <img src="<?= base_url('assets/img/sustentabilidad/fundacion_programas.jpg') ?>" alt="Fundación Gruma y Programas">
        </div>
        <div class="col-texto">
            <h2>Programas y Fundación GRUMA</h2>
            <p>A través de la Fundación GRUMA, promovemos la filantropía y el Distintivo de Empresa Socialmente Responsable, enfocándonos en la nutrición y educación.</p>
        </div>
    </section>
</div>