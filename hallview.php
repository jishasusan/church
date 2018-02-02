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
<td>FIRSTNAME</td>
<td>LASTNAME</td>
<td>HOUSENAME</td>
<td>POSTOFFICE</td>
<td>PLACE</td>
<td>PINCODE</td>
<td>PHONE NUMBER</td>
<td>EMAIL</td>
<td>RELIGION</td>
<td>EVENT</td>
<td>DATE</td>
<td>DAY</td>
<td>TIME</td>
<td>ADHAR PROOF</td>

</tr>
<?php
include 'co.php';
$results=mysqli_query($con,"select * from hall");
while($row=mysqli_fetch_array($results))
{
?>
<tr>
<td><input name="firstname" type="text" value="<?php echo $row['firstname']; ?>"/></td>
<td><input name="lastname" type="text" value="<?php echo $row['lastname']; ?>"/></td>
<td><input name="housename" type="text" value="<?php echo $row['housename']; ?>"/></td>
<td><input name="postoffice" type="textarea" value="<?php echo $row['postoffice']; ?>"/></td>
<td><input name="place" type="text" value="<?php echo $row['place']; ?>"/></td>

<td><input name="pincode" type="text" value="<?php echo $row['pincode']; ?>"/></td>
<td><input name="phone" type="text" value="<?php echo $row['phone']; ?>"/></td>
<td><input name="emailid" type="textarea" value="<?php echo $row['emailid']; ?>"/></td>
<td><input name="religion" type="text" value="<?php echo $row['religion']; ?>"/></td>

<td><input name="event" type="text" value="<?php echo $row['event']; ?>"/></td>
<td><input name="dates" type="text" value="<?php echo $row['dates']; ?>"/></td>
<td><input name="day" type="text" value="<?php echo $row['day']; ?>"/></td>
<td><input name="times" type="text" value="<?php echo $row['times']; ?>"/></td>
<td><img src="<?php echo $row['image']; ?>" width="75px" height="75px"/></td>

<?php
}
?>
</table>

<!--<div align="center"><a href="adminwel.php">***BACK***</a></div>-->
</body>
</html>