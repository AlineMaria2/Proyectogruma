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
.btn-carrito:hover { background: #e6bc00; }
</style>

<div class="container" style="margin-top: 150px; padding: 0 60px 60px;">

    <h2 style="color: #007A3D; margin-bottom: 30px;">
        Resultados para: "<?= htmlspecialchars($busqueda) ?>"
    </h2>

    <?php if (!empty($resultados_productos)): ?>
        <div class="productos-container">
            <?php foreach ($resultados_productos as $p): ?>
                <div class="producto-card">
                    <img src="<?= base_url($p->imagen_completa) ?>" alt="<?= $p->nombre ?>">
                    <h4><?= $p->nombre ?></h4>
                    <p class="precio">$<?= $p->precio ?></p>
                    <a href="<?= base_url('productos/detalle/'.$p->id) ?>" class="btn-producto">Ver más</a>
                    <div class="agregar-carrito">
                        <select class="select-cantidad">
                            <option value="1">Cantidad: 1</option>
                            <option value="2">Cantidad: 2</option>
                            <option value="3">Cantidad: 3</option>
                            <option value="4">Cantidad: 4</option>
                            <option value="5">Cantidad: 5</option>
                        </select>
                        <button class="btn-carrito"
                            data-id="<?= $p->id ?>"
                            data-precio="<?= $p->precio ?>"
                            data-nombre="<?= addslashes($p->nombre) ?>"
                            data-imagen="<?= $p->imagen_completa ?>"
                            onclick="agregarAlCarrito(this)">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p style="color:#555; font-size:16px;">No se encontraron productos para "<?= htmlspecialchars($busqueda) ?>".</p>
        <a href="<?= base_url('productos') ?>" class="btn-volver">← Volver a productos</a>
    <?php endif; ?>

</div>

<script>
function agregarAlCarrito(btn) {
    const id       = btn.dataset.id;
    const precio   = btn.dataset.precio;
    const nombre   = btn.dataset.nombre;
    const imagen   = btn.dataset.imagen;
    const cantidad = btn.closest('.producto-card').querySelector('select').value;

    fetch('<?= base_url("productos/agregar_carrito") ?>', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `id=${id}&nombre=${encodeURIComponent(nombre)}&precio=${precio}&cantidad=${cantidad}&imagen=${encodeURIComponent(imagen)}`
    })
    .then(r => r.json())
    .then(data => {
        if (data.ok) {
            btn.textContent = '✅ Agregado';
            btn.style.background = '#007A3D';
            btn.style.color = 'white';
            setTimeout(() => {
                btn.textContent = 'Agregar al carrito';
                btn.style.background = '#FFD100';
                btn.style.color = '#007A3D';
            }, 2000);
        }
    });
}
</script>