<style>
    :root {
        --verde-gruma: #00833e;
        --amarillo-gruma: #ffda00;
        --gris-fondo: #f8f9fa;
        --blanco: #ffffff;
    }

    .sustentabilidad-body {
        font-family: 'Segoe UI', Arial, sans-serif;
    }

    /* HERO */
    .carousel-item {
        height: 500px;
    }

    .carousel-item img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        filter: brightness(0.6);
    }

    /* BLOQUES */
    .seccion-bloque {
        display: flex;
        align-items: center;
        padding: 60px 10%;
        gap: 50px;
    }

    .seccion-bloque:nth-child(even) {
        flex-direction: row-reverse;
        background-color: var(--gris-fondo);
    }

    .bloque-img {
        flex: 1;
        text-align: center;
    }

    .bloque-img img {
        width: 100%;
        max-width: 500px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .bloque-txt {
        flex: 1;
    }

    .bloque-txt h2 {
        color: var(--verde-gruma);
        font-size: 2.2rem;
        margin-bottom: 20px;
        border-left: 5px solid var(--amarillo-gruma);
        padding-left: 15px;
    }

    @media (max-width:768px){

        .carousel-caption h1{
            font-size:2rem;
        }

        .seccion-bloque,
        .seccion-bloque:nth-child(even){
            flex-direction:column;
            padding:40px 5%;
        }
    }
    .hero-overlay{
    position:absolute;
    top:50%;
    left:10%;
    transform:translateY(-50%);
    z-index:20;
    color:white;
    max-width:600px;
}

.hero-overlay h1{
    font-size:3.5rem;
    font-weight:bold;
    text-transform:uppercase;
    margin-bottom:20px;
    text-shadow:2px 2px 10px rgba(0,0,0,0.6);
}

.hero-overlay p{
    font-size:1.2rem;
    line-height:1.7;
    text-shadow:1px 1px 8px rgba(0,0,0,0.6);
}
</style>


<div class="sustentabilidad-body">

 <!-- CARRUSEL -->
<div id="carouselSustentabilidad" class="carousel slide" data-bs-ride="carousel">

    <!-- TEXTO FIJO -->
    <div class="hero-overlay">

        <h1>
            <?= $sustentabilidad[0]->titulo ?>
        </h1>

        <p>
            <?= nl2br($sustentabilidad[0]->descripcion) ?>
        </p>

    </div>

    <!-- IMAGENES -->
    <div class="carousel-inner">

        <?php foreach($banner as $key => $item): ?>

            <div class="carousel-item <?= ($key == 0) ? 'active' : '' ?>">

                <img 
                    src="<?= base_url($item->url . $item->nombre_archivo) ?>"
                    alt="Banner Sustentabilidad"
                >

            </div>

        <?php endforeach; ?>

    </div>

    <!-- CONTROLES -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSustentabilidad" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselSustentabilidad" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>


    <!-- CONTENIDO -->
    <?php foreach($sustentabilidad as $key => $item): ?>

        <?php if($key != 0): ?>

        <section class="seccion-bloque">

            <div class="bloque-img">

                <img 
                    src="<?= base_url($item->url . $item->nombre_archivo) ?>"
                    alt="<?= $item->titulo ?>"
                >

            </div>

            <div class="bloque-txt">

                <h2>
                    <?= $item->titulo ?>
                </h2>

                <p>
                    <?= nl2br($item->descripcion) ?>
                </p>

            </div>

        </section>

        <?php endif; ?>

    <?php endforeach; ?>

</div>