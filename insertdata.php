<?php

require('dbconnect.php');

$id=$_GET["idp"];

$sql = "INSERT INTO `gameorder` (`name`, `descript`, `price`,`img`) SELECT `name`,`descript`,`price`,`img` FROM `product` WHERE `id`=$id";
$result=mysqli_query($con,$sql);

if($result){
    header("location:afterlogin.php");
    exit(0);
}
else{
    echo "no";
}

?>