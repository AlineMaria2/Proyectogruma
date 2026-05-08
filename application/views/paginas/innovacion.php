<style>
    :root {
        --verde-gruma: #00833e;
        --amarillo-gruma: #ffda00;
        --azul-oscuro: #002d72;
        --gris-fondo: #f8f9fa;
        --blanco: #ffffff;
    }

    .innovacion-body { font-family: 'Segoe UI', Arial, sans-serif; color: #333; line-height: 1.6; }

    /* === Banner Principal Estilo Estático (Actualizado) === */
    .hero-innovacion {
        position: relative;
        width: 100%;
        height: 450px;
        display: flex;
        align-items: center; /* Centrado vertical */
        justify-content: flex-start; /* Alineado a la IZQUIERDA */
        padding: 0 10%; 
        
        /* Imagen de fondo sin movimiento */
        background-image: url('<?= base_url('assets/img/banner_gruma.jpg') ?>');
        background-size: cover;
        background-position: center;
        background-attachment: scroll; /* Asegura que no se mueva */
        color: var(--blanco);
        border-bottom: 6px solid var(--amarillo-gruma);
        overflow: hidden;
    }

    /* Capa oscura para legibilidad (Overlay) */
    .hero-innovacion::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4); /* Oscurece la imagen un 40% */
        z-index: 1;
    }

    /* Contenedor de texto del banner */
    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 550px; /* Limita el ancho para que no cruce toda la pantalla */
        text-align: left;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        text-transform: uppercase;
        margin-bottom: 15px;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .hero-content p {
        font-size: 1.2rem;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }

    /* Estructura de Secciones Alternadas (Sin cambios) */
    .seccion-bloque { display: flex; align-items: center; padding: 60px 10%; gap: 50px; }
    .seccion-bloque:nth-child(even) { flex-direction: row-reverse; background-color: var(--gris-fondo); }

    .bloque-img { flex: 1; text-align: center; }
    .bloque-img img { width: 100%; max-width: 500px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.15); }

    .bloque-txt { flex: 1; }
    .bloque-txt h2 { color: var(--verde-gruma); font-size: 2.2rem; margin-bottom: 20px; border-left: 5px solid var(--amarillo-gruma); padding-left: 15px; }
    .bloque-txt p { margin-bottom: 15px; text-align: justify; }

    /* Estilo para las Patentes (Bloque 4) */
    .stats-patentes { display: flex; gap: 20px; margin-top: 20px; }
    .stat-item { background: var(--verde-gruma); color: white; padding: 15px; border-radius: 8px; text-align: center; flex: 1; }
    .stat-item span { display: block; font-size: 1.8rem; font-weight: bold; color: var(--amarillo-gruma); }

    /* Listas y viñetas */
    .lista-check { list-style: none; padding: 0; }
    .lista-check li::before { content: '✓ '; color: var(--verde-gruma); font-weight: bold; }

    @media (max-width: 768px) {
        .hero-innovacion { justify-content: center; text-align: center; height: 350px; }
        .hero-content { text-align: center; }
        .hero-content h1 { font-size: 2.5rem; }
        .seccion-bloque, .seccion-bloque:nth-child(even) { flex-direction: column; padding: 40px 5%; }
    }
</style>

<div class="innovacion-body">
    <section class="hero-innovacion">
        <div class="hero-content">
            <h1>Innovación Gruma</h1>
            <p>Liderazgo global a través de la tecnología y el entendimiento del consumidor.</p>
        </div>
    </section>

    <section class="seccion-bloque">
        <div class="bloque-img">
            <img src="<?= base_url('assets/img/innovacion/vision.jpg') ?>" alt="Visión Gruma">
        </div>
        <div class="bloque-txt">
            <h2>Visión de Innovación</h2>
            <p><strong>Innovación, un compromiso vigente.</strong> Vemos la innovación como la única forma de mantenerse competitivo. Durante más de 65 años hemos demostrado nuestro compromiso con la búsqueda constante de soluciones únicas.</p>
            <p>Este enfoque nos ha permitido ganar la confianza permanente de nuestros consumidores, clientes, empleados e inversionistas a nivel mundial.</p>
        </div>
    </section>

    <section class="seccion-bloque">
        <div class="bloque-img">
            <img src="<?= base_url('assets/img/innovacion/productos.jpg') ?>" alt="Nuevos Productos">
        </div>
        <div class="bloque-txt">
            <h2>Nuevos Productos</h2>
            <p>Nuestro portafolio evoluciona constantemente para satisfacer gustos regionales:</p>
            <ul class="lista-check">
                <li><strong>Maseca Antojitos:</strong> Harina especial para sopes, tlacoyos y gorditas.</li>
                <li><strong>Mission Artisan:</strong> Propuesta artesanal con beneficios nutrimentales en EE.UU.</li>
                <li><strong>Tosty Activa-T:</strong> Snacks bajos en grasa y sodio en Costa Rica.</li>
                <li><strong>Líneas Globales:</strong> Mission Mini Wraps (Reino Unido) y Paninas (México).</li>
            </ul>
        </div>
    </section>

    <section class="seccion-bloque">
        <div class="bloque-img">
            <img src="<?= base_url('assets/img/innovacion/maquinaria.jpg') ?>" alt="Tecnología Gruma">
        </div>
        <div class="bloque-txt">
            <h2>Tecnología y Maquinaria</h2>
            <p>Contamos con una división de tecnología que diseña y construye nuestras propias plantas de producción.</p>
            <p><strong>Logros impresionantes:</strong> Maquinaria automatizada capaz de producir hasta 1,200 tortillas de maíz por minuto y 3,000 docenas de tortillas de trigo por hora.</p>
            <p>Nuestra planta en <strong>Panorama City, California</strong>, es pionera al ser alimentada parcialmente por energía solar.</p>
        </div>
    </section>

    <section class="seccion-bloque">
        <div class="bloque-img">
            <img src="<?= base_url('assets/img/innovacion/patentes.jpg') ?>" alt="Investigación Gruma">
        </div>
        <div class="bloque-txt">
            <h2>Investigación y Desarrollo</h2>
            <p>A lo largo de 73 años, la propiedad intelectual ha sido la piedra angular de nuestra expansión global.</p>
            <div class="stats-patentes">
                <div class="stat-item"><span>132</span> Patentes registradas</div>
                <div class="stat-item"><span>15</span> Países con diseños</div>
            </div>
            <p style="margin-top:20px; font-style: italic; border-left: 3px solid #ccc; padding-left: 10px;">
                "Los derechos de propiedad industrial han llevado a Gruma a la cúspide de la industria alimenticia mundial." 
                <br>— <strong>OMPI (2003)</strong>
            </p>
        </div>
    </section>
</div>