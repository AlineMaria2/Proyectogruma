<section class="detalle-producto">

<div class="detalle-container">

<div class="detalle-img">

<img src="<?= base_url('assets/img/productos/'.$producto->id_imagen) ?>">

</div>

<div class="detalle-info">

<h2><?= $producto->nombre ?></h2>

<p class="detalle-precio">$<?= $producto->precio ?></p>

<p class="detalle-desc">
<?= $producto->descripcion ?>
</p>

<a href="<?= base_url('productos') ?>" class="btn-volver">
← Volver a productos
</a>

</div>

</div>

</section>