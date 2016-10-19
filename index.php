<?php
$im = imagecreatefromjpeg('background.jpg');  

//The numbers are the RGB values of the color you want to use 
$black = ImageColorAllocate($im, 0, 0, 0); 

//The canvas's (0,0) position is the upper left corner 
//So this is how far down and to the right the text should start 
$start_x = 10; 
$start_y = 20; 

$font = 'arial.ttf';


Imagettftext($im, 12, 0, $start_x, $start_y, $black, $font, 'text to write tuấn'); 

//Creates the jpeg image and sends it to the browser 
//100 is the jpeg quality percentage 
header('Content-Type: image/jpeg');
Imagejpeg($im, NULL, 100);
//Imagejpeg($im, "result.jpeg", 100);

ImageDestroy($im)
?>