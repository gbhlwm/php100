<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/21
 * Time: 15:49
 */

class Answer{
    private  $answer1 = 2;

    function __get(){
        return $this->answer1;
    }

    function __set($n,$v){
        $this->$n = $v;
    }
}

$answer1 = new Answer();

$answer1->answer1 = 3;