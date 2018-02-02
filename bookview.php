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
<link rel="stylesheet" href="coe.css" type="text/css">
<ul>  <li><a class="active" href="adminwel.php">HOME</a></li>
<li class="dropdown">
    <a href="#" class="dropbtn">PRAYER</a>
    <div class="dropdown-content">
      <a href="daily.php">DAILY</a>
      <a href="spcl.php">SPECIAL</a>
	  <a href="sview.php">VIEW SPECIAL</a>
	  <a href="dview.php">VIEW DAILY</a></li>
	  <li class="dropdown">
  <a href="#" class="dropbtn"> REGISTRATION</a>
    <div class="dropdown-content">
      <a href="regview.php">MEMBER</a>
      <a href="hallview.php">HALL</a></li>
	  <li class="dropdown">
	  <a href="#" class="dropbtn"> CERTIFICATE</a>
    <div class="dropdown-content">
      <a href="marriageform.php">MARRIAGE</a>
	  <li><a href="searcha.php">BlOOD BANK</a></li>
	  <li><a href="bookview.php">BOOKING</a></li>
	   <li class="dropdown">
	 <a href="#" class="dropbtn"> REPORT</a>
    <div class="dropdown-content">
      <a href="history.php">HISTORY</a>
      <li><a href="logout.php">LOGOUT</a></li>
	  <br>Welcome 
</ul>
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
$results=mysqli_query($con,"select id,function,dates,amount,paymnt from booking");
while($row=mysqli_fetch_array($results))
{
?>
<tr>
<td><input name="id" type="text" value="<?php echo $row['id']; ?>"/></td>
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