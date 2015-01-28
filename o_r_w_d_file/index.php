<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/20
 * Time: 17:13
 */
if($_POST['create']){
    $fp = fopen("test.html","r");
    $str = fread($fp,filesize("test.html"));
    $str = str_replace("{title}",$_POST[title],$str);
    $str = str_replace("{content}",$_POST[content],$str);
    fclose($fp);
    $path = $_POST[addr].'.html';
    $new = fopen($path ,"w");
    fwrite($new,$str);
    fclose($new);
}
if($_POST['delete']){

    unlink($_POST[old]);
}

//$fp = fopen("test.html","r");
//var_dump($fp);
//$str = fread($fp,filesize("test.html"));
//var_dump($str);
//$str = str_replace("{title}",'new title',$str);
//var_dump($str);
//$str = str_replace("{content}",'new content',$str);
//fclose($fp);
//$path = 'new2.html';
//$new = fopen($path ,"w");
//fwrite($new,$str);
//fclose($new);

?>

<form action="index.php" name="create-form" method="post">
    创建文件<input type="submit" name="create" value="创建"><br>
    文件地址：<input type="text" name="addr">请使用小写字母<br>
    文件标题：<input type="text" name="title"><br>
    文件内容：<input type="text" name="content"><br>
    删除文件<input type="submit" name="delete" value="删除"><br>
    输入地址：<input type="text" name="old">
</form>