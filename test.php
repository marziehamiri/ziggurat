<?php
/**
 * Created by PhpStorm.
 * User: behi.n
 * Date: 5/13/2019
 * Time: 2:24 AM
 */

$im = imagecreatetruecolor(200, 70);//200 x 70 pixel image
$red=imagecolorallocate($im,255,0,0);
$coords = imagettftext("b", 10,  10, 10, $color, 'IRANSans.ttf', $letter);


header('Content-type:image/png');
imagepng($im);
imagedestroy($im);