<?php
session_start();
header("Content-type: image/png");

$codigo = substr(md5(time()), 0, 5); // Genera 5 caracteres aleatorios
$_SESSION['captcha_code'] = $codigo;

$imagen = imagecreate(100, 30);
$color_fondo = imagecolorallocate($imagen, 255, 255, 255); // Blanco
$color_texto = imagecolorallocate($imagen, 0, 0, 0);       // Negro

imagestring($imagen, 5, 25, 8, $codigo, $color_texto);
imagepng($imagen);
imagedestroy($imagen);
?>