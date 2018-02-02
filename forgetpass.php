<?php
include 'co.php';
if(isset($_POST['submit']))
{
$g=$_POST["emailid"];
$j=$_POST["seqstn"];
$k=$_POST["seqans"];
$l=$_POST["password"];
$m=$_POST["cpassword"];
//echo $a;
if($l!=$m)
 {
	echo"not equal";
 }
else
 {
$sql="SELECT * FROM `registration1` WHERE `emailid`='$g' and `seqstn`='$j' and `seqans`='$k'";
echo $sql;
$res=mysqli_query($con,$sql);
//echo '$res';
if($row=mysqli_fetch_array($res))
{		//echo 'aa';
$res=mysqli_query($con,"UPDATE `login` SET `password`='$l' WHERE  emailid='$g'");

	}
 }
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>forgot password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form class="search_form" action="#" onsubmit="return" name="myForm" id="myForm" method="post" enctype="multipart/form-data"> 
						<!--<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">-->
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
           <!--                                             <li><a href="index.php">Home</a></li>
<<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>
							
							<li><a href="register.php">Seller Register</a></li>					
                                                        <li><a href="login.php">Login</a></li>		
						</ul>-->
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
            <!--						<ul>
                                                                    <li><a href="./products.html">Woman</a>					
                                                                            <ul>
                                                                                    <li><a href="./products.html">Lacinia nibh</a></li>									
                                                                                    <li><a href="./products.html">Eget molestie</a></li>
                                                                                    <li><a href="./products.html">Varius purus</a></li>									
                                                                            </ul>
                                                                    </li>															
                                                                    <li><a href="./products.html">Man</a></li>			
                                                                    <li><a href="./products.html">Sport</a>
                                                                            <ul>									
                                                                                    <li><a href="./products.html">Gifts and Tech</a></li>
                                                                                    <li><a href="./products.html">Ties and Hats</a></li>
                                                                                    <li><a href="./products.html">Cold Weather</a></li>
                                                                            </ul>
                                                                    </li>							
                                                                    <li><a href="./products.html">Hangbag</a></li>
                                                                    <li><a href="./products.html">Best Seller</a></li>
                                                                    <li><a href="./products.html">Top Seller</a></li>
                                                            </ul>-->
					</nav>
				</div>
			</section>
                    
                    
                    
                    
                    
                    
                    
                    
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="" >
                      
				<h4><span></span></h4>
			</section>
                  
			<section class="main-content">
                            
                           
				<div class="row">
					
					<div class="span12">				
					
					<form action="#" method="post" name="a">
<fieldset>
<legend>PASSWORD SETTING</legend>
<table border="0" width="400" style="width:80%;color:black;font-family:Calibri Light (Headings);font-size:80%;">
<tr class="spaceUnder"><td>ENTER YOUR EMAIL</TD><TD><INPUT TYPE="TEXT" NAME="emailid" required></td></tr><br>
  <tr class="spaceUnder"><td>SECURITY QUESTION</td><td><select name="seqstn">
 <option value="">--select--</option>
    <option value="pet name">pet name</option>
    <option value="favorite colour">favorite colour</option>
   
  </td></tr>
  <tr class="spaceUnder"><td>SECURITY ANSWER</td><td><input type="text" name="seqans" required></td></tr>
<tr class="spaceUnder"><td>PASSWORD</TD><TD><INPUT TYPE="password" name="password"></td></tr>
<tr class="spaceUnder"><td>RE-ENTER Password</TD><TD><INPUT TYPE="password" NAME="cpassword"></td></tr>

<tr class="spaceUnder"><td><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="submit" name="submit" onsubmit="return validate()" class="button button5"></center></td></tr>
</table></form>