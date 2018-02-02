<?php
include_once 'co.php'; //database connection page
$emailid=$_SESSION["emailid"];
//echo "$emailid";


?><!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>

<html>
<head>
<style>
div.new {
    float: right;
	width: 50%;
    height: 20px;
    border: 3px solid red;
}
div.d {
   background-color: blue;
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
    top: 300px;
    width:100%;
    height: 500px;
}
div.sis3{
  background: transparent ;
    position: absolute;
    top: 450px;
    right: 100px;
    width: 20%;
    height: 150px;
       
}
div.sis2 {
  background: transparent ;
    position: absolute;
    top: 330px;
    right: 0;
 margin-left:70px;
    margin-right:0px;
    width: 20%;
    height: 150px;
       
}
div.aa
{	
	
	position:absolute;
    width:500px;
	height:900px;
	top:220px;
	left:500px;
	background-color:pink;
	margin: 0 auto;
	margin-top:40px;
	padding-top:10px;
	padding-left:20px;
	border-radius:15px;
	-webkit-border-radius:15px;
	-o-border-radius:15px;
	-moz-border-radius:15px;
	color:white;
	font-weight:bolder;
}
.aa input[type="text"]
{
	width:200px;
	height:35px;
	border:0px;
	border-radius:5px;
	webkit-border-radius:5px;
	-o-border-radius:5px;
	padding-left;5px;
	-moz-border-radius:5px;
}
.aa input[type="password"]
{
	width:200px;
	height:35px;
	border:0px;
	border-radius:5px;
	webkit-border-radius:5px;
	-o-border-radius:5px;
	padding-left;5px;
	-moz-border-radius:5px;
}
.aa input[type="submit"]
{
	width:100px;
	height:35px;
	border:0px;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color:skyblue;
	font-weight:bolder;
	box-shadow:inset -4px -4px rgb(0,0,0,0.3)
	font-size;18px;
}
       }
img.i
{
float:right;
 top: 150px;
    right: 70px;
}

</style>

<title>STUDENT HOME</title>
<link rel="stylesheet" href="saps.css" type="text/css">


</head>
<body style="background-image:url(p8.jpg); background-size:cover;">

<br>
<div style="color:#555555;font-family:Agency FB;font-size:351%;margin-right:0px;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<BR>
<span style="color:black;font-family:Calibri Light (Headings);font-size:40%;"><b><pre></PRE></b></span></div>


 
  <ul>
 
<ul>  
	  
      <li><a href="logout.php">LOGOUT</a></li>
	  </ul>
</ul>
<br><br>
<center>
<div class="bb">
<div class="aa"><h3>
<form action="#" name="myForms" id="myForms" onsubmit="return" method="post" enctype="multipart/form-data">
<fieldset>
<legend>EDIT PROFILE</legend><?php 
$sql="select firstname from bloodbank where emailid='$emailid'";

$result=mysqli_query($con,$sql);

$i=0;
while($row=mysqli_fetch_array($result))
{
	echo $row['firstname'];?> &nbsp&nbsp<?php }	?>
				profile</h2>
        <form id="form" method="post" action="#">
		<?php 
		$sql="select * from bloodbank where  emailid='$emailid'";

$result=mysqli_query($con,$sql);

$i=0;
while($row=mysqli_fetch_array($result))
{
?>

<table border="0" width="400" style="width:80%;color:black;font-family:Calibri Light (Headings);font-size:80%;">
<tr class="spaceUnder"><td>FIRSTNAME</TD><TD><INPUT TYPE="TEXT" NAME="firstname" id="firstname" value="<?php echo $row['firstname']; ?>"></td></tr><br>
<tr class="spaceUnder"><td>LASTNAME</TD><TD><INPUT TYPE="TEXT" NAME="lastname" id="lastname" value="<?php echo $row['lastname']; ?>"></td></tr><br>
<tr class="spaceUnder"><td>GENDER</TD><TD><INPUT TYPE="TEXT" NAME="gender" id="gender" value="<?php echo $row['gender']; ?>"></td></tr>
<tr class="spaceUnder"><td>AGE</TD><TD><INPUT TYPE="TEXT" NAME="age" id="age" value="<?php echo $row['age']; ?>"></td></tr>

<tr class="spaceUnder"><td>HOUSENAME</td><td><INPUT TYPE="TEXT" NAME="housename" id="house_name" value="<?php echo $row['housename']; ?>"></td></tr>
<tr class="spaceUnder"><td>PLACE</td><td><input type="text" name="place" value="<?php echo $row['place']; ?>">
</td></tr>
<tr class="spaceUnder"><td>LAST DATE OF DONATION</td><td><input type="text" name="dates" value="<?php echo $row['dates']; ?>">
</td></tr>
<tr class="spaceUnder"><td>PHONE</td><td><input type="text" name="phone" value="<?php echo $row['phone']; ?>">
</td></tr>

</td></tr>
<tr class="spaceUnder"><td>JOB</td><td><input type="text" name="job" id="job" value="<?php echo $row['job']; ?>"></td></tr>



<tr class="spaceUnder"><td><center><input type="submit" value="EDIT" name="submit" onsubmit="return validate()" class="button button5"></td></center><td><a href="home.php">BACK</a><td></tr>

</table></form>
<?php

if(isset($_POST['submit']))
{

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$bloodgroup=$_POST['bloodgroup'];
$dates=$_POST['dates'];
$housename=$_POST['housename'];
$place=$_POST['place'];
$phone=$_POST['phone'];
$emailid=$_POST['emailid'];
$job=$_POST['job'];
$adhar=$_POST['adhar'];

$res=mysqli_query($con,"UPDATE `bloodbank` SET  `firstname`='$firstname',`lastname`='$lastname',`gender`='$gender',`age`='$age',`bloodgroup`='$bloodgroup',`housename`='$housename',`place`='$place',`phone`='$phone',`job`='$job',`adhar`='$adhar' WHERE emailid='$emailid'");
}?>
<div class="sis4"></div></h3></div></div>
</BODY>
</html>
<?PHP } ?>