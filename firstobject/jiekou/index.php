<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/22
 * Time: 10:34
 */

interface demo1{
    function fun1();
}
interface demo2{
    function fun2();
}
interface demo3{
    function fun3();
}
interface demo4{
    function fun4();
}

class fatherclass implements demo1 ,demo2 ,demo3{
    const NAME1 = "fatherclass<br>";
    function fun1(){
        echo "this is a interface fun1<br>";
    }
    function fun2(){
        echo "this is a interface fun2<br>";
    }
    function fun3(){
        echo "this is a interface fun3<br>";
    }
}

class sonclass extends fatherclass implements demo4{
    const NAME2 = "sonclass<br>";
    function fun4(){
        echo "this is a interface fun4<br>";
    }
}

$a = new fatherclass();
echo fatherclass::NAME1;
$a->fun1();
$a->fun2();
$a->fun3();
$b = new sonclass();
echo sonclass::NAME2;
$b->fun1();
$b->fun2();
$b->fun3();
$b->fun4();
