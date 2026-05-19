<style>
/* ==========================================================================
   STICKY HEADER - BUSCADOR Y MARCAS FIJOS
   ========================================================================== */
.productos-sticky {
    position: sticky;
    top: 70px;
    z-index: 900;
    background: white;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.franja-buscador {
    background-color: #FFD100;
    padding: 18px 0;
    width: 100%;
}

.buscador-productos {
    display: flex;
    justify-content: center;
    position: relative;
    width: 100%;
    max-width: 500px;
    margin: 0 auto;
    padding: 0 15px;
    box-sizing: border-box;
}

.buscador-productos form {
    display: flex;
    gap: 10px;
    background: white;
    padding: 10px 20px;
    border-radius: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    width: 100%;
}

.buscador-productos input {
    border: none;
    outline: none;
    font-size: 15px;
    flex: 1;
    color: #1a1a1a;
    background: transparent;
}

.buscador-productos button {
    background: #007A3D;
    border: none;
    border-radius: 20px;
    padding: 8px 22px;
    font-weight: 600;
    color: white;
    cursor: pointer;
    font-size: 14px;
    transition: background 0.2s;
}

.buscador-productos button:hover {
    background: #005c2e;
    color: #FFD100;
}

.marcas-filtros {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
    padding: 14px 20px;
    background: white;
}

.btn-filtro-marca {
    padding: 7px 20px;
    border: 2px solid #007A3D;
    background: white;
    color: #007A3D;
    border-radius: 25px;
    font-weight: 600;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.2s ease;
    text-transform: uppercase;
}

.btn-filtro-marca:hover,
.btn-filtro-marca.active {
    background: #007A3D;
    color: #FFD100;
}

/* ==========================================================================
   HEADER TITULO
   ========================================================================== */
.productos-header {
    text-align: center;
    padding: 40px 20px 20px;
}

.productos-header h2 {
    color: #007A3D;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 6px;
}

.productos-header p {
    color: #777;
    font-size: 15px;
    margin: 0;
}

/* ==========================================================================
   TARJETAS
   ========================================================================== */
.marca-productos {
    padding: 0 40px;
    margin-bottom: 50px;
}

.marca-titulo {
    color: #007A3D;
    font-size: 22px;
    border-left: 5px solid #FFD100;
    padding-left: 12px;
    margin-bottom: 25px;
    margin-top: 35px;
}

.productos-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 24px;
}

.producto-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    transition: transform 0.2s, box-shadow 0.2s;
}

.producto-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.13);
}

.producto-card img {
    width: 100%;
    height: 170px;
    object-fit: contain;
    margin-bottom: 14px;
    border-radius: 8px;
}

.producto-card h4 {
    font-size: 14px;
    font-weight: 700;
    color: #1a1a1a;
    margin: 0 0 8px;
    text-transform: uppercase;
    letter-spacing: 0.3px;
}

.precio {
    font-size: 18px;
    font-weight: 700;
    color: #007A3D;
    margin: 0 0 12px;
}

.btn-producto {
    display: inline-block;
    padding: 9px 24px;
    background: #FFD100;
    color: #007A3D;
    border-radius: 25px;
    font-weight: 700;
    font-size: 13px;
    text-decoration: none;
    cursor: pointer;
    transition: background 0.2s;
    margin-bottom: 10px;
}

.btn-producto:hover {
    background: #e6bc00;
}

.agregar-carrito {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 4px;
    width: 100%;
}

.select-cantidad {
    padding: 7px 10px;
    border-radius: 25px;
    border: 2px solid #FFD100;
    background: white;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    color: #007A3D;
    outline: none;
}

.btn-carrito {
    flex: 1;
    padding: 9px 12px;
    background: #FFD100;
    color: #007A3D;
    border: none;
    border-radius: 25px;
    font-weight: 700;
    font-size: 12px;
    cursor: pointer;
    transition: background 0.2s;
}

.btn-carrito:hover {
    background: #e6bc00;
}
</style>

<section class="productos">

    <!-- TÍTULO -->
    <div class="productos-header">
        <h2>Nuestros Productos</h2>
        <p>Explora nuestros productos por marca</p>
    </div>

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
                   onclick="verDetalle(<?= $p->id ?>, '<?= addslashes($p->nombre) ?>', '<?= $p->precio ?>', '<?= addslashes($p->descripcion) ?>', '<?= $p->imagen_completa ?>')">
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
                        data-id="<?= $p->id ?>"
                        data-precio="<?= $p->precio ?>"
                        data-nombre="<?= addslashes($p->nombre) ?>"
                        data-imagen="<?= $p->imagen_completa ?>"
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
    <div class="agregar-carrito">
        <select class="select-cantidad" id="panel-cantidad">
            <option value="1">Cantidad: 1</option>
            <option value="2">Cantidad: 2</option>
            <option value="3">Cantidad: 3</option>
            <option value="4">Cantidad: 4</option>
            <option value="5">Cantidad: 5</option>
        </select>
        <button class="btn-carrito" id="panel-btn-carrito">Agregar al carrito</button>
    </div>
</div>

<div id="overlay-panel" onclick="cerrarPanel()" style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.3);z-index:9998;display:none;"></div>

<script>
var panelProductoActual = {};
function verDetalle(id, nombre, precio, descripcion, imagen) {
    panelProductoActual = {id, nombre, precio, imagen};
    document.getElementById('panel-img').src = '<?= base_url() ?>' + imagen;
    document.getElementById('panel-nombre').textContent = nombre;
    document.getElementById('panel-precio').textContent = '$' + precio;
    document.getElementById('panel-desc').textContent = descripcion;
    document.getElementById('panel-btn-carrito').onclick = function() {
        const cantidad = document.getElementById('panel-cantidad').value;
        fetch('<?= base_url("productos/agregar_carrito") ?>', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `id=${id}&nombre=${encodeURIComponent(nombre)}&precio=${precio}&cantidad=${cantidad}&imagen=${encodeURIComponent(imagen)}`
        })
        .then(r => r.json())
        .then(data => {
            if (data.ok) {
                document.getElementById('panel-btn-carrito').textContent = '✅ Agregado';
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