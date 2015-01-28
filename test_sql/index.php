<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/19
 * Time: 14:49
 */
include('conn.php');
$pagesize = 5;
echo $url = $_SERVER["REQUEST_URI"];
echo "<br>";
echo $url = parse_url($url);
echo "<br>";
echo $url = $url[path];
echo "<br>";

$nums = mysql_query("select * from message");
$num = mysql_num_rows($nums);

if($_GET[page]){
    $pages = $_GET[page];
    $page = ($pages-1)*$pagesize;
    $page .= ',';
}

if($num > $pagesize){
    if($pages <= 1) $pages=1;
    echo "total:$num"."<a href=$url?page=".($pages-1) .">prev</a> <a href=$url?page=" .($pages+1) .">next</a>";
}
?>

<script>
    function check(){
        if(messageform.user.value == ""){
            alert('user can not be null');
            messageform.user.focus();
            return false;
        }
        if(messageform.user.value.length > 5){
            alert('user can not be longer than 5');
            messageform.user.focus();
            return false;
        }
        if(messageform.title.value.length > 10){
            alert('title can not be longer than 10');
            messageform.title.focus();
            return false;
        }
        if(messageform.content.value == ""){
            alert('content can not be null');
            messageform.content.focus();
            return false;
        }
        else{
            <? if($_POST['submit']){
                    $sql_insert = "insert into message (id,user,title,content,lastdate) values ('','$_POST[user]','$_POST[title]','$_POST[content]',now())";
                    mysql_query($sql_insert);
                }
            ?>
        }
    }
</script>

<form action="index.php" method="post" onsubmit="return check();" name="messageform">
    user: <input type="text" size="10" name="user"><br>
    title: <input type="text" name="title"><br>
    content:<textarea rows="10" name="content"></textarea><br>
    <input type="submit" name="submit" value="ok"><br>
</form>

<ul>
<?
    echo $sql_select = "select * from message order by id desc limit $page $pagesize";
    $message = mysql_query($sql_select);
    while($array = mysql_fetch_array($message)){
?>
        -------------------
    <li>user:<?=$array[user]?></li>
    <li>title:<?=$array[title]?></li>
    <li>content:<?=htmtocode($array[content])?></li>
<?
    }
?>
</ul>