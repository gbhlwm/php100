<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/19
 * Time: 14:40
 */

$conn = @mysql_connect("localhost","root","root") or die("connect db error");
mysql_select_db('test',$conn);
mysql_query("set names = 'GBK'");

function htmtocode($content){
    $content = str_replace("\n" , "<br>",str_replace(" ","&nbsp",$content));
    return $content;
}