<html>
<head><title> HALL REGISTRATION</title>
<style>
body
	{
	background:url(bc.jpg);
	margin:5px;
	color:red;
    
	}
</style>
</head>
<body bgcolor="lightblue">
<table border=1 align="center">
<tr>
<h1 align="center"> HALL REGISTRATION</h1>
</tr>
<tr>
<td>REGID</td>
<td>FUNCTION</td>
<td>DATE</td>
<td>AMOUNT</td>
<td>PAYMENT STATUS</td>
</tr>
<?php
include 'co.php';
$results=mysqli_query($con,"select emailid,function,dates,amount,paymnt from booking");
while($row=mysqli_fetch_array($results))
{
?>
<tr>
<td><input name="emailid" type="text" value="<?php echo $row['emailid']; ?>"/></td>
<td><input name="function" type="text" value="<?php echo $row['function']; ?>"/></td>
<td><input name="dates" type="text" value="<?php echo $row['dates']; ?>"/></td>
<td><input name="amount" type="textarea" value="<?php echo $row['amount']; ?>"/></td>
<td><input name="paymnt_sataz" type="text" value="<?php echo $row['paymnt']; ?>"/></td>


<?php
}
?>
</table>
</body>
</html>