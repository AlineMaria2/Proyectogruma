<section class="productos">

    <!-- BUSCADOR Y MARCAS FIJOS -->
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
                <button class="btn-filtro-marca" onclick="filtrarMarca('marca-<?= $m->id ?>', this)">
                    <?= $m->nombre ?>
                </button>
            <?php } ?>
        </div>
    </div>

    <!-- PRODUCTOS -->
    <?php foreach($marcas as $m){ ?>
    <div class="marca-productos bloque-marca marca-<?= $m->id ?>">
        <h3 class="marca-titulo"><?= $m->nombre ?></h3>
        <div class="productos-container">
        <?php foreach($m->productos as $p){ ?>
            <div class="producto-card">
                <img src="<?= base_url($p->imagen_completa) ?>" alt="<?= $p->nombre ?>">
                <h4><?= $p->nombre ?></h4>
                <p class="precio">$<?= $p->precio ?></p>
                <a href="javascript:void(0)" class="btn-producto"
                   onclick="verDetalle(<?= $p->id ?>, '<?= addslashes($p->nombre) ?>', '<?= $p->precio ?>', '<?= addslashes($p->descripcion) ?>', '<?= $p->imagen_completa ?>', <?= $p->stock ?>)">
                    Ver más
                </a>
                <p style="font-size:11px;color:#999;margin:4px 0;">
                    Disponibles: <?= $p->stock ?>
                </p>
                <div class="agregar-carrito">
                    <select class="select-cantidad">
                        <?php for($i = 1; $i <= $p->stock; $i++): ?>
                            <option value="<?= $i ?>">Cantidad: <?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                    <button class="btn-carrito"
                        data-id="<?= $p->id ?>"
                        data-precio="<?= $p->precio ?>"
                        data-nombre="<?= addslashes($p->nombre) ?>"
                        data-imagen="<?= $p->imagen_completa ?>"
                        data-stock="<?= $p->stock ?>"
                        onclick="agregarAlCarrito(this)">
                        Agregar al carrito
                    </button>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <?php } ?>

<script>
function filtrarMarca(claseMarca, botonActivo) {
    document.querySelectorAll('.btn-filtro-marca').forEach(btn => btn.classList.remove('active'));
    botonActivo.classList.add('active');
    const bloques = document.querySelectorAll('.bloque-marca');
    if (claseMarca === 'todos') {
        bloques.forEach(b => b.style.display = 'block');
    } else {
        bloques.forEach(b => {
            b.style.display = b.classList.contains(claseMarca) ? 'block' : 'none';
        });
    }
}

function agregarAlCarrito(btn) {
    const id      = btn.dataset.id;
    const precio  = btn.dataset.precio;
    const nombre  = btn.dataset.nombre;
    const imagen  = btn.dataset.imagen;
    const stock   = parseInt(btn.dataset.stock);
    const select  = btn.closest('.producto-card').querySelector('select');
    const cantidad = parseInt(select.value);

    if (cantidad > stock) {
        alert('Solo hay ' + stock + ' unidades disponibles.');
        return;
    }

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

const input = document.getElementById('buscador-input');
const lista  = document.getElementById('sugerencias');
input.addEventListener('input', function() {
    const q = this.value.trim();
    if (q.length < 2) { lista.style.display = 'none'; return; }
    fetch('<?= base_url('productos/autocomplete') ?>?q=' + encodeURIComponent(q))
        .then(r => r.json())
        .then(data => {
            lista.innerHTML = '';
            if (data.length === 0) { lista.style.display = 'none'; return; }
            data.forEach(p => {
                const li = document.createElement('li');
                li.textContent = p.nombre;
                li.style = 'padding:12px 20px;cursor:pointer;font-size:14px;border-bottom:1px solid #f0f0f0;text-align:left;color:#1a1a1a;';
                li.addEventListener('mouseenter', () => li.style.background = '#fff9e0');
                li.addEventListener('mouseleave', () => li.style.background = 'white');
                li.addEventListener('click', () => {
                    input.value = p.nombre;
                    lista.style.display = 'none';
                    input.closest('form').submit();
                });
                lista.appendChild(li);
            });
            lista.style.display = 'block';
        });
});
document.addEventListener('click', function(e) {
    if (!e.target.closest('.buscador-productos')) lista.style.display = 'none';
});
</script>

<!-- PANEL LATERAL -->
<div id="panel-detalle" style="position:fixed;top:0;right:-420px;width:400px;height:100%;background:white;box-shadow:-5px 0 30px rgba(0,0,0,0.15);z-index:9999;transition:right 0.3s ease;overflow-y:auto;padding:30px;box-sizing:border-box;">
    <button onclick="cerrarPanel()" style="position:absolute;top:15px;right:15px;background:none;border:none;font-size:24px;cursor:pointer;color:#007A3D;">✕</button>
    <img id="panel-img" src="" style="width:100%;max-height:250px;object-fit:contain;margin-bottom:20px;">
    <h3 id="panel-nombre" style="color:#007A3D;margin-bottom:10px;"></h3>
    <p id="panel-precio" style="font-size:22px;font-weight:bold;color:#007A3D;margin-bottom:15px;"></p>
    <p id="panel-desc" style="color:#555;line-height:1.7;margin-bottom:25px;"></p>
    <p id="panel-stock" style="font-size:11px;color:#999;margin:4px 0;"></p>
    <div class="agregar-carrito">
        <select class="select-cantidad" id="panel-cantidad"></select>
        <button class="btn-carrito" id="panel-btn-carrito">Agregar al carrito</button>
    </div>
</div>

<div id="overlay-panel" onclick="cerrarPanel()" style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.3);z-index:9998;display:none;"></div>

<script>
var panelProductoActual = {};
function verDetalle(id, nombre, precio, descripcion, imagen, stock) {
    panelProductoActual = {id, nombre, precio, imagen, stock};
    document.getElementById('panel-img').src = '<?= base_url() ?>' + imagen;
    document.getElementById('panel-nombre').textContent = nombre;
    document.getElementById('panel-precio').textContent = '$' + precio;
    document.getElementById('panel-desc').textContent = descripcion;
    document.getElementById('panel-stock').textContent = 'Disponibles: ' + stock;

    // Llenar select con stock disponible
    const sel = document.getElementById('panel-cantidad');
    sel.innerHTML = '';
    for (let i = 1; i <= stock; i++) {
        sel.innerHTML += `<option value="${i}">Cantidad: ${i}</option>`;
    }

    document.getElementById('panel-btn-carrito').onclick = function() {
        const cantidad = parseInt(document.getElementById('panel-cantidad').value);
        fetch('<?= base_url("productos/agregar_carrito") ?>', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `id=${id}&nombre=${encodeURIComponent(nombre)}&precio=${precio}&cantidad=${cantidad}&imagen=${encodeURIComponent(imagen)}`
        })
        .then(r => r.json())
        .then(data => {
            if (data.ok) {
                document.getElementById('panel-btn-carrito').textContent = 'Agregado';
                setTimeout(() => {
                    document.getElementById('panel-btn-carrito').textContent = 'Agregar al carrito';
                }, 2000);
            }
        });
    };
    document.getElementById('panel-detalle').style.right = '0';
    document.getElementById('overlay-panel').style.display = 'block';
}
function cerrarPanel() {
    document.getElementById('panel-detalle').style.right = '-420px';
    document.getElementById('overlay-panel').style.display = 'none';
}
</script>

</section>