<section class="productos">

<div class="productos-header">

<h2>Nuestros Productos</h2>

<p>Explora nuestros productos por marca</p>

</div>

<?php foreach($marcas as $m){ ?>

<div class="marca-productos">

<h3 class="marca-titulo">
<?= $m->nombre ?>
</h3>

<div class="productos-container">

<?php foreach($m->productos as $p){ ?>

<div class="producto-card">

<img src="<?= base_url('assets/img/productos/'.$p->id_imagen) ?>">

<h4><?= $p->nombre ?></h4>

<p class="precio">$<?= $p->precio ?></p>

<a href="<?= base_url('productos/detalle/'.$p->id) ?>" class="btn-producto">
Ver más
</a>

</div>

<?php } ?>

</div>

</div>

<?php } ?>
</section>