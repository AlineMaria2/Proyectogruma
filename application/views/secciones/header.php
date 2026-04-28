<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css?v=' . time()); ?>"> 
<link rel="stylesheet" href="<?php echo base_url('assets/css/menúlateral.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/marcas.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/historia.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/filosofia.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/footer.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/productos.css'); ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<header class="navbar">

<a href="<?php echo base_url(); ?>" class="logo">
    <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Gruma">
</a>

<div class="menu-toggle" id="menu-toggle">
☰
</div>

<nav>
<ul class="menu">

<li class="<?= ($this->uri->segment(2) == 'conocenos') ? 'activo' : '' ?>">
<a href="<?= base_url('productos/conocenos') ?>">Somos Gruma</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'productos') ? 'activo' : '' ?>">
<a href="<?= base_url('productos') ?>">Productos</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'inversionistas') ? 'activo' : '' ?>">
    <a href="<?= base_url('productos/inversionistas') ?>">Inversionistas</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'innovacion') ? 'activo' : '' ?>">
<a href="<?= base_url('productos/innovacion') ?>">Innovación</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'sustentabilidad') ? 'activo' : '' ?>">
<a href="<?= base_url('productos/sustentabilidad') ?>">Sustentabilidad</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'prensa') ? 'activo' : '' ?>">
<a href="<?= base_url('productos/prensa') ?>">Sala de Prensa</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'contacto') ? 'activo' : '' ?>">
    <a href="<?= base_url('productos/contacto') ?>">Contáctanos</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'alta_pedidos') ? 'activo' : '' ?>">
    <a href="<?= base_url('productos/alta_pedidos') ?>" style="color: #FFD100; font-weight: bold;">
        <i class="fa-solid fa-cart-plus"></i> Alta de Pedidos
    </a>
</li>
<form action="<?= base_url('productos/buscar') ?>" method="GET" autocomplete="off">
    <input type="text" name="query" placeholder="Buscar...">
    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>
</ul>
 
</nav>
<div class="menu-lateral" id="menu-lateral">

<div class="menu-top">

<a href="<?= base_url(); ?>" class="menu-logo-link">
<img src="<?= base_url('assets/img/logo.png') ?>" class="menu-logo">
</a>

<button class="menu-close" id="menu-close">✕</button>

</div>

<ul class="menu-links">

<li><a href="<?= base_url('productos/conocenos') ?>">Somos Gruma</a></li>

<li><a href="<?= base_url('productos') ?>">Productos</a></li>

<li><a href="<?= base_url('productos/inversionistas') ?>">Inversionistas</a></li>

<li><a href="<?= base_url('productos/innovacion') ?>">Innovación</a></li>

<li><a href="<?= base_url('productos/sustentabilidad') ?>">Sustentabilidad</a></li>

<li><a href="<?= base_url('index.php/productos/prensa') ?>">Sala de Prensa</a></li>

<li><a href="<?= base_url('productos/contacto') ?>">Contacto</a></li>

<ul class="menu-links">
    <li><a href="<?= base_url('paginas/conocenos') ?>">Somos Gruma</a></li>
    <li><a href="<?= base_url('productos') ?>">Productos</a></li>
    <li><a href="<?= base_url('paginas/inversionistas') ?>">Inversionistas</a></li>
    <li><a href="<?= base_url('paginas/innovacion') ?>">Innovación</a></li>
    <li><a href="<?= base_url('paginas/sustentabilidad') ?>">Sustentabilidad</a></li>
    <li><a href="#">Sala de Prensa</a></li>

    <li class="search-container">
        <input type="text" id="inputBuscador" name="query" placeholder="BUSCAR...">
        <button type="button" onclick="ejecutarBusqueda()">
            <i class="fas fa-search"></i>
        </button>
    </li>
</ul>
</ul>

</div>

<div class="overlay" id="overlay"></div>
</header>

<script>
    // ESTA FUNCION ENVIA LA BUSQUEDA DESDE EL MENU LATERAL
    function ejecutarBusqueda() {
        const query = document.getElementById('inputBuscador').value;
        if (query.trim() !== "") {
            window.location.href = "<?= base_url('productos/buscar') ?>?query=" + encodeURIComponent(query);
        }
    }

   
    document.getElementById('inputBuscador').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            ejecutarBusqueda();
        }
    });
</script>