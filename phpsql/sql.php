<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/23
 * Time: 13:51
 */

class sql{
    private $host;
    private $name;
    private $password;
    private $db;
    private $wordtype;

    function __construct($host,$name,$password,$db,$wordtype){
        $this->host = $host;
        $this->name = $name;
        $this->password = $password;
        $this->db = $db;
        $this->type = $wordtype;
        $this->connect();
        $this->settype();
    }

    function connect(){
        $link = @mysql_connect($this->host,$this->name,$this->password) or die("connect mysql error<br>");
        mysql_select_db($this->db,$link) or die("connect table error<br>");
    }

    function settype(){
        mysql_query("set name = '$this->wordtype'");
    }

    function query($query){
        mysql_query($query) or die("query error<br>");
    }

    function insert($table,$list,$value){
//        echo " insert into $table ($list) values ($value)";
        $this->query(" insert into $table ($list) values ($value)");
    }
}

$sql = new sql("localhost","root","root","test","GBK");
//$sql->insert('message' , ' id,user,title,content,lastdate ' , " '','甘炳辉','11111','1111',now() ");