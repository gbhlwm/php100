<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/27
 * Time: 16:44
 */
session_start();
if($_POST[code]){
    if($_POST[code]==$_SESSION[pic]){
        echo "same<br>";
    }
    else{
        echo "different<br> correct code is ".$_SESSION[pic];
    }
}

?>
<form action="index.php" method="post">
    <img src="../index.php"><br>
    input the code:<input type="text" name="code"><br>
    <input type="submit" value="compare">
</form>