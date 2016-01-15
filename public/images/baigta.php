<?php

$im = imagecreate(100, 20);
ImageColorAllocate($im,252,243,216);

$k=38;
$kof=100/$k;
$kiekis=140;
for($u=0; $u<$k; $u++) {
	$kiekis=floor($kof+$kiekis);
	$spalva=ImageColorAllocate($im,4,$kiekis,20);
	imageline($im,$u,0,$u,83,$spalva);
}
$juoda=ImageColorAllocate($im,0,0,0);
$tekstas=ImageColorAllocate($im,156,130,0);
//imageline($im,0,0,100,0,$juoda);
//imageline($im,0,0,0,20,$juoda);
//imageline($im,99,0,99,19,$juoda);
//imageline($im,0,19,99,19,$juoda);
if($k==100) {
	imagestring($im, 5,8, 3,"---$k%-->", $tekstas); }
	else {
	imagestring($im, 5,15, 3,"---$k%-->", $tekstas); }
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>