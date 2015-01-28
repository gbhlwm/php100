<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/21
 * Time: 11:11
 */
//@$aa = 1/0;
//var_dump($aa);
$url = "http://www.baidu.com";
$fr = @fopen($url,"r");
$str = file_get_contents($url);
echo $str;