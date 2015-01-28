<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/23
 * Time: 13:47
 */

include ('sql.php');
if($_POST['submit']){
    $sql_insert = clone $sql;
    $sql_insert->insert('message',' id,user,title,content,lastdate '," '','$_POST[user]','$_POST[title]','$_POST[content]',now()");
}
?>

<form action="index.php" method="post" onsubmit="return check();" name="messageform">
    user: <input type="text" size="10" name="user"><br>
    title: <input type="text" name="title"><br>
    content:<textarea rows="10" name="content"></textarea><br>
    <input type="submit" name="submit" value="ok"><br>
</form>

