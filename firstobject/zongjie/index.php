<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/23
 * Time: 11:09
 */

function __autoload($classn){
    include($classn.".php");
}

class includeson extends a {

}

class lastclass{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
    function __tostring(){
        return "this is a null class and it's name is ".$this->name."<br>";
    }
    function __call($class,$value){
        echo "has not this class ".$class."<br>";
    }
    function __destruct(){
        echo "object has delete<br>";
    }
    function __clone(){
        $this->name = "last1name";
    }
}

$last = new lastclass(lastname);
echo $last;
$last->false();
$last1 = clone $last;
echo $last1;

$includeson = new includeson();
$bson = new b();
echo $includeson;
echo $bson;

