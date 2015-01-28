<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/21
 * Time: 17:30
 */

abstract class abclass{
    abstract function fun1();//必须在抽象类中
    abstract function fun2();//必须在抽象类中

    function show(){
        echo "this is a sonclass extends from a abstract class <br>";
    }
}

class sonclass extends abclass{
    function fun1(){
        echo "abstract fun1<br>";//必须实例化
    }
    function fun2(){
        echo "abstract fun2<br>";//必须实例化
    }
}

$absonclass = new sonclass();
$absonclass->fun1();
$absonclass->show();
