<div class="swiper banner-slider">

<div class="swiper-wrapper">

<?php foreach($banner as $b){ ?>

<div class="swiper-slide">

<img src="<?= base_url('assets/img/banner/'.$b->imagen) ?>">

</div>

<?php } ?>

</div>

<div class="swiper-pagination"></div>

<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

</div>