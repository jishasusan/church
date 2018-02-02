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
      <a href="report.php">HISTORY</a>
      <li><a href="logout.php">LOGOUT</a></li>
	  <br>Welcome 
</ul>
<div align="right">
<form name="search" action="#" method="post" onsubmit="return">
<table>
<tr><input type="date"  name="date1"/><input type="date"  name="date2"/> <input type="submit" value="search"/></tr>
</table>
</div>
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
</tr>

<?php
include 'co.php';
@$date1=$_POST['date1'];
@$date2=$_POST['date2'];
if($date1==null && $date2==null)
{
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
</tr>
<?php
}
}
else
{
        $date1=mysql_real_escape_string($_REQUEST['date1']);
		$date2=mysql_real_escape_string($_REQUEST['date2']);
		$sql="SELECT * FROM hall WHERE dor BETWEEN '$date1' and '$date2'";
	   //Secho $sql;
	   $result3=mysqli_query($con,$sql);
        while($row1=mysqli_fetch_array($result3))
       {
       ?>
	  
<tr>
<td><input name="firstname" type="text" value="<?php echo $row1['firstname']; ?>"/></td>
<td><input name="lastname" type="text" value="<?php echo $row1['lastname']; ?>"/></td>
<td><input name="housename" type="text" value="<?php echo $row1['housename']; ?>"/></td>
<td><input name="postoffice" type="textarea" value="<?php echo $row1['postoffice']; ?>"/></td>
<td><input name="place" type="text" value="<?php echo $row1['place']; ?>"/></td>

<td><input name="pincode" type="text" value="<?php echo $row1['pincode']; ?>"/></td>
<td><input name="phone" type="text" value="<?php echo $row1['phone']; ?>"/></td>
<td><input name="emailid" type="textarea" value="<?php echo $row1['emailid']; ?>"/></td>
<td><input name="religion" type="text" value="<?php echo $row1['religion']; ?>"/></td>

</tr>

<?php
}
}
?>
</table>

<!--<div align="center"><a href="adminwel.php">***BACK***</a></div>-->
</body>
</html>