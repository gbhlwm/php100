<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/22
 * Time: 9:24
 */

final class finalclass1{
    function finalfun1(){
        echo "this is a final class!<br>";
    }
}

class finalclass2{
    final function finalfun2(){
        echo "this is a final fun,you can extend but can't be override<br>";
    }
}

class finalclass3 extends finalclass2{

}

$final = new finalclass1();
$final->finalfun1();
$final3 = new finalclass3();
@$final3->finalfun2();
//final class can't be extend , and final function can't be reload too.

//============================================================

class staticclass{
    static $name = "<br>this is a static name<br>";
    static function staticfun(){
        echo "this is a staticfun<br>";//static fun can't use not static "$..."
    }
    function hide(){
        echo "<br> my name is hide in next line <br>";
        echo $this->name."<br>can you see me?<br>";
    }
    function show(){
        echo self::$name."<br>can you see me? <br>";
    }
}

echo staticclass::$name;
staticclass::staticfun();
$static = new staticclass();
@$static->hide();
$static->show();
// static only can be use by key word "self"

//===============================================================



