<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/29
 * Time: 15:55
 */

echo "this is the practice about regular of php<br>";

$subject = "{title}ggg{content}hhhh";
//$mode = "/{(.*)}/U";
//preg_match_all($mode,$subject,$arr);
//var_dump($arr);
//echo preg_replace($mode,'Title',$subject);
$mode = array("/{title}/","/{content}/");
$re = array("{Title}","{Content}");
echo "mode : ";
var_dump($mode);
echo "subject : ".$subject ."<br>";
echo preg_replace($mode,$re,$subject);

echo "<hr>";

$mo = "/(\d)/ie";//修正符e可以执行替换内容的函数
$su = "(gg)123<br>(bb)121";

echo @preg_replace($mo,"md5(\\1)",$su,6);//替换次数

echo "<hr>";
$m = "/[a]/";
$s = "gbhagbhaffgassdaggh";
var_dump(preg_split($m,$s,3));
