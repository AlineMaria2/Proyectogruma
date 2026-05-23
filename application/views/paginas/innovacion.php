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
        background-image: url('<?= base_url('assets/img/banner4.jpg') ?>');
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

    <!-- HERO / BANNER -->
    <?php if(!empty($innovacion)): ?>

    <section 
        class="hero-innovacion"
        style="background-image: url('<?= base_url($innovacion[0]->url . $innovacion[0]->nombre_archivo) ?>');"
    >
        <div class="hero-content">
            <h1><?= $innovacion[0]->titulo ?></h1>

            <p>
                <?= nl2br($innovacion[0]->descripcion) ?>
            </p>
        </div>
    </section>

    <?php endif; ?>


    <!-- BLOQUES -->
    <?php foreach($innovacion as $key => $item): ?>

        <?php if($key != 0): ?>

        <section class="seccion-bloque">

            <div class="bloque-img">
                <img 
                    src="<?= base_url($item->url . $item->nombre_archivo) ?>"
                    alt="<?= $item->titulo ?>"
                >
            </div>

            <div class="bloque-txt">

                <h2><?= $item->titulo ?></h2>

                <p>
                    <?= nl2br($item->descripcion) ?>
                </p>

            </div>

        </section>

        <?php endif; ?>

    <?php endforeach; ?>

</div>