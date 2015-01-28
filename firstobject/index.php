<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/21
 * Time: 14:46
 */

class Person{
    public $name;
    public $sex;
    public $marry;

    function __construct($name,$sex,$marry){
        $this->name = $name;
        $this->sex = $sex;
        $this->marry = $marry;
    }

    function show(){
        if($this->sex == "man")
        {
            if($this->marry == "no")
            {
                echo "His name is ".$this->name.", and he hasn't married.<br>";
            }
            else
            {
                echo "His name is ".$this->name.", and he has married.<br>";
            }
        }
        else{
            if($this->marry == "no")
            {
                echo "Her name is ".$this->name.", and she hasn't married.<br>";
            }
            else
            {
                echo "Her name is ".$this->name.", and she has married.<br>";
            }
        }
    }

    function __destruct(){
        echo "======".$this->name."======<br>";
    }
}

$person1 = new Person("Jhon","man","yes");
$person2 = new Person("Lisa","woman","no");

echo $person1->show();
echo $person2->show();
