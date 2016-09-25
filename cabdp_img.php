<?php
$dpcab = $_GET['img'];
$dpcab_arr = explode(":",$dpcab);
$dpno = $dpcab_arr[1];
$nopos = 10;
if (strlen($dpno)==2) $nopos = 6;
elseif (strlen($dpno)==3) $nopos = 2;
$im = ImageCreateFromPNG('images/'.$dpcab_arr[0].'.png'); 
$white = imagecolorallocate($im, 255, 255, 254);
$trans = imagecolorallocate($im, 255, 255, 255);
$font = imageloadfont('images/franklin_gothic_demi_cond.gdf');
imagestring($im, $font, $nopos, 2, $dpno, $white);
imagecolortransparent($im, $trans);
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>
