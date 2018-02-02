<?php
include 'co.php';
if(isset($_POST['submit']))
{
$id=$_POST['regid'];
$image="image/".time()."".htmlspecialchars($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$image);
$relation=$_POST['relation'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$bloodgroup=$_POST['bloodgroup'];
$emailid=$_POST['emailid'];
$education=$_POST['education'];
$job=$_POST['job'];
$job_institue=$_POST['job_institue'];
$adhar=$_POST['adhar'];
$sql="INSERT INTO `family` ( `regid`,`image`,`relation`,`firstname`,`lastname`,`gender`,`age`, `bloodgroup`,`emailid`, `education`, `job`, `job_institue`,`adhar`) VALUES(
'$id','$image','$relation','$firstname','$lastname','$gender','$age','$bloodgroup','$emailid','$education','$job','$job_institue','$adhar')";
echo $sql;
$result=mysqli_query($con,$sql); 
}
?>
<html>
<title>LOGIN</title>
<style>
body
	{
	
	border: 10px darkSlateblue;
    padding:5px;
	margin:5px;
    
	}
	table { 
     width:500px:
	 height:35px;
	 border: solid blue3 2px;
	 color:black;
	 padding:5px;
    }
	
	h1,h2{
	color:red;
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
<span style="color:red;font-family:Calibri Light (Headings);font-size:30%;"><center><h1><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;St. George Forane Church, changanasherry</b></h1></center></span></div>
<ul>
  <li><a class="active" href="home.php">HOME</a></li>
</ul>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<!--<img class="a" src="r1.png" alt="imggg"  width="200px" height="200px">-->
 <center><h2> ADD FAMILY DETAILS</h2></center>
 <form name="myForm" action="#" id="myForm" onsubmit="return"  method="POST" enctype="multipart/form-data" >
 <table align="center" >
 
 
 
      
   
   <td>REGISTRATIONID:</td>
     <td><input type="text" name="regid" id="regid"  value=<?php echo"CH" ?> /><span class="error" id="regid_error"></td>
     </tr><br>
	 
      <tr>
     <td>IMAGE:</td>
     <td><input type="file" name="image" id="image"/><span class="error" id="image_error"></td>
     </tr><br>
	 
	 
	 
	  <tr>
   <td>Relation with head:</td>       
  <td><input type="text" name="relation"  id="relation"><span class="error" id="relation_error"></span></td>
  </tr>
				
  
  
  <tr>
   <td>Firstname:</td>
   <td><input type="text" name="firstname"  id="firstname"><span class="error" id="firstname_error"></span></td>
   </tr>
    
  <tr>
   <td>Lastname:</td>
   <td><input type="text" name="lastname"  id="lastname"><span class="error" id="lastname_error"></span></td>
   </tr>
   
   
  <tr>
   <td>Gender:</td>       
   <td><input type="radio" name="gender" value="male" checked>Male<br>
   <input type="radio" name="gender" value="female">Female<br>
   </td>
   </tr>
   <tr>
   
   
   
    <tr>
   <td>Age:</td>
   <td><input type="number" name="age"  id="age" ><span class="error" id="age_error"></td>
   </tr>
   <tr>


   
	<tr>
   <td>E-mail:</td>
   <td><input type="text" name="emailid" id="emailid"  ><span class="error" id="emailid_error"></td>
   
  </tr>
  
  <tr>
   <td>education:</td>
   <td><input type="text" name="education" id="education" ><span class="error" id="education_error"></td>
   </tr>
   
   <tr>
   <td>Job:</td>
   <td><input type="text" name="job" id="job" ><span class="error" id="job_error"></td>
   </tr>
   
   <tr>
   <td>Job institue:</td>
   <td><input type="text" name="job_institue" id="job_institue" ><span class="error" id="job_institue_error"></td>
   </tr>
   
   
   <tr>
  <td>Adhar number:</td>
  <td><input type="number" name="adhar" id="adhar"><span class="error" id="adhar_error"></td>
  </tr>
  
  
   <td colspan="2" align="center"> <input type="submit" name="submit" value="submit"></td>
   </tr>

   </table>
	</form>

  <script src="jquery-3.2.1.min.js"></script>
  <script src="js/validatefamily.js"></script>
	</body>
   </html>
   
   
   