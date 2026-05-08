<style>
.agregar-carrito {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 12px;
}
.select-cantidad {
    padding: 8px 10px;
    border-radius: 25px;
    border: 2px solid #FFD100;
    background-color: white;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    color: #007A3D;
}
.btn-carrito {
    flex: 1;
    padding: 10px 16px;
    background: #FFD100;
    color: #007A3D;
    border: none;
    border-radius: 25px;
    font-weight: 600;
    font-size: 13px;
    cursor: pointer;
}
.btn-carrito:hover {
    background: #e6bc00;
}
</style>

<div class="container" style="margin-top: 150px; padding: 0 60px 60px;">

    <h2 style="color: #007A3D; margin-bottom: 30px;">
        Resultados para: "<?= htmlspecialchars($busqueda) ?>"
    </h2>

    <?php if (!empty($resultados_productos)): ?>

        <div class="productos-container">
            <?php foreach ($resultados_productos as $p): ?>
                <div class="producto-card">

                    <img src="<?= base_url('assets/img/productos/'.$p->id_imagen) ?>">

                    <h4><?= $p->nombre ?></h4>

                    <p class="precio">$<?= $p->precio ?></p>

                    <a href="<?= base_url('productos/detalle/'.$p->id) ?>" class="btn-producto">
                        Ver más
                    </a>

                    <div class="agregar-carrito">
                        <select class="select-cantidad">
                            <option value="1">Cantidad: 1</option>
                            <option value="2">Cantidad: 2</option>
                            <option value="3">Cantidad: 3</option>
                            <option value="4">Cantidad: 4</option>
                            <option value="5">Cantidad: 5</option>
                        </select>
                        <button class="btn-carrito"
                            onclick="agregarAlCarrito(<?= $p->id ?>, <?= $p->precio ?>, '<?= $p->nombre ?>', this)">
                            Agregar al carrito
                        </button>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    <?php else: ?>
        <p style="color:#555; font-size:16px;">
            No se encontraron productos para "<?= htmlspecialchars($busqueda) ?>". Intenta con otra palabra.
        </p>
        <a href="<?= base_url('productos') ?>" class="btn-volver">← Volver a productos</a>
    <?php endif; ?>

</div>

<script>
function agregarAlCarrito(id, precio, nombre, btn) {
    const cantidad = btn.closest('.producto-card').querySelector('select').value;
    alert('✅ ' + nombre + ' x' + cantidad + ' agregado al carrito');
}
</script>