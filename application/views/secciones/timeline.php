<section class="timeline">
    <div class="timeline-header">
        <h2>Nuestra trayectoria</h2>
        <p>Historia de GRUMA</p>
    </div>

    <div class="timeline-line"></div>

    <div class="timeline-container">
        <?php foreach($timeline as $t){ ?>
            <div class="timeline-item">
                
                <h3><?= $t->anio ?></h3>

                <div class="welson-icon">
                    <?php if(!empty($t->imagen)): ?>
                        <img src="<?= base_url('assets/img/historia/'.$t->imagen) ?>" alt="Icono">
                    <?php else: ?>
                        <div class="timeline-dot"></div> 
                    <?php endif; ?>
                </div>

                <h4><?= $t->titulo ?></h4>

                <p class="descripcion-historia"><?= $t->descripcion ?></p>

            </div>
        <?php } ?>
    </div>
</section>