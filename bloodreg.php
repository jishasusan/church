<?php
include 'co.php';
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
$password=$_POST['password'];
$seqstn=$_POST['seqstn'];
$seqans=$_POST['seqans'];

$sql="INSERT INTO `bloodbank` ( `firstname`,`lastname`,`gender`,`age`, `bloodgroup`,`dates`, `housename`,`place` ,`phone`, `emailid`, `job`,`adhar`,`seqstn`,`seqans`) VALUES(
'$firstname','$lastname','$gender','$age','$bloodgroup','$dates','$housename','$place','$phone','$emailid','$job','$adhar','$seqstn','$seqans')";
//echo $sql;
$result=mysqli_query($con,$sql);
$sql1="INSERT INTO `login`(`emailid`, `password`,`role`) VALUES('$emailid','$password',3)";
$result=mysqli_query($con,$sql1);
//echo $sql1; 
}
//$resultk=mysqli_query($con,"select  max(id)+1 as x  from `registration`"); 
//$a=mysqli_fetch_array($resultk);

?>

<html>
<title>bloodbank</title>

<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>


<style>
body
	{
	
	border: 10px darkSlateblue;
    padding:5px;
	margin:5px;
    
	}
div.new {
    float: right;
	width: 50%;
    height: 20px;
    border: 3px solid red;
}
table { 
     width:500px:
	 height:35px;
	 border: solid blue3 2px;
	 color:black;
	 padding:5px;
    }
div.sis {
   background-color:chocolate ;
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
 h1,h2{
	color:blue;
	}
	
	table { 
	background-color:
     width:500px:
	 height:35px;
	 border: solid blue 2px;
	 color:black;
	 padding:5px;
    }
    
	body
	{
	
	 background:url(red.jpg);
	 color:black;
	border: 10px solid blue;
    padding:5px;
	margin:5px;
	
    
	}
	.error{
	color:red;
	margin-left:30px;
}
	
	
	
	
	
	div.floated
	 {
	 padding:3px;
	 background:transparent;
	 top:40px;
	 margin-left:280px;
     width:40%;
	height:400px;
	
	}
	
	<!--div.a{
	padding:5em;
	top:365px;
	position:absolute;
	margin-right:0px;
	margin-left:650px;
	width:40%;
	height:150px;
	}-->
	img.i
{
float:right;
}
</style>
</head>
<body>
<h2 id="top"></h2>
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
<ul>
  <li><a class="active" href="bloodreg.php">BLOODBANK</a></li>
  
      <!--<li><a href="contact.html">CONTACT</a></li>-->
<li><a href="home.php"> LOGOUT</a></li>
</ul>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<!--<img class="a" src="r1.png" alt="imggg"  width="200px" height="200px">-->
 <center><h2>BLOOD BANK REGISTRATION</H2></CENTER>
 <form name="myForm1" action="#" id="myForm1"   method="POST" class="oh-autoval-form" onsubmit="return">
 <table align="center" >
 
 
<tr>
   <td>Firstname:</td>
   <td><input type="text" name="firstname"  id="firstname" class="av-name" av-message="Invalid Name"></td>
   </tr>
    
  <tr>
   <td>Lastname:</td>
   <td><input type="text" name="lastname"  id="lastname" class="av-name" av-message="Invalid Name"></span></td>
   </tr>
    
   <tr>
   <td>Gender:</td>       
   <td><input type="radio" name="gender" value="male" checked>Male<br>
   <input type="radio" name="gender" value="female">Female<br>
   </td>
   </tr>
   
   
   
   <tr>
   <td>Age:</td>
   <td><input type="number" name="age"  id="age" class="av-posnumber" av-message="Invalid Age"></td>
   </tr>
  

  <tr>
   <td>Blood Group:</td>
   <td><select name="bloodgroup">
   <option value="A+">A+</option>
   <option value="A-">A-</option>
   <option value="B+">B+</option>
   <option value="AB+">AB+</option>
   <option value="AB-">AB-</option>
   <option value="O+">O+</option>
   <option value="O-">O-</option>
    </select></td>
    </tr>
	
	<tr>
   <td>Last date of donation:</td>
   <td><input type="date" name="dates"  id="dates"></td>
   </tr>
   <tr>

	<tr>
   <td>Housename:</td>
   <td><input type="text" name="housename" id="housename" class="av-name" av-message="Invalid Housename"  ></td>
   </tr>
   
   <tr>
   <td>place:</td>
   <td><input type="text" name="place"  id="place" class="av-name" av-message="Invalid Place" ></td>
   </tr>


  
   <tr>
   <td>phone number:</td>
   <td><input type="tel" name="phone" id="phone"  class="av-mobile" av-message="Invalid Phone"></td>
   </tr>

   <tr>
   <td>E-mail:</td>
   <td><input type="text" name="emailid" id="emailid" class="av-email" av-message="Invalid Email" ></td>
   
  </tr>
  
  
   <tr>
   <td>Job:</td>
   <td><input type="text" name="job" id="job" class="av-name" av-message="Invalid job information" ></td>
   </tr>
   
    <tr>
  <td>Adhar number:</td>
  <td><input type="number" name="adhar" id="adhar" class="av-aadhaar" av-message="Aadhaar card number contain 12 digits"></td>
  </tr>
  
  <tr>
  <td>User password:</td>
  <td><input type="password" name="password" id="password"   class="av-password" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars."></td>
  </tr>
  
  
	
	<tr>
   <td>Security question:</td>
   <td><select name="seqstn">
   <option value="">--select--</option>
   <option value="pet name">PET NAME</option>
   <option value="favorite colour">FAVORITE COLOR</option>
   </select></td>
    </tr>
	<tr>
	<td>ANSWER:</td>
  <td><input type="text" name="seqans" id="seqans"  class="av-name" av-message="Invalid Answer"></span></td>
  </tr>
	 <tr>
   <td colspan="2" align="center"> <input type="submit" name="submit" value="submit"></td>
   </tr>

   </table>
	</form>

	</body>
   </html>
   
   
   
   
   