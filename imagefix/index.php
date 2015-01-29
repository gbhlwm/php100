<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/28
 * Time: 13:55
 */

$image1="bg.jpg";
$bg =getimagesize($image1);
$image2="taobao.jpg";
$sp=getimagesize($image2);
$nbg = '';
switch($bg[2])
{
    case 1:
        $nbg = @imagecreatefromgif($image1);
        break;
    case 2:
        $nbg = @imagecreatefromjpeg($image1);
        break;
    case 3:
        $nbg = @imagecreatefrompng($image1);
        break;
}

//if($bg[2]==1){
//    $nbg = @imagecreatefromgif($image1);
//}
//elseif($bg[2]==2){
//    $nbg = @imagecreatefromjpeg($image1);
//}
//else{
//    $nbg = @imagecreatefrompng($image1);
//}
//
if($sp[2]==1){
    $obg = @imagecreatefromgif($image2);
}
elseif($sp[2]==2){
    $obg = @imagecreatefromjpeg($image2);
}
else{
    $obg = @imagecreatefrompng($image2);
}

$text = imagecolorallocate($nbg,255,255,255);
imagettftext($nbg,30,0,50,50,$text,'STXINWEI.TTF',"验证码");
imagecopy($nbg,$obg,200,0,0,0,241,241);

$new = imagecreate(500,500);
imagecopyresized($new,$nbg,0,0,0,0,500,500,$bg[0],$bg[1]);

//$nbg = @imagecreatefrompng($image1);
//print_r($bg);

header("Content-type:image/png");
imagepng($nbg);
//imagepng($new);

