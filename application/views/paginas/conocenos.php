<style>
    :root {
        --verde-gruma: #00833e;
        --amarillo-gruma: #ffda00;
        --azul-gruma: #002d72;
        --blanco: #ffffff;
        --gris-claro: #f4f7f6;
    }

    .somos-body { font-family: 'Segoe UI', Arial, sans-serif; color: #333; line-height: 1.6; }

    /* === 1. BANNER COMPACTO (REDUCIDO A 300PX) === */
    .banner-somos-carrusel {
        position: relative;
        width: 100%;
        height: 300px; /* Espacio reducido */
        overflow: hidden;
        display: flex;
        align-items: center;
        border-bottom: 6px solid var(--amarillo-gruma);
    }

    .slide-banner {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        opacity: 0;
        animation: cambioBanner 15s infinite;
    }

    .img-b1 { background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?= base_url('assets/img/banner1.jpg') ?>'); animation-delay: 0s; }
    .img-b2 { background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?= base_url('assets/img/banner2.jpg') ?>'); animation-delay: 5s; }
    .img-b3 { background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?= base_url('assets/img/banner3.jpg') ?>'); animation-delay: 10s; }

    @keyframes cambioBanner {
        0% { opacity: 0; }
        10% { opacity: 1; }
        33% { opacity: 1; }
        43% { opacity: 0; }
        100% { opacity: 0; }
    }

    .contenido-banner {
        position: relative;
        z-index: 10;
        padding: 0 10%;
        color: var(--blanco);
    }

    .contenido-banner h1 {
        font-size: 2.8rem; /* Tamaño un poco más pequeño */
        text-transform: uppercase;
        border-left: 6px solid var(--amarillo-gruma);
        padding-left: 20px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    /* === 2. SECCIÓN HISTORIA (ESPACIOS AJUSTADOS) === */
    .seccion-historia {
        padding: 50px 10%; /* Menos espacio arriba/abajo */
        background-color: #f9f9f9; 
        text-align: center;
    }

    .seccion-historia h2 { color: var(--azul-gruma); font-size: 2.2rem; margin-bottom: 30px; font-weight: bold; }

    .linea-tiempo-container {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        margin-top: 40px;
        padding: 30px 5px;
        position: relative;
    }

    .linea-tiempo-container::before {
        content: '';
        position: absolute;
        top: 25px;
        left: 0;
        right: 0;
        height: 4px;
        background-color: var(--amarillo-gruma);
        z-index: 1;
    }

    .hito-cuadro {
        flex: 1;
        background: white;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        position: relative;
        z-index: 2;
        text-align: left;
        border-bottom: 4px solid var(--amarillo-gruma);
    }

    .hito-cuadro::before {
        content: '';
        position: absolute;
        top: -15px;
        left: 15px;
        width: 14px;
        height: 14px;
        background-color: white;
        border: 3px solid var(--amarillo-gruma);
        border-radius: 50%;
    }

    .hito-imagen {
        width: 100%;
        height: 100px;
        margin-bottom: 10px;
        border-radius: 6px;
        overflow: hidden;
        background-color: #eee;
    }

    .hito-imagen img { width: 100%; height: 100%; object-fit: cover; }

    .hito-cuadro h4 { font-size: 1.2rem; margin-bottom: 5px; color: #000; }
    .hito-cuadro h5 { color: var(--azul-gruma); font-size: 0.9rem; font-weight: bold; margin-bottom: 5px; }
    .hito-cuadro p { font-size: 0.8rem; color: #444; margin: 0; }

    /* === 3. FILOSOFÍA CORPORATIVA === */
    .seccion-filosofia { padding: 50px 10%; background-color: var(--gris-claro); text-align: center; }
    .tarjetas-filosofia { display: flex; gap: 20px; justify-content: center; }
    .card-f { flex: 1; background: var(--blanco); padding: 30px 20px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: left; border-top: 6px solid; }
    .card-mision { border-top-color: var(--azul-gruma); }
    .card-vision { border-top-color: var(--verde-gruma); }
    .card-objetivo { border-top-color: var(--amarillo-gruma); }

    /* === 4. VALORES === */
    .seccion-valores {
        padding: 60px 10%;
        background-color: var(--azul-gruma);
        background-image: linear-gradient(rgba(0, 45, 114, 0.9), rgba(0, 45, 114, 0.9)), url('<?= base_url('assets/img/fondo_valores.jpg') ?>');
        background-size: cover;
        color: var(--blanco);
        text-align: center;
    }
    .grid-valores { display: flex; gap: 20px; }
    .valor-item { flex: 1; background: rgba(255, 255, 255, 0.1); padding: 30px 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2); text-align: left; }
    .valor-item h4 { color: var(--amarillo-gruma); font-size: 1.4rem; margin-bottom: 10px; }

    @media (max-width: 992px) {
        .linea-tiempo-container, .tarjetas-filosofia, .grid-valores { flex-direction: column; }
    }
</style>

<div class="somos-body">

    <section class="banner-somos-carrusel">
        <div class="slide-banner img-b1"></div>
        <div class="slide-banner img-b2"></div>
        <div class="slide-banner img-b3"></div>
        <div class="contenido-banner">
            <h1>Sobre Nosotros</h1>
        </div>
    </section>

    <section class="seccion-historia">
        <h3>Nuestra trayectoria</h3>
        <h2>Historia de GRUMA</h2>
        <div class="linea-tiempo-container">
            <div class="hito-cuadro" id="seccion-1">
                <h4>1949</h4>
                <div class="hito-imagen"><img src="<?= base_url('assets/img/historia_1949.jpg') ?>"></div>
                <h5>Fundación en Cerralvo</h5>
                <p>Roberto González Barrera funda la primera planta de harina de maíz nixtamalizado.</p>
            </div>
            <div class="hito-cuadro" id="seccion-2">
                <h4>1972</h4>
                <div class="hito-imagen"><img src="<?= base_url('assets/img/historia_1972.jpg') ?>"></div>
                <h5>Expansión USA</h5>
                <p>GRUMA introduce la tortilla de harina al mercado norteamericano bajo la marca Mission.</p>
            </div>
            <div class="hito-cuadro" id="seccion-3">
                <h4>1994</h4>
                <div class="hito-imagen"><img src="<?= base_url('assets/img/historia_1994.jpg') ?>"></div>
                <h5>Salida a Bolsa</h5>
                <p>GRUMA comienza a cotizar en la Bolsa Mexicana de Valores y consolida su expansión global.</p>
            </div>
            <div class="hito-cuadro" id="seccion-4">
                <h4>2000s</h4>
                <div class="hito-imagen"><img src="<?= base_url('assets/img/historia_2000.jpg') ?>"></div>
                <h5>Mundo</h5>
                <p>Entrada a Australia, Asia y Oceanía con diversificación de productos.</p>
            </div>
            <div class="hito-cuadro" id="seccion-5">
                <h4>Hoy</h4>
                <div class="hito-imagen"><img src="<?= base_url('assets/img/historia_hoy.jpg') ?>"></div>
                <h5>Líder Mundial</h5>
                <p>Más de 110 países, 72 plantas y miles de colaboradores.</p>
            </div>
        </div>
    </section>

    <section class="seccion-filosofia">
        <h2>Misión, Visión y Objetivo</h2>
        <div class="tarjetas-filosofia">
            <div class="card-f card-mision" id="mision">
                <h4>Misión</h4>
                <p>Somos una empresa global de alimentos que elabora y comercializa productos de maíz y trigo de la más alta calidad, comprometida con la nutrición y el bienestar de las personas, la sustentabilidad del medio ambiente y el desarrollo de nuestras comunidades, generando valor para nuestros colaboradores, clientes, consumidores y accionistas.</p>
            </div>
            <div class="card-f card-vision" id="vision">
                <h4>Visión</h4>
                <p>Ser la empresa de alimentos más importante del mundo basada en maíz y trigo, siendo reconocidos por la calidad superior de nuestros productos y por el compromiso y la pasión de nuestra gente. Queremos estar presentes en la vida cotidiana de las personas alrededor del mundo.</p>
            </div>
            <div class="card-f card-objetivo" id="objetivo">
                <h4>Objetivo</h4>
                <p>Crecer de manera rentable y sustentable, expandiendo nuestra presencia global y diversificando nuestro portafolio de productos para satisfacer las necesidades nutricionales de los consumidores en el mundo, mientras generamos valor económico, social y ambiental para nuestros grupos de interés.</p>
            </div>
        </div>
    </section>

    <section class="seccion-valores">
        <h2>Nuestra Filosofía</h2>
        <div class="grid-valores">
            <div class="valor-item">
                <h4>Esfuerzo</h4>
                <p>Trabajamos con dedicación y pasión en cada uno de nuestros procesos. Creemos que el esfuerzo constante es la base del éxito y la excelencia.</p>
            </div>
            <div class="valor-item">
                <h4>Compromiso</h4>
                <p>Nos comprometemos con nuestros consumidores, colaboradores y comunidades. Cada producto refleja nuestra responsabilidad con la calidad y la nutrición.</p>
            </div>
            <div class="valor-item">
                <h4>Perseverancia</h4>
                <p>Ante los retos, avanzamos. La perseverancia nos ha llevado de una pequeña planta en Nuevo León a ser líderes globales en más de 110 países.</p>
            </div>
        </div>
    </section>
</div>