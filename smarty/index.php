<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/26
 * Time: 9:10
 */

include_once ("smarty/Smarty.class.php"); //包含smarty类文件
$smarty = new Smarty();
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$uid = $_GET[id];
$titlevalue = "smarty 变量操作符的使用";
$key = array('a'=>'plan a','b'=>'plan b','c'=>'plan c');
$nokey = array('plan d','plan e','plan f');
$smarty->assign("uid",$uid);
$smarty->assign("key",$key);
$smarty->assign("nokey",$nokey);
$smarty->assign("titlename",$titlevalue);

$smarty->display("main.html",$uid);
echo "============================================================<br>";
$smarty->display("smarty_function.html");

if($uid=''){
    $smarty->clearAllCache();
}
else{
    $smarty->clearCache();
}
