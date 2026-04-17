<section class="acerca">

<div class="acerca-container">

<?php foreach($acerca as $a){ ?>

<div class="acerca-img">

<img src="<?= base_url('assets/img/historia/'.$a->imagen) ?>">

<div class="acerca-anio animar-anio">
1949
<span>DESDE 1949</span>
</div>

</div>

<div class="acerca-texto">

<h5>ACERCA DE GRUMA</h5>

<h2><?= $a->titulo ?></h2>

<div class="acerca-frase">
"<?= $a->subtitulo ?>"
</div>

<p><?= $a->descripcion ?></p>

</div>

<?php } ?>

</div>

</section>