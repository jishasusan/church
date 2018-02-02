<?php
$id=$_POST["id"];
$day=$_POST["day"];
$morningprayer=$_POST["morningprayer"];
$morningtime=$_POST["morningtime"];
$eveningprayer=$_POST["eveningprayer"];
$eveningtime=$_POST["eveningtime"];
$description=$_POST["description"];
include 'co.php';
$sql="update `dailyprayer` SET `day` = '$day', `morningprayer` = '$morningprayer', `morningtime` = '$morningtime', `eveningprayer` = '$eveningprayer', `eveningtime` = '$eveningtime', `description` = '$description'
 WHERE `dailyprayer`.`id` = '$id' ";
$results=mysqli_query($con,$sql);
//echo $sql;
header("location:dview.php");
?>
