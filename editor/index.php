<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/27
 * Time: 11:03
 */
include("fckeditor/fckeditor.php") ;
$sBasePath = $_SERVER['PHP_SELF'] ;
echo $sBasePath = dirname($sBasePath).'/fckeditor/';
$neweditor = new FCKeditor('editor1');
$neweditor->BasePath = $sBasePath;
$neweditor->Create();

