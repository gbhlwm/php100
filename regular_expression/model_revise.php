<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/29
 * Time: 15:07
 */

echo "this is the practice of '模式修正符'<br>";

echo"<hr>";//修正符i 不区分大小写
$mode1 = "/[a-z]/i";
$subject1 = "sfADsdggAAFd";
echo "model : ".$mode1."<br>subject : ".$subject1."<br>";
preg_match_all($mode1,$subject1,$arr1);
var_dump($arr1);

echo"<hr>";//修正符m 可换行匹配首尾内容
$mode2 = "/^a(.)g/m";
echo $subject2 = "sfAD\nadggAAFd";
echo "model : ".$mode2."<br>subject : ".$subject2."<br>";
preg_match_all($mode2,$subject2,$arr2);
var_dump($arr2);

echo"<hr>";//修正符s 可以将回车取消视为单行
$mode3 = "/a(.)g/s";
echo $subject3 = "saagfAD<br>adggAAFd";
echo "model : ".$mode3."<br>subject : ".$subject3."<br>";
preg_match_all($mode3,$subject3,$arr3);
var_dump($arr3);
