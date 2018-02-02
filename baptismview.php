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
	  <a href="baptismform.php">BAPTISM</a>
	  <li><a href="searcha.php">BlOOD BANK</a></li>
	  <li><a href="bookview.php">BOOKING</a></li>
	   <li class="dropdown">
	 <a href="#" class="dropbtn"> REPORT</a>
    <div class="dropdown-content">
      <a href="history.php">HISTORY</a>
      <li><a href="logout.php">LOGOUT</a></li>
	  <br>Welcome</ul>
<table border=1 align="center">
<tr>
<h1 align="center"> HALL REGISTRATION</h1>
</tr>
<tr>
<td>EMAIL</td>
<td>CHILDNAME</td>

<td>DAY</td>
<td>MONTH</td>
<td>YEAR</td>
<td>PLACE</td>
<td>FATHER</td>
<td>DATE </td>



</tr>
<?php
include 'co.php';
$results=mysqli_query($con,"select * from baptism");
while($row=mysqli_fetch_array($results))
{
?>
<tr>
<td><input name="emailid" type="text" value="<?php echo $row['emailid']; ?>"/></td>
<td><input name="childname" type="text" value="<?php echo $row['childname']; ?>"/></td>
<td><input name="day" type="text" value="<?php echo $row['day']; ?>"/></td>
<td><input name="month" type="textarea" value="<?php echo $row['month']; ?>"/></td>
<td><input name="year" type="text" value="<?php echo $row['year']; ?>"/></td>
<td><input name="place" type="text" value="<?php echo $row['place']; ?>"/></td>
<td><input name="father" type="text" value="<?php echo $row['father']; ?>"/></td>

<td><input name="doi" type="text" value="<?php echo $row['doi']; ?>"/></td>

<?php
}
?>
</table>

<!--<div align="center"><a href="adminwel.php">***BACK***</a></div>-->
</body>
</html>