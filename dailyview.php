<?php 
include_once "co.php";
	?>

<html>
<head><title>Registration view</title>
<style>
body
	{
	background:url(bc.jpg);
	color:red;
    
	}
</style>
</head>
<body bgcolor="lightblue">
<table border=1 align="center">
<tr>
<h1 align="center">REGISTRATION DETAILS</h1>
</tr>
<tr>
<td><font color="black">&nbsp;DAY</font></td>
    <td><font color="black">&nbsp;MORNING PRAYER</font></td>
     <td><font color="black">&nbsp;MORNING TIME</font></td>
      <td><font color="black">&nbsp;EVENING PRAYER</font></td>
    <td><font color="black">&nbsp;EVENING TIME</font></td>
    <td><font color="black">&nbsp;DESCRIPION</font></td>
</tr>
<?php
$results=mysqli_query($con,"select * from dailyprayer");
while($row=mysqli_fetch_array($results))
{
?>
<tr>
<td><input name="day" type="text" value="<?php echo $row['day']; ?>"/></td>
<td><input name="morningprayer" type="text" value="<?php echo $row['morningprayer']; ?>"/></td>
<td><input name="morningtime" type="text" value="<?php echo $row['morningtime']; ?>"/></td>
<td><input name="eveningprayer" type="text" value="<?php echo $row['eveningprayer']; ?>"/></td>
<td><input name="eveningtime" type="text" value="<?php echo $row['eveningtime']; ?>"/></td>
<td><input name="description" type="text" value="<?php echo $row['description']; ?>"/></td>
<td><a href="dailyedit.php?id=<?php echo $row['id'];?>" >Edit</a></td>
<td><a href="dailydelete.php?id=<?php echo $row['id'];?>">Delete</a></td>
<?php
}
?>
</table>

</body>
</html>