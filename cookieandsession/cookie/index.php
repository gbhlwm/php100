<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/27
 * Time: 14:36
 */
if($_GET[out]){
    setcookie('id',"");
    setcookie('pw',"");
    echo "<script>location.href='index.php'</script>";//退出后立即返回没有cookie的登陆页面，如果没有这句需要再按一次退出按钮才能退出
}

if($_POST[name]&&$_POST[password]) {
    setcookie('id', $_POST[name], time() + 3600);
    setcookie('pw', $_POST[password], time() + 3600);
    echo "<script>location.href='index.php'</script>";//登录后立即进入有cookie的登陆页面，如果没有这句需要再按一次登录按钮才能进入

}
if($_COOKIE[id] && $_COOKIE[pw]){
    echo $_COOKIE[id]."<br>".$_COOKIE[pw];
    echo "<a href='index.php?out=out'>退出</a>";
}

?>
<form action="index.php" method="post">
    user:<input type="text" name="name"><br>
    password:<input type="text" name="password"><br>
    <input type="submit" value="login">
</form>