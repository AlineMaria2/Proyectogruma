<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/header.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/menu-lateral.css'); ?>">
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

<!-- BOTON TOGGLE -->
<div class="menu-toggle" id="menu-toggle">
☰
</div>

<nav>
<ul class="menu">

<li class="<?= ($this->uri->segment(2) == 'conocenos') ? 'activo' : '' ?>">
<a href="<?= base_url('paginas/conocenos') ?>">Somos Gruma</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'productos') ? 'activo' : '' ?>">
<a href="<?= base_url('productos') ?>">Productos</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'inversionistas') ? 'activo' : '' ?>">
<a href="<?= base_url('paginas/inversionistas') ?>">Inversionistas</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'innovacion') ? 'activo' : '' ?>">
<a href="<?= base_url('paginas/innovacion') ?>">Innovación</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'sustentabilidad') ? 'activo' : '' ?>">
<a href="<?= base_url('paginas/sustentabilidad') ?>">Sustentabilidad</a>
</li>

<li class="<?= ($this->uri->segment(2) == 'prensa') ? 'activo' : '' ?>">
<a href="<?= base_url('paginas/prensa') ?>">Sala de Prensa</a>
</li>

</ul>
</nav>
<!-- MENU LATERAL -->
<div class="menu-lateral" id="menu-lateral">

<div class="menu-top">

<a href="<?= base_url(); ?>" class="menu-logo-link">
<img src="<?= base_url('assets/img/logo.png') ?>" class="menu-logo">
</a>

<button class="menu-close" id="menu-close">✕</button>

</div>

<ul class="menu-links">

<li><a href="<?= base_url('paginas/conocenos') ?>">Somos Gruma</a></li>

<li><a href="<?= base_url('productos') ?>">Productos</a></li>

<li><a href="<?= base_url('paginas/inversionistas') ?>">Inversionistas</a></li>

<li><a href="<?= base_url('paginas/innovacion') ?>">Innovación</a></li>

<li><a href="<?= base_url('paginas/sustentabilidad') ?>">Sustentabilidad</a></li>

<li class="<?= ($this->uri->segment(1) == 'prensa') ? 'activo' : '' ?>">
    <a href="<?= base_url('prensa') ?>">Sala de Prensa</a>
</li>

<li><a href="<?= base_url('prensa') ?>">Sala de Prensa</a></li>
<li><a href="<?= base_url('paginas/contacto') ?>">Contacto</a></li>

<li><a href="<?= base_url('login') ?>">Sala de Prensa</a></li>
<li><a href="<?= base_url('paginas/inicio sesion') ?>">inicio sesion</a></li>



</ul>

</div>

<!-- FONDO OSCURO -->
<div class="overlay" id="overlay"></div>
</header>