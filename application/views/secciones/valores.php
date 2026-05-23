<section class="seccion-contenedor-maestro">
    <h2 class="titulo-seccion-maestro">Nuestros Valores</h2>
    <div class="grid-tarjetas-maestro">
        <?php foreach($valores as $valor): ?>
            <div class="tarjeta-estilo-maestro">
                <h3 style="color:#007A3D;"><?= $valor->titulo ?></h3>
                <p><?= $valor->descripcion ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>