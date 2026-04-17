<footer class="footer">

<div class="footer-linea"></div>

<div class="footer-container">

<!-- LOGO Y DESCRIPCION -->


<div class="footer-col">

<img src="<?= base_url('assets/img/logo.png') ?>" class="footer-logo">

<p>
Empresa global líder en la producción de alimentos a base de maíz y trigo,
con presencia en más de 110 países y 70+ plantas de producción alrededor del mundo.
</p>

</div>

<!-- ENLACES -->

<div class="footer-col">

<h4>Explorar</h4>

<ul>

<li><a href="<?= base_url('paginas/conocenos') ?>">Conócenos</a></li>
<li><a href="<?= base_url('paginas/productos') ?>">Productos</a></li>
<li><a href="<?= base_url('paginas/inversionistas') ?>">Inversionistas</a></li>
<li><a href="<?= base_url('paginas/prensa') ?>">Sala de Prensa</a></li>

</ul>

</div>

<!-- DATOS GLOBALES -->



<div class="footer-col">

<h4>Presencia</h4>

<ul class="footer-datos">

<li><strong>110+</strong> países</li>
<li><strong>72</strong> plantas</li>
<li><strong>22,000+</strong> colaboradores</li>

</ul>

</div>

<div class="footer-col">

<h4>Contacto</h4>

<p>
<strong>Interior de la República</strong><br>
800 712 5050
</p>

<p>
<strong>Área Metropolitana / CDMX</strong><br>
55 5366 9905
</p>

<p>
<strong>Servicio al cliente</strong><br>
Lunes a Viernes: 8:00 am - 8:00 pm<br>
Sábado: 9:00 am - 2:00 pm
</p>

<p>
<strong>Dirección:</strong><br>
Av. Toltecas 4, Los Reyes Ixtacala,<br>
Tlalnepantla, Estado de México
</p>

</div>

<!-- REDES SOCIALES -->

<div class="footer-col">

<h4>Síguenos</h4>

<div class="footer-redes">

<a href="https://www.facebook.com/GRUMA/" target="_blank">
<i class="fa-brands fa-facebook-f"></i>
</a>

<a href="http://goo.gl/m33DQo" target="_blank">
<i class="fa-brands fa-instagram"></i>
</a>

<a href="https://x.com/GrumaGlobal" target="_blank">
<i class="fa-brands fa-x-twitter"></i>
</a>

<a href="https://www.linkedin.com/company/gruma" target="_blank">
<i class="fa-brands fa-linkedin-in"></i>
</a>

<a href="https://www.youtube.com/@vegetta777" target="_blank">
<i class="fa-brands fa-youtube"></i>
</a>

</div>

</div>

</div>

<div class="footer-bottom">

<p>© 2026 GRUMA | Proyecto académico</p>

</div>

</footer>

<script>

const toggle = document.getElementById("menu-toggle");
const menu = document.getElementById("menu-lateral");
const close = document.getElementById("menu-close");
const overlay = document.getElementById("overlay");

toggle.onclick = () => {
menu.classList.add("activo");
overlay.classList.add("activo");
};

close.onclick = () => {
menu.classList.remove("activo");
overlay.classList.remove("activo");
};

overlay.onclick = () => {
menu.classList.remove("activo");
overlay.classList.remove("activo");
};

</script>

<script>

let index = 0;
const slides = document.querySelectorAll(".slide");

function mostrarSlide(){

slides.forEach((slide,i)=>{
slide.style.display = i === index ? "block":"none";
});

index++;

if(index >= slides.length){
index = 0;
}

}

setInterval(mostrarSlide,4000);

mostrarSlide();

</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
const swiper = new Swiper('.swiper', {

loop:true,

autoplay:{
delay:4000,
},


speed:1500,

effect:'fade',
fadeEffect:{
crossFade:true
},

pagination:{
el:'.swiper-pagination',
clickable:true,
},

navigation:{
nextEl:'.swiper-button-next',
prevEl:'.swiper-button-prev',
},

breakpoints:{

768:{
slidesPerView:1
},

1024:{
slidesPerView:1

}

}

});
</script>

<script>

document.addEventListener("DOMContentLoaded", function(){

const elementos = document.querySelectorAll(".animar-anio");
const observer = new IntersectionObserver((entries)=>{
entries.forEach(entry=>{
if(entry.isIntersecting){
entry.target.classList.add("visible");
}
});
},{
threshold:0.5
});
elementos.forEach(el=>observer.observe(el));
});
</script>



</body>
</html>