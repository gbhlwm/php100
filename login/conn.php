<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/19
 * Time: 19:39
 */

if($conn = @mysql_connect("localhost","root","root") or die("connect db error") != 'connect db error') {
    mysql_select_db('test', $conn);
    mysql_query("set names = 'GBK'");
}

$word = "gbh";
echo md5($word);