<?php
/**
 * Created by PhpStorm.
 * User: Gbh
 * Date: 2015/1/20
 * Time: 14:10
 */

if(is_uploaded_file($_FILES['filename']['tmp_name'])){
    $filename = $_FILES["filename"];
    $name = $filename["name"];
    $size = $filename["size"];
    $type = $filename["type"];
    $tmp_name = $filename["tmp_name"];

    move_uploaded_file($tmp_name,'upload/'.$name);
    echo('upload/'.$name);
}

?>

<form action="" enctype="multipart/form-data" method="post" name="upform">
    upload files:
    <input type="file" name="filename">
    <input type="submit" value="updown">
</form>