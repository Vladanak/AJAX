<?php
header("Content-type: image/png");
$Hour = date("H");
$Minute = date("i");
$image = imagecreate(300,300);
$dark_grey = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);
$red = imagecolorallocate($image, 255, 0, 0);
$green = imagecolorallocate($image, 0,255,0);
$string = "Hello World!";
$font_path = 'Gabriola.ttf';
imagearc($image,150,150,360,360,180,180,$red);
imagerectangle($image,75,120,225,180,$red);
imagettftext($image,50,0,85,157,$green,$font_path,"$Hour : $Minute");
imagettftext($image,50,0,225,40,$white,$font_path,"1");
imagettftext($image,50,0,260,90,$white,$font_path,"2");
imagettftext($image,50,0,275,155,$white,$font_path,"3");
imagettftext($image,50,0,260,230,$white,$font_path,"4");
imagettftext($image,50,0,220,280,$white,$font_path,"5");
imagettftext($image,50,0,135,300,$white,$font_path,"6");
imagettftext($image,50,0,60,275,$white,$font_path,"7");
imagettftext($image,50,0,10,230,$white,$font_path,"8");
imagettftext($image,50,0,0,155,$white,$font_path,"9");
imagettftext($image,50,0,10,90,$white,$font_path,"10");
imagettftext($image,50,0,40,40,$white,$font_path,"11");
imagettftext($image,50,0,125,25,$white,$font_path,"12");

imagepng($image);
?>
