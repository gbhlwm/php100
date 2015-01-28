<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/19
 * Time: 19:43
 */
include ('conn.php');
if($_GET[out]) {
    setcookie("cookie", "out");
    echo "<script>location.href='index.php';</script>";
    }
if($_POST[name] == 'gbh') {
    $pw = md5($_POST[pwd]);
    if ($pw == "d44e7a48a82a23abf02c6efdeb0a056a") {
        setcookie("cookie", "ok");
        echo "<script>location.href='index.php';</script>";
    }
}
if($_COOKIE['cookie'] != 'ok'){
?>

<script>
    function check(){
        if(myform.name.value==""){
            alert("user can not be null");
            myform.name.focus();
            return false;
        }
        if(myform.name.value.length > 10){
            alert("user name can not be longer than 10");
            myform.pwd.focus();
            return false;
        }
        if(myform.pwd.value==""){
            alert("password can not be null");
            myform.pwd.focus();
            return false;
        }
        if(myform.pwd.value.length > 10){
            alert("password can not be longer than 10");
            myform.pwd.focus();
            return false;
        }
    }
</script>

<div id="index">
    <div class="login">
        <form action="" method="post" name="myform" onsubmit="return check();">
            <div class="user">
                <h4>user:</h4>
                <input type="text" name="name" class="name-input">
            </div>
            <div class="password">
                <h4>password:</h4>
                <input type="password" name="pwd">
            </div>
            <br><input type="submit" name="submit" value="login">
        </form>
    </div>
</div>
<?
}else{
?>
<a href='?out=index'>out</a>
<? }?>