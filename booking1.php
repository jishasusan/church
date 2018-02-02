
<?php
include 'co.php';
$emailid=$_SESSION["emailid"];
//echo $emailid;

$sql11="SELECT `id` FROM `hall` WHERE `emailid`='$emailid' ";
$re=mysqli_query($con,$sql11);
$d=mysqli_fetch_array($re);
$id=$d['id'];
echo $id;
if(isset($_POST['submit']))
{
$emailid=$_POST['emailid'];
$function=$_POST['function'];
$dates=$_POST['dates'];
$section=$_post['section'];
$sql="INSERT INTO `booking`( `emailid`, `function`, `dates`,`section`) VALUES ( '$emailid','$function', '$dates','section')";
echo $sql;
$result=mysqli_query($con,$sql);
header("location:payment.php");
}
?>

<html>
<head></head>
<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>

<style>
div.new {
    float: right;
	width: 50%;
    height: 20px;
    border: 3px solid red;
}


body
	{
	
	 background:url(r3.jpg);
	border: 10px solid blue;
    padding:5px;
	margin:5px;
    
	}
	div.row
	{
		margin-top:-14%;
	 margin-left:80%;
	 background-color:violet;;
	 color:white;
	 width:10%;
	 height:20%;
	}
	
</style>
<title>Church management</title>
<link rel="stylesheet" href="coe.css" type="text/css">

</head>
<body style="background-color:#ffffff;">
<br>

<div style="color:#888888;font-family:Agency FB;font-size:351%;margin-right:60px">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<img src="images.jpg" height="100px" width="130px" align="center">
<br>
<span style="color:red;font-family:Calibri Light (Headings);font-size:30%;"><center><h1><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;St. George Forane Church, Edappally</b></h1></center></span></div>

<ul>
  <li><a class="active" href="hallwel.php">HOME</a></li>
  
<li><a href="logout.php"> LOGOUT</a></li>
</ul>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;

<form name="hall" id="booking" action="#"  method="POST" class="oh-autoval-form" onsubmit="return"">
  <table align="center" >
  <tr><center><h2>HALL BOOKING</h2></center></tr>
  
  <tr>
   <td>EmailId:</td>
   <td><input type="text" name="emailid" id="emailid"></td>
   </tr>
  <tr>
   <td>Function Name:</td>
   <td><input type="text" name="function" id="fnn"></td>
   </tr>
  
   <tr>
   <td>Select Date:</td>
   <td><input type="date" name="dates" id="dates"  ></td>
   </tr>
   
    <tr><td>Select Time:</td>
   <td><select name="section">
  <option value="full day">full day</option>
  <option value="morning">morning</option>
  <option value="afternoon">afternoon</option>
  
</select>
</td>
   
    <tr><td colspan="2" align="center"> <input type="submit" name="submit" value="submit"></td>
 
   </tr>
   </table>
   </form>
   <div class="row">
   <br><center>Rate</center>
   <br><center> Full day:15000</center>
   <br><center>Half:7500</center>
   </div>
   
   
   </body>
   </html>
