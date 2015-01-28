<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/27
 * Time: 16:26
 */

session_start();

for($num=0;$num<4;$num++){
    $randnum .= dechex(rand(1,15));
}

$_SESSION[pic]=$randnum;

$img = imagecreatetruecolor(100,30);
$bg = imagecolorallocate($img,0,0,0);
$text = imagecolorallocate($img,255,255,255);
$line = imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
imagestring($img,rand(5,8),rand(3,70),rand(3,15),$randnum,$text);
//$str = iconv('gbk','UTF-8',"验证码");
imagettftext($img,10,0,10,10,$text,'STXINWEI.TTF',"验证码");
for($i=0;$i<3;$i++){
    imageline($img,0,rand(0,15),100,rand(15,30),$line);
}

for($n=0;$n<200;$n++){
    imagesetpixel($img,rand(0,300),rand(0,30),$text);
}

header("Content-type:image/jpeg");
imagejpeg($img);