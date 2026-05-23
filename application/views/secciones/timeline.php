<section class="seccion-contenedor-maestro">
    <h2 class="titulo-seccion-maestro">Nuestra Trayectoria</h2>
    <div class="timeline-eje-maestro">
        <?php foreach($timeline as $t): ?>
            <div class="timeline-item-maestro">
                <h3 style="color:#007A3D;"><?= $t->anio ?></h3>
                <h4><?= $t->titulo ?></h4>
                <p><?= $t->descripcion ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>