<section class="seccion-contenedor-maestro">
    <h2 class="titulo-seccion-maestro">Filosofía Corporativa</h2>
    <div class="grid-tarjetas-maestro">
        <?php foreach($filosofia as $item): ?>
            <div class="tarjeta-estilo-maestro">
                <h3 style="color:#007A3D;"><?= $item->titulo ?></h3>
                <p><?= $item->descripcion ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
