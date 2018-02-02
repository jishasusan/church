<?php
include 'co.php';
if(isset($_POST['submit']))
{
$event=$_POST['event'];
$dates=$_POST['dates'];
$day=$_POST['day'];
$section=$_POST['section'];
$times=$_POST['times'];

$sql="INSERT INTO `church`.`hall` (`event`, `dates`, `day`,`section`, `times`) VALUES ( '$event', '$dates', '$day','$section', '$times')";
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
	
	 background:url(r3.jpg);
	border: 10px solid blue;
    padding:5px;
	margin:5px;
    
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
<span style="color:red;font-family:Calibri Light (Headings);font-size:30%;"><center><h1><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;St. George Forane Church, changanasherry</b></h1></center></span></div>

<ul>
  <li><a class="active" href="hallwel.php">HOME</a></li>
  
<li><a href="logout.php"> LOGOUT</a></li>
</ul>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<img class="a" src="r1.png" alt="imggg"  width="200px" height="200px">


 <form name="hallEVENT" id="hallEVENT" action="#" onsubmit="return" method="POST"   enctype="multipart/form-data">
  <table align="center" >
  
  <tr><center><h2>EVENTS</h2></center></tr>
   <td>Eventtype:</td>
   <td><input type="event" name="event"  required></td>
   </tr>

   <td>Date:</td>
   <td><input type="date" name="dates" id="dates" required></td>
   </tr>

    <tr>
   <td>Day:</td>
   <td><select name="day">
    <option value="sunday">Sunday</option>
   <option value="monday">Monday</option>
   <option value="tuesday">Tuesday</option>
   <option value="wednesday">Wednesday</option>
   <option value="thursday">Thursday</option>
   <option value="friday">Friday</option>
   <option value="saturday">Saturday</option>
  </select></td>
    </tr>
	
	
	<tr>
   <td>Section:</td>
   <td><select name="section">
    <option value="morning">Morning</option>
   <option value="evening">Evening</option>
   <option value="full day">Full day</option>
   </select></td>
    </tr>
	
   <tr>
   <td>Time:</td>
   <td><input type="time" name="times" ></td>
   
	 
	 </table>
	 </form>
	 
	 
	 </body>
	 </html>
	 </html>