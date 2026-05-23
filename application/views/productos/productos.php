<style>
.btn-menos,
.btn-mas {
    width: 32px !important;
    height: 32px !important;
    min-width: 32px !important;
    border-radius: 50% !important;
    border: 2px solid #007A3D !important;
    background-color: white !important;
    color: #007A3D !important;
    font-size: 18px !important;
    font-weight: bold !important;
    cursor: pointer !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 0 !important;
    margin: 0 !important;
    line-height: 1 !important;
    transition: 0.2s !important;
}
.btn-menos:hover,
.btn-mas:hover {
    background-color: #007A3D !important;
    color: #FFD100 !important;
}
.btn-carrito {
    flex: 1 !important;
    padding: 10px 16px !important;
    background-color: #FFD100 !important;
    color: #007A3D !important;
    border: none !important;
    border-radius: 25px !important;
    font-weight: 600 !important;
    font-size: 13px !important;
    cursor: pointer !important;
}
.btn-carrito:hover {
    background-color: #e6bc00 !important;
}
</style>

<section class="productos">
    <div class="productos-sticky">
        <div class="franja-buscador">
            <div class="buscador-productos">
                <form action="<?= base_url('productos/buscar') ?>" method="GET" autocomplete="off">
                    <input type="text" name="query" id="buscador-input" placeholder="Buscar producto...">
                    <button type="submit">Buscar</button>
                </form>
                <ul id="sugerencias" style="position:absolute;top:100%;left:50%;transform:translateX(-50%);width:calc(100% - 30px);max-width:470px;background:white;border-radius:15px;box-shadow:0 8px 20px rgba(0,0,0,0.15);list-style:none;margin:5px 0 0;padding:0;z-index:999;display:none;"></ul>
            </div>
        </div>
        <div class="marcas-filtros">
            <button class="btn-filtro-marca active" onclick="filtrarMarca('todos', this)">TODOS</button>
            <?php foreach($marcas as $m){ ?>
                <button class="btn-filtro-marca" onclick="filtrarMarca('marca-<?= $m->id ?>', this)"><?= $m->nombre ?></button>
            <?php } ?>
        </div>
    </div>

    <?php foreach($marcas as $m){ ?>
    <div class="marca-productos bloque-marca marca-<?= $m->id ?>" id="bloque-marca-<?= $m->id ?>">
        <h3 class="marca-titulo"><?= $m->nombre ?></h3>
        <div class="productos-container">
        <?php foreach($m->productos as $p){ ?>
            <div class="producto-card">
                <img src="<?= base_url($p->imagen_completa) ?>" alt="<?= $p->nombre ?>">
                <h4><?= $p->nombre ?></h4>
                <p class="precio">$<?= $p->precio ?></p>
                <a href="javascript:void(0)" class="btn-producto" onclick="verDetalle(<?= $p->id ?>, '<?= addslashes($p->nombre) ?>', '<?= $p->precio ?>', '<?= addslashes($p->descripcion) ?>', '<?= $p->imagen_completa ?>', <?= $p->stock ?>)">Ver más</a>
                <p style="font-size:11px;color:#999;margin:4px 0;">Disponibles: <?= $p->stock ?></p>

                <div class="agregar-carrito">
                    <div class="selector-cantidad">
                        <button type="button" class="btn-menos" onclick="cambiarCantidad(this, -1, <?= $p->stock ?>)">-</button>
                        <span class="cantidad-valor">0</span>
                        <button type="button" class="btn-mas" onclick="cambiarCantidad(this, 1, <?= $p->stock ?>)">+</button>
                    </div>
                    <button class="btn-carrito" data-id="<?= $p->id ?>" data-precio="<?= $p->precio ?>" data-nombre="<?= addslashes($p->nombre) ?>" data-imagen="<?= $p->imagen_completa ?>" onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <?php } ?>
</section>

<div id="panel-detalle" style="position:fixed;top:0;right:-420px;width:400px;height:100%;background:white;box-shadow:-5px 0 30px rgba(0,0,0,0.15);z-index:9999;transition:right 0.3s ease;overflow-y:auto;padding:30px;box-sizing:border-box;">
    <button onclick="cerrarPanel()" style="position:absolute;top:15px;right:15px;background:none;border:none;font-size:24px;cursor:pointer;color:#007A3D;">✕</button>
    <img id="panel-img" src="" style="width:100%;max-height:250px;object-fit:contain;margin-bottom:20px;">
    <h3 id="panel-nombre" style="color:#007A3D;margin-bottom:10px;"></h3>
    <p id="panel-precio" style="font-size:22px;font-weight:bold;color:#007A3D;margin-bottom:15px;"></p>
    <p id="panel-desc" style="color:#555;line-height:1.7;margin-bottom:25px;"></p>
    <p id="panel-stock" style="font-size:11px;color:#999;margin:4px 0;"></p>

    <div class="agregar-carrito">
        <div class="selector-cantidad">
            <button type="button" class="btn-menos" onclick="cambiarCantidad(this, -1, panelProductoActual.stock)">-</button>
            <span class="cantidad-valor" id="panel-valor">0</span>
            <button type="button" class="btn-mas" onclick="cambiarCantidad(this, 1, panelProductoActual.stock)">+</button>
        </div>
        <button class="btn-carrito" id="panel-btn-carrito">Agregar al carrito</button>
    </div>
</div>
<div id="overlay-panel" onclick="cerrarPanel()" style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.3);z-index:9998;display:none;"></div>

<script>
function filtrarMarca(clase, btn) {
    document.querySelectorAll('.btn-filtro-marca').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const bloques = document.querySelectorAll('.bloque-marca');
    if (clase === 'todos') {
        bloques.forEach(b => b.style.display = 'block');
        window.scrollTo({ top: document.querySelector('.productos-sticky').offsetHeight, behavior: 'smooth' });
    } else {
        bloques.forEach(b => b.style.display = 'none');
        const bloque = document.querySelector('.' + clase);
        if (bloque) {
            bloque.style.display = 'block';
            setTimeout(() => { bloque.scrollIntoView({ behavior: 'smooth', block: 'start' }); }, 50);
        }
    }
}

function cambiarCantidad(btn, cambio, stock) {
    const contenedor = btn.closest('.agregar-carrito');
    const display = contenedor.querySelector('.cantidad-valor');
    let cantidad = parseInt(display.textContent);
    cantidad += cambio;
    if (cantidad < 0) cantidad = 0;
    if (cantidad > stock) cantidad = stock;
    display.textContent = cantidad;
}

function agregarAlCarrito(btn) {
    const cantidad = parseInt(btn.closest('.agregar-carrito').querySelector('.cantidad-valor').textContent);
    if (cantidad === 0) {
        alert('Selecciona al menos 1 producto');
        return;
    }
    const id     = btn.dataset.id;
    const precio = btn.dataset.precio;
    const nombre = btn.dataset.nombre;
    const imagen = btn.dataset.imagen;

    fetch('<?= base_url("productos/agregar_carrito") ?>', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `id=${id}&nombre=${encodeURIComponent(nombre)}&precio=${precio}&cantidad=${cantidad}&imagen=${encodeURIComponent(imagen)}`
    })
    .then(r => r.json())
    .then(data => {
        if (data.ok) {
            const contador = document.getElementById('contador-carrito');
            if (contador) contador.textContent = data.total;
            btn.textContent = '✅ Agregado';
            setTimeout(() => { btn.textContent = 'Agregar al carrito'; }, 2000);
        }
    });
}
</script>