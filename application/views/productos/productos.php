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
.buscador-productos {
    display: flex;
    justify-content: center;
    margin-bottom: 40px;
    position: relative;
}
.buscador-productos form {
    display: flex;
    gap: 10px;
    background: white;
    padding: 10px 20px;
    border-radius: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 500px;
}
.buscador-productos input {
    border: none;
    outline: none;
    font-size: 15px;
    flex: 1;
    color: #1a1a1a;
}
.buscador-productos button {
    background: #FFD100;
    border: none;
    border-radius: 20px;
    padding: 8px 18px;
    font-weight: 600;
    color: #007A3D;
    cursor: pointer;
    font-size: 14px;
}
.buscador-productos button:hover {
    background: #e6bc00;
}
</style>

<section class="productos">

<div class="productos-header">
    <h2>Nuestros Productos</h2>
    <p>Explora nuestros productos por marca</p>
</div>

<!-- BUSCADOR CON AUTOCOMPLETADO -->
<div class="buscador-productos">
    <form action="<?= base_url('productos/buscar') ?>" method="GET" autocomplete="off">
        <input type="text" name="query" id="buscador-input" placeholder="Buscar producto...">
        <button type="submit">Buscar</button>
    </form>
    <ul id="sugerencias" style="
        position:absolute;
        top:100%;
        left:50%;
        transform:translateX(-50%);
        width:100%;
        max-width:500px;
        background:white;
        border-radius:15px;
        box-shadow:0 8px 20px rgba(0,0,0,0.15);
        list-style:none;
        margin:5px 0 0;
        padding:0;
        z-index:999;
        display:none;
    "></ul>
</div>

<?php foreach($marcas as $m){ ?>

<div class="marca-productos">

    <h3 class="marca-titulo"><?= $m->nombre ?></h3>

    <div class="productos-container">

    <?php foreach($m->productos as $p){ ?>

        <div class="producto-card">

            <img src="<?= base_url('assets/img/productos/'.$p->id_imagen) ?>">

            <h4><?= $p->nombre ?></h4>

            <p class="precio">$<?= $p->precio ?></p>

            <a href="javascript:void(0)" class="btn-producto" 
   onclick="verDetalle(<?= $p->id ?>, '<?= addslashes($p->nombre) ?>', '<?= $p->precio ?>', '<?= addslashes($p->descripcion) ?>', '<?= $p->id_imagen ?>')">
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

    <?php } ?>

    </div>

</div>

<?php } ?>

<script>
function agregarAlCarrito(id, precio, nombre, btn) {
    const cantidad = btn.closest('.producto-card').querySelector('select').value;
    alert('✅ ' + nombre + ' x' + cantidad + ' agregado al carrito');
}

const input = document.getElementById('buscador-input');
const lista = document.getElementById('sugerencias');

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
<div id="panel-detalle" style="
    position:fixed;
    top:0; right:-420px;
    width:400px;
    height:100%;
    background:white;
    box-shadow:-5px 0 30px rgba(0,0,0,0.15);
    z-index:9999;
    transition:right 0.3s ease;
    overflow-y:auto;
    padding:30px;
    box-sizing:border-box;
">
    <button onclick="cerrarPanel()" style="
        position:absolute;
        top:15px; right:15px;
        background:none;
        border:none;
        font-size:24px;
        cursor:pointer;
        color:#007A3D;
    ">✕</button>

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
        <button class="btn-carrito" id="panel-btn-carrito">
            Agregar al carrito
        </button>
    </div>
</div>

<div id="overlay-panel" onclick="cerrarPanel()" style="
    position:fixed;
    top:0;left:0;
    width:100%;height:100%;
    background:rgba(0,0,0,0.3);
    z-index:9998;
    display:none;
"></div>

<script>
function verDetalle(id, nombre, precio, descripcion, imagen) {
    document.getElementById('panel-img').src = '<?= base_url('assets/img/productos/') ?>' + imagen;
    document.getElementById('panel-nombre').textContent = nombre;
    document.getElementById('panel-precio').textContent = '$' + precio;
    document.getElementById('panel-desc').textContent = descripcion;

    document.getElementById('panel-btn-carrito').onclick = function() {
        const cantidad = document.getElementById('panel-cantidad').value;
        alert('✅ ' + nombre + ' x' + cantidad + ' agregado al carrito');
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