<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/21
 * Time: 16:39
 */
class father{
    function show(){
        return "this is a father class ";
    }
    function play(){
        echo "this is a father class ";
    }
}

class son extends father{
    function show(){
        echo "this is a son class extends from ".father::show()."<br>";//注意echo的运行原理
        echo "this is a son class extends from ".$this->play();
    }
}

$extendsclass = new son();
$fatherclass = new father();
$extendsclass->show();
echo "<br>";
echo $fatherclass->show();