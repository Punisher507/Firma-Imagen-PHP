<?php
/*if (!isset($_GET["texto1"]) || !isset($_GET["texto2"])) {
    exit("No hay texto que colocar");
}*/
$rutaFuente = __DIR__ . "/" . "webfonts/Lato-Black.ttf"; //Libreria de tipografía de letra 
$nombreImagen = "images/Firma_imagen.png";
$imagen = imagecreatefrompng($nombreImagen);
$color = imagecolorallocate($imagen, 31, 78, 120);
$texto1 = $_GET["texto1"];
$texto2 = $_GET["texto2"];
$texto3 = $_GET["texto3"];
$texto4 = $_GET["texto4"];
$texto5 = $_GET["texto5"];
$texto6 = $_GET["texto6"];
$texto7 = $_GET["texto7"];
/* Para pruebas con texto 
$texto1 = "Enocjahaziel Carrasco";
$texto2 = "Analista Programador";
$texto3 = "Main Office :";
$texto4 = "Santiago Veraguas Panama";
$texto5 = "Panama City, Republic of Panama. ";
$texto6 = "hone: +507 0000000| Cel: +507 0000000";
$texto7 = "correo@correo";
*/
$tamanio = 12; // tamaño de la letra
$angulo = 0; //posicion de las letras vertical o horizontal 
$espacio = 10; //  distancia entre lineas 
$x = 183; //inicia x 
$y = 20;   // inicia y para primera Letra
//$x2 = 400;
$x4 = 430;
$x5 = 450;
$x6 = 410;
$x7 = 385;
$y2 = $y + $espacio + $tamanio;
$y3 = $y2 + $espacio + $tamanio;
$y3 = $y3 + 5;
$espacio = 5;
$y4 = $y3 + $espacio + $tamanio;
$y5 = $y4 + $espacio + $tamanio;
$y6 = $y5 + $espacio + $tamanio;
//$y6 = $y6 + 3;
$y7 = $y6 + $espacio + $tamanio;
//$y7 = $y7 + 5;
imagettftext($imagen, $tamanio, $angulo, $x, $y, $color, $rutaFuente, $texto1);
$tamanio = 11;
imagettftext($imagen, $tamanio, $angulo, $x, $y2, $color, $rutaFuente, $texto2);
$tamanio = 10;
imagettftext($imagen, $tamanio, $angulo, $x, $y3, $color, $rutaFuente, $texto3);
imagettftext($imagen, $tamanio, $angulo, $x, $y4, $color, $rutaFuente, $texto4);
imagettftext($imagen, $tamanio, $angulo, $x, $y5, $color, $rutaFuente, $texto5);
imagettftext($imagen, $tamanio, $angulo, $x, $y6, $color, $rutaFuente, $texto6);
imagettftext($imagen, $tamanio, $angulo, $x7, $y7, $color, $rutaFuente, $texto7);
header("Content-Type: image/png");
imagepng($imagen);