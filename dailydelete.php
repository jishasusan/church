<?php
$id=$_REQUEST['id'];
include 'co.php';
$sql="delete from dailyprayer where id='$id' ";
$results=mysqli_query($con,$sql);
if($results>0)
{
	echo "item deleted";
}
else
echo "cannot delete";
header("location:dailyview.php")
?>