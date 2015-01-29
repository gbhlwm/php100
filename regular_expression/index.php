<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/29
 * Time: 9:06
 */

echo "this is the practice of regular expression<br>";
@ereg('(abc)','abcdabcdabcdabcd',$arr1);
print_r($arr1);
echo"<br>";
preg_match('/\w(.*)/','abcdabcdabcdabcd',$arr);
print_r($arr);
echo "<hr>";

$mode1 = "/ng/";
$subject1="abcdefgbnhmxdbnghdsvngbnajsnvng";

if(preg_match($mode1,$subject1,$array1)){
    echo "success<br>";
    print_r($array1);
}
echo "<hr>";

$mode2 = "/(ng)/";
$subject2="abcdefgbnhmxdbnghdsvngbnajsnvng";

if(preg_match($mode2,$subject2,$array2)){
    echo "success<br>";
    print_r($array2);
}
echo "<hr>";

$mode3 = "/[ng]/";
$subject3="abcdefgbnhmxdbnghdsvngbnajsnvng";

if(preg_match($mode3,$subject3,$array3)){
    echo "success<br>";
    print_r($array3);
}

?>

<ul>
    <li><a href="yuanzifu.php">元字符</a></li>
    <li><a href="model_revise.php">模式修正符</a></li>
    <li><a href="application.php">模式修正符</a></li>
</ul>



