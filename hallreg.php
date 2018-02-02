<?php
include 'co.php';
if(isset($_POST['submit']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$housename=$_POST['housename'];
$postoffice=$_POST['postoffice'];
$place=$_POST['place'];
$pincode=$_POST['pincode'];
$phone=$_POST['phone'];
$email=$_POST['emailid'];
$religion=$_POST['religion'];
$adhar=$_POST['adhar'];
$password=$_POST['password'];
$dor=$_POST['dor'];

$sql="INSERT INTO `church`.`hall` (`firstname`, `lastname`,`housename`, `postoffice`, `place`, `pincode`, `phone`, `emailid`, `religion`, `adhar`,`dor`) VALUES 
( '$firstname', '$lastname','$housename', '$postoffice', '$place', '$pincode', '$phone','$email','$religion','$adhar',$dor)";

//echo $sql;
$result=mysqli_query($con,$sql);

$sql1="INSERT INTO `church`.`login`(`emailid`, `password`,`role`) VALUES ('$email','$password',2)";
$result=mysqli_query($con,$sql1);
//echo $sql1;
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
	
	 background:url();
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
<!--<img src="images.jpg" height="100px" width="130px" align="center">-->
<br>
<span style="color:red;font-family:Calibri Light (Headings);font-size:30%;"><center><h1><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;St. George Forane Church, Edappally</b></h1></center></span></div>

<ul>
  <li><a class="active" href="indexes.php">HOME</a></li>
  
</ul>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<img class="a" src="hall1.jpg" alt="imggg"  width="1500px" height="350px">

	 <form name="hall" id="hall" action="#"  method="POST" class="oh-autoval-form" onsubmit="return"">
  <table align="center" >
  <tr><center><h2>HALL BOOKING</h2></center></tr>
  
   <tr>
   <td>Firstname:</td>
   <td><input type="text" name="firstname" id="firstname" class="av-name" av-message="Invalid FirstName" ></td>
   </tr>
   <tr>
   <td>lastname:</td>
   <td><input type="text" name="lastname" id="lastname" class="av-name" av-message="Invalid LastName" ></td>
   </tr>
  <tr>
   <td>Housename:</td>
   <td><input type="text" name="housename"class="av-name" av-message="Invalid HouseName" ></td>
   </tr>
   <tr>
   <td>Postoffice:</td>
   <td><input type="text" name="postoffice"class="av-name" av-message="Invalid Postoffice" ></td>
   </tr>
   <tr>
   <td>place:</td>
   <td><input type="text" name="place" class="av-name" av-message="Invalid place"></td>
   </tr>


   <tr>
   <td>Pincode:</td>
   <td><input type="number" name="pincode" class="av-pincode" av-message="Pincode 6 digits" ></td>
   </tr>

   <tr>
   <td>phone number:</td>
   <td><input type="tel" name="phone" id="phone"  class="av-mobile" av-message="enter 10 digits"></td>
   </tr>

   <tr>
   <td>E-mail:</td>
   <td><input type="email" name="emailid" id="emailid"  class="av-email" av-message="invalid email" ></td>
   
  </tr>
   <td>Religion:</td>
   <td><select name="religion" required>
   <option value="Christian">Christian</option>
   <option value="Hindu">Hindu</option>
   <option value="Muslim">Muslim</option>
   </select></td>
   </tr>
   
   
   
   <td>Adhar proof:</td>
   <td><input type="number" name="adhar" id="adhar" class="av-aadhaar" av-message="Aadhaar card number 12 digits"></td>
     </tr><br>
				
  <tr>
  <td>User password:</td>
  <td><input type="password" name="password" id="password" class="av-password" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars."></td>
  </tr>
  <tr>
  
  
   <td>Date of join:</td>
   <td><input type="date" name="dor" id="dor"></td>
     </tr><br>
	 
   <td colspan="2" align="center"> <input type="submit" name="submit" value="submit"></td>
   
   </tr>

   </table>
	</form>
	
	<center><font size="4"><a href="#top">Go to top</a></font></center><br><br>
	
   </body>
   </html>
   
   
   
   
   
   
   