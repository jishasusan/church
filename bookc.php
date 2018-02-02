<?php
include 'connection.php'; //database connection page
//if(!isset($_SESSION["email"])) {
	//header('location:index.php');
//}
if(isset($_POST["submit"])) {
	header('location:adminhome.php');
}
?> 

<!DOCTYPE html>
<!--
Template Name: Lolwork
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Lolwork | Pages | Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all"><title>Lolwork | Pages | Gallery</title>
<!-- bootstrap -->
		<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<!--<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<!--<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>
<meta charset="utf-8">-->
<style>
div.img {
    margin: 15px;
    border: 3px solid #ccc;
    float: left;
    width: 450px;
	background-color:#;
	height:320px;
	border-radius:13px 13px 13px 13px;
}
div.img:hover span:after {
  position: relative;
  opacity: 0;
  top: 0;
  left:980px;
  transition: 0.5s;
}



div.img:hover span{
    border: 1px solid #777;
	padding-right: 0px;
}

div.img:hover span:after{
  opacity: 1;
  right: 0;
}

div.img img {
    height:250px;
	width:300px;
}

div.desc {
    padding: 2px;
    text-align: center;
	font-size:20px;
	font-family:Benguiat Bk BT;
}
.button1 {	width:100px;
	background-color:skyblue;
	border-radius:20px;
	cursor: pointer;
}
</style>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!--<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
   <!--<div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-in"></i> <a href="#">Login</a></li>
        <li><i class="fa fa-user"></i> <a href="#">Register</a></li>
      </ul>
    </div>-->
    <!--<div class="fl_left">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="search" value="" placeholder="Search Here&hellip;">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
 </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="../index.html">Exclusive Car Rental</a></h1>
      <!--<p>join or fasten by making stitches</p>-->
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li><a href="../index.php">Home</a></li>
        <li class="active"><a href="#">Pick Up Your Car</a>
          <!--<ul>
            <li class="active"><a href="#">Luxury car</a></li>
            <li><a href="#">Seadan car</a></li>
            <li><a href="#">Hatchback car</a></li>
            <li><a href="usercar.php">View car car</a></li>
          </ul>-->
        </li>
        <!--<li><a href="#">Booking</a></li>
			<li><a href="#">Feedback</a></li>
            <li><a href="viewprofile.php">My Account</a></li>
			<li><a href="cpass.php">Change password</a></li>-->
            <!--<li><a href="userhome.php">BACK</a></li>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!--<div class="wrapper row2">
<div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <!--<ul>
      <li><a href="#">Luxury car</a></li>
      <li><a href="#">Wedding car</a></li>
      <li><a href="#">Airport car</a></li>
      <!--<li><a href="#">Dolor</a></li>-->
    <!--</ul>
    <!-- ################################################################################################ -->
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      
      <div id="gallery">
        <figure>
          <!--<header class="heading">Pick up a car and Start your Journey</header>
          <ul class="nospace clear">-->
		  <section class="main-content">
				
			<div class="content"> 
			
            <center>

<?php 
$i=$_GET['id']; 
$qry="select * from car where cid=$i";
$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result)){

?>
<div style="border:0">

  <table width="1217" height="56" style="border:0" >
    <tr>
      <td width="524" style="border:0">
	  
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $row['image']?>" width="600px" height="400px" style=" border-radius:30px;">
<p>&nbsp;</p>
	  </td>
      <td width="271" style="border:0"> 
      <div class="img" style="border:0">
      <table style="border:0"	>
     <br><br>	<br><br>	
    	<tr >
        <td style="border:0"> Car name: </td>
        <td style="border:0"> <?php echo $row['carname']?> </td>
        </tr>
        <tr>
        <td style="border:0"> Car model: </td>
        <td style="border:0"> <?php echo $row['carmodel']?> </td>
        </tr>
        <tr>
        <td style="border:0"> Seats: </td>
        <td style="border:0"> <?php echo $row['seats']?> </td>
        </tr>
        <tr>
        <td style="border:0"> Fuel type: </td>
        <td style="border:0"> <?php echo $row['fueltype']?> </td>
        </tr>
        <tr>
        <td style="border:0"> Air condition: </td>
        <td style="border:0"> <?php echo $row['ac']?> </td>
        </tr>
		<tr>
        <td style="border:0"> Music system: </td>
        <td style="border:0"> <?php echo $row['ms']?> </td>
        </tr>
		<tr>
        <td style="border:0"> Price: </td>
        <td style="border:0"> <?php echo $row['price']?> </td>
        </tr>
        </div>
          
        
    </table><center>
      <form id="form2" name="form2" method="post" action="">
      <input type="hidden" name="cid" id="cid" value="<?php echo $row['cid']?>" />
       <input name="sub" type="submit" class="button1" id="submit" value="Book" onclick="alert('Booked..!we will contact you soon..!');"/>
      </form></center>
      <p>&nbsp;</p></td>
      
    </tr>
  </table>
  </div>
<?php } ?>
			</div> 
</div>
</div>
</div>			
</center>
</figure>
<main class="hoc container clear"> 
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>