<?php 
include_once "co.php";
	?>
	<html>
<head>
<style>
body
	{
	
	border: 10px darkSlateblue;
    padding:5px;
	margin:5px;
    
	}
	</style>
	<title>Church management</title>
<link rel="stylesheet" href="coe.css" type="text/css">

</head>
<body style="background-color:#ffffff;">
<br>
<div style="background-color:darkSlateblue ;font-family:Agency FB;font-size:351%;margin-right:5px;margin-left:5px">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<img src="images.jpg" height="100px" width="130px" align="center">
<br>
<span style="color:red;font-family:Calibri Light (Headings);font-size:30%;"><center><h1><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;St. George Forane Church, Edappally</b></h1></center></span></div>
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
      <li><a href="logout.php">LOGOUT</a></li>
</ul>

<table align="center" width="200" border="1">
<tr><center><h2>DAILY PRAYER DETAILS</h2></center>
  <tr><font color="black"<html>
    <head>
       
    </head

    <body>

</div>
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

</tr>
<?php } ?>
</table>

<center><font size="4"><a href="adminwel.php">BACK</a></font></center><br><br>
</body>
</html>
