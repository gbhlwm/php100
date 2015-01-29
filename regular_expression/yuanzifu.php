<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/29
 * Time: 10:21
 */

echo "this is the practice of metacharacter<br>";

echo "<hr>";
$mode1 = "/[a-z]/";
$subject1="abcdefgbnhmxdbnghdsvngbnajsnvng";
echo "model : ".$mode1."<br>subject : ".$subject1."<br>";
if(preg_match($mode1,$subject1,$array1)){
    echo "success<br>";
    print_r($array1);
}

echo "<hr>";//匹配前一个内容n次或者0次
$mode2 = "/ng*h/";
$subject2="abcdefgbnhmxdbnghdsvngbnajsnvng";
echo "model : ".$mode2."<br>subject : ".$subject2."<br>";
if(preg_match_all($mode2,$subject2,$array2)){
    var_dump($array2);
}

echo "<hr>";//匹配前一个内容n次，不包含0次
$mode3 = "/ng+h/";
$subject3="abcdefgbnhmxdbnghdsvngbnajsnvng";
echo "model : ".$mode3."<br>subject : ".$subject3."<br>";
if(preg_match_all($mode3,$subject3,$array3)){
    var_dump($array3);
}

echo "<hr>";//匹配前一个内容0次或者1次
$mode4 = "/ng?h/";
$subject4="abcdefgbnhmxdbnghdsvngbnajsnvnggh";
echo "model : ".$mode4."<br>subject : ".$subject4."<br>";
if(preg_match_all($mode4,$subject4,$array4)){
    var_dump($array4);
}

echo "<hr>";//本身为内容，表示任何字符，但不包含回车换行,可与其它元字符配合使用
$mode5 = "/n.h/";
$subject5="abcdefgbnhmxdbnghdsvngbnajsnvnggh";
echo "model : ".$mode5."<br>subject : ".$subject5."<br>";
if(preg_match_all($mode5,$subject5,$array5)){
    var_dump($array5);
}

echo "<hr>";//或者
$mode6 = "/ng|gh/";
$subject6="abcdefgbnhmxdbnghdsvngbnajsnvnggh";
echo "model : ".$mode6."<br>subject : ".$subject6."<br>";
if(preg_match_all($mode6,$subject6,$array6)){
    var_dump($array6);
}

echo "<hr>";//字符串首有没有这个内容
$mode7 = "/^abc/";
$subject7="abcdefgbnhmxdbnghdsvngbnajsnvnggh";
echo "model : ".$mode7."<br>subject : ".$subject7."<br>";
if(preg_match_all($mode7,$subject7,$array7)){
    var_dump($array7);
}

echo "<hr>";//字符串尾有没有这个内容
$mode8 = "/abc$/";
$subject8="abcdefgbnhmxdbnghdsvngbnajsnvngghabc";
echo "model : ".$mode8."<br>subject : ".$subject8."<br>";
if(preg_match_all($mode8,$subject8,$array8)){
    var_dump($array8);
}

echo "<hr>";//字符串首尾有没有这个内容
$mode9 = "/^abc.?abc$/";
$subject9="abcdabc";
echo "model : ".$mode9."<br>subject : ".$subject9."<br>";
if(preg_match_all($mode9,$subject9,$array9)){
    var_dump($array9);
}

echo "<hr>";//单词边界，边界必须是空格或者特殊符号
$mode10 = "/\bng\b/";
$subject10="abcdefgbnhmxdb ng hdsv ng bnajsnv ng ghabc";
echo "model : ".$mode10."<br>subject : ".$subject10."<br>";
if(preg_match_all($mode10,$subject10,$array10)){
    var_dump($array10);
}

echo "<hr>";//可设置前一个内容的匹配次数{m，}->大于等于m，{m，n}->m到n次
$mode11 = "/a{1}b/";
$subject11="abcdabc";
echo "model : ".$mode11."<br>subject : ".$subject11."<br>";
if(preg_match_all($mode11,$subject11,$array11)){
    var_dump($array11);
}

echo "<hr>";//（）后面加\n可以在那个位置匹配n次或零次
$mode12 = "/d(abc)\\1/";
$subject12="abcdabcabcabcabcdd";
echo "model : ".$mode12."<br>subject : ".$subject12."<br>";
if(preg_match($mode12,$subject12,$array12)){
    var_dump($array12);
}

echo "<hr>";//（）连接符号的匹配
$mode13 = "/a(.*)b\\1c/";
$subject13="a-b-ca/b/c";
echo "model : ".$mode13."<br>subject : ".$subject13."<br>";
if(preg_match_all($mode13,$subject13,$array13)){
    print_r($array13);
    var_dump($array13);
}

