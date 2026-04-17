<section class="timeline">

<div class="timeline-header">

<h2>Nuestra trayectoria</h2>
<p>Historia de GRUMA</p>

</div>

<div class="timeline-line"></div>

<div class="timeline-container">

<?php foreach($timeline as $t){ ?>

<div class="timeline-item">

<div class="timeline-dot"></div>

<div class="timeline-content">

<h3><?= $t->anio ?></h3>

<h4><?= $t->titulo ?></h4>

<p><?= $t->descripcion ?></p>

</div>

</div>

<?php } ?>

</div>

</section>