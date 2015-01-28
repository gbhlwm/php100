<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/23
 * Time: 10:10
 */


interface myusb{
    function type();
    function alert();
}

class zip implements myusb{
    public $ziptype;
    function __construct($ziptype){
        $this->ziptype = $ziptype;
    }
    function type(){
        echo "version ".$this->ziptype."<br>";
    }
    function alert(){
        echo "download version ".$this->ziptype." driver<br>";
    }
}

class mp3 implements myusb{
    public  $mp3type;
    function __construct($mp3type){
        $this->mp3type = $mp3type;
    }
    function type(){
        echo "version ".$this->mp3type."<br>";
    }
    function alert(){
        echo "download version " .$this->mp3type." driver<br>";
    }
}

class mypc{
    function usbcheck($usbtype){
        if($usbtype instanceof zip){
            echo "this is a zip<br>";
        }
        if($usbtype instanceof mp3){
            echo "this is a mp3<br>";
        }
        $usbtype->type();
        $usbtype->alert();
    }
}

$pc = new mypc();
$zip = new zip(3.01);
$mp3 = new mp3(2.01);

$pc->usbcheck($zip);
$pc->usbcheck($mp3);

