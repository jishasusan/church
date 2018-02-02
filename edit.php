<?php
include_once 'conn.php'; //database connection page
$id=$_SESSION['id'];
echo "$id";


?>
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>

<html>
<head>
<meta charset="UTF-8">
	<title>COOKBOOK.COM</title>
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,300italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="css/animat/animate.min.css" />
	<link rel="stylesheet" href="css/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css" />
	<link rel="stylesheet" href="css/themes/default/default.css" />
	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="css/owl-carousel/owl.theme.css" />
	<link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
<body style="background-image:url(bb.jpg); background-size:cover;>
<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  
						</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  
						  <ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index.php">HOME</a></li>
							<li><a href="edit.php">PROFILE</a></li>
							<li><a href="newchangepass.php">CHANGE PASSWORD</a></li>
							<li><a href="addrecipe.php">ADD RECIPE</a></li>
								<li><a href="viewmark.php">VIEW MARKS</a></li>
							<li><a href="index.php">LOG OUT</a></li>
							
						  </ul>
						</div><!-- /.navbar-collapse -->
  


</head>

<div class="bb">

<div class="aa"><h3>
<form action="#" name="myForm" id="myForm" onsubmit="return" method="post" enctype="multipart/form-data">
<fieldset><center>
<legend>EDIT PROFILE</legend<?php 
$sql="select name from register where username='$id'";

$result=mysqli_query($con,$sql);

$i=0;
while($row=mysqli_fetch_array($result))
{
	echo $row['name'];?> &nbsp&nbsp<?php }	?>
				profile</h2>
        <form id="form" method="post" action="#">
		<?php 
		$sql="select * from register where username='$id'";

$result=mysqli_query($con,$sql);

$i=0;
while($row=mysqli_fetch_array($result))
{
?>
<table border="0" cellspacing="10" align="center" width="400" height="400" style="color:black;font-family:Calibri Light (Headings);font-size:80%;">
<tr class="spaceUnder"><td>NAME</TD><TD><INPUT TYPE="TEXT" NAME="name" id="name" value="<?php echo $row['name']; ?>"></td></tr><br>
<tr class="spaceUnder"><td>USERNAME</TD><TD><INPUT TYPE="TEXT" NAME="username" id="last_name" value="<?php echo $row['username']; ?>"></td></tr>
<tr class="spaceUnder"><td>HOUSENAME</td><td><INPUT TYPE="TEXT" NAME="housename" id="house_name" value="<?php echo $row['housename']; ?>"></td></tr>
<tr class="spaceUnder"><td>DISTRICT</td><td><input type="text" name="street" value="<?php echo $row['street']; ?>">
</td></tr>
<tr class="spaceUnder"><td>CITY</td><td><input type="text" name="city" value="<?php echo $row['city']; ?>">
</td></tr>
<tr class="spaceUnder"><td>PINCODE</td><td><input type="text" name="pincode" value="<?php echo $row['pincode']; ?>">
</td></tr>
<tr class="spaceUnder"><td>EMAIL</td><td><input type="text" name="email" id="userid" value="<?php echo $row['email']; ?>"></td></tr>
<tr class="spaceUnder"><td>MOB NO:</td><td><input type="text" name="phoneno" id="mobile" value="<?php echo $row['phoneno']; ?>"></td></tr>
<tr class="spaceUnder"><td>GENDER</TD><td><input type="text" name="phone" id="mobile" value="<?php echo $row['gender']; ?>"></td></tr>

<tr class="spaceUnder"><td><input type="submit" value="EDIT" name="submit" onsubmit="return validate()" class="button button5"></td></tr>
<img src="i7.jpg" align="right" width="400px" height="400px">
</table></form>

<?php

if(isset($_POST['submit']))
{
//$b=$_POST['drop'];
$a=$_POST["name"];
$b=$_POST["housename"];
$c=$_POST["street"];
$e=$_POST["pincode"];
$h=$_POST["phoneno"];
$d=$_POST["username"];
$res=mysqli_query($con,"UPDATE `register` SET `name`='$a',`housename`='$b',`street`='$c',`pincode`='$e',`phoneno`='$h' WHERE username='$id'");
}?>

</BODY>
<div class="sis4"></div></h3></div></div>

</html>
<?PHP } ?>