<?php
include 'co.php';
if(isset($_POST['submit']))
{
$day=$_POST['day'];
$morning=$_POST['morningprayer'];
$morningtime=$_POST['morningtime'];
$evening=$_POST['eveningprayer'];
$eveningtime=$_POST['eveningtime'];
$description=$_POST['description'];
$sql="INSERT INTO `dailyprayer` (`day`, `morningprayer`, `morningtime`, `eveningprayer`, `eveningtime`, `description`) VALUES 
( '$day', '$morning', '$morningtime', '$evening', '$eveningtime', '$description')";
//echo $sql;
$result=mysqli_query($con,$sql);
}
?>


<!DOCTYPE html>
<html>
<head>
<style>
div.new {
    float: right;
	width: 50%;
    height: 20px;
    border: 3px solid red;
}


body
	{
	
	 background:url(pray.jpg);
	border: 10px solid blue;
    padding:5px;
	margin:5px;
    
	}
div.sis {
   background-color: lightgrey;
    margin-top: 20px;
    margin-bottom: 50px;
    margin-right: 20px;
    margin-left: 20px;
    width: 100%;
    
   
}
div.absolute {
  background-color: white;
  text-align: right;
    position: absolute;
    top: 150px;
    right: 50;
    width: 50%;
    height: 50px;
}
div.sis1 {
  background-color: white;
    position: absolute;
    top: 400px;
    right: 10px;
    width: 100%;
    height: 500px;
}

div.sis3 {
  background: transparent ;
    position: absolute;
    top: 450px;
    right: 0;
    width: 20%;
    height: 150px;
       
}
div.tb{

padding:20px;
}
img.a{
top:450px;
right:500px;
}

</style>

<title>Church management</title>
<link rel="stylesheet" href="coe.css" type="text/css">

</head>
<body style="background-color:#ffffff;"><br>

<br>

<div style="color:#888888;font-family:Agency FB;font-size:351%;margin-right:60px">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<img src="images.jpg" height="100px" width="130px" align="center">
<br>
<span style="color:red;font-family:Calibri Light (Headings);font-size:30%;"><center><h1><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;St. George Forane Church, changanasherry</b></h1></center></span></div>

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
      <li><a href="logout.php">LOGOUT</a></li></ul>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<img class="a" src="r1.png" alt="imggg"  width="200px" height="200px">

	 <form name="daily" id="daily" action="#" onsubmit="return" method="POST"   enctype="multipart/form-data">
  <table align="center" >
  <tr><center><h2>ENTER PRAYER DETAILS<h2></center><tr>
  
   <tr>
   <td>Day:</td>
   <td><input type="text" name="day" id="day" ></td>
   </tr>
   <tr>
   <td>Morning_prayer:</td>
   <td><input type="text" name="morningprayer" id="morningprayer"></td>
   
   <tr>
   <td>MorningTime:</td>
   <td> <input type="time"   name="morningtime"></td>
   </tr>

  
	
   <tr>
   <td>Evening_prayer:</td>
   <td><input type="text" name="eveningprayer" id="eveningprayer"></td>
   </tr>
   
   <tr>
   <td>EveningTime:</td>
   <td><input type="time" name="eveningtime" ></td>
   </tr>

<tr>
   <td>Description:</td>
   <td><textarea name="description" rows="5" cols="22" ></textarea></td>
   </tr>

   
	
	 <tr>
	 <td><a href ="dview.php">view</a></td>
   <td colspan="2" align="center"> <input type="submit" name="submit" value="submit"></td>
   
   </tr>

   </table>
	</form>
	
	<script src="jquery-3.2.1.min.js"></script>
  <script src="js/validationdaily.js"></script>
   </body>
	

	<center><font size="4"><a href="adminwel.php">**BACK**</a></font></center><br><br>
	
	
   </body>
   </html>
   
   
   
   
   