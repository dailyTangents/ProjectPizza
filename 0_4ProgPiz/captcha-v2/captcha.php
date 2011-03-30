<?php
session_start(); 
Header("Content-type: image/png");
$Width=126;
$Height=30;
$img = ImageCreateTrueColor($Width, $Height);
$bg = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $bg);
$randgrid=rand(7,11);
$grid = imagecolorallocate($img, 225, 225, 225);
imagesetstyle($img, array($bg, $grid));
imagegrid($img, $Width, $Height, $randgrid, IMG_COLOR_STYLED);
$randangle=rand(-3,5);
$randay=rand(22,24);
$randfnt=rand(22,24);
$font = 'fontf/4114blaster.ttf';
$white = imagecolorallocate($img, 83, 98, 176);
$word = rand(11111,99999);
$where = imagettfbbox($randfnt, 0, $font, $word);
$_SESSION['check'] = ($word); 
imagettftext($img, $randfnt, $randangle, ($Width - $where[4]) / 2, $randay, $white, $font, $word);
ImagePNG($img);
ImageDestroy($img);
function imagegrid($image, $w, $h, $s, $color)
{
    for($iw=1; $iw<$w/$s; $iw++){imageline($image, $iw*$s, 0, $iw*$s, $w, $color);}
    for($ih=1; $ih<$h/$s; $ih++){imageline($image, 0, $ih*$s, $w, $ih*$s, $color);}
}
?>

