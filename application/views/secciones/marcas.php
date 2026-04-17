<section class="marcas">

<div class="marcas-titulo">
<h2>NUESTRAS MARCAS</h2>
</div>

<div class="marcas-slider">

<?php foreach($marcas as $m){ ?>

<div class="marca-card">

<img src="<?= base_url('assets/img/marcas/'.$m->imagen) ?>" alt="<?= $m->nombre ?>">

</div>

<?php } ?>

</div>

</section>