<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/27
 * Time: 14:36
 */
session_start();

if($_GET[out]){
    unset($_SESSION[name]);
    unset($_SESSION[pw]);
//    echo "<script>location.href='index.php'</script>";//session实时生效
}

if($_POST[name]&&$_POST[password]) {
    $_SESSION[name] = $_POST[name];
    $_SESSION[pw] = $_POST[password];
//    echo "<script>location.href='index.php'</script>";//session实时生效

}
if($_SESSION[name] && $_SESSION[pw]){
    echo $_SESSION[name]."<br>".$_SESSION[pw];
    echo "<a href='index.php?out=out'>退出</a>";
}

?>
<form action="index.php" method="post">
    user:<input type="text" name="name"><br>
    password:<input type="text" name="password"><br>
    <input type="submit" value="login">
</form>