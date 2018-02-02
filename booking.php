
<?php
include 'co.php';
//SESSION_start();

$emailid=$_SESSION["emailid"];

$hid=$_REQUEST['hallid'];
//$hid = $_SESSION['hallid'];
//echo $hid;
$rdate = date('Y-m-d');
$q2 = "SELECT  `emailid`, `status` FROM `login` WHERE `emailid`='$emailid' ";
$result2 = $con->query($q2);
$row2 = $result2->fetch_assoc();
$e=$row2["regid"];

	 

if(isset($_POST['ok']))
{
  $bdte=$_POST["bdate"];
$nd = date("Y-m-d", strtotime($bdte));  
 if ($rdate < $nd)
    {
	$sql11="SELECT `bid`, `regid`, `hallid`, `bdate`, `date`, `status` FROM `booking` WHERE `bdate`='$nd' ";
$re=mysqli_query($con,$sql11);
$d=mysqli_fetch_array($re);
$id=$d['bid'];
			if($id=="")
			{
		$qury="INSERT INTO `booking`( `regid`, `hallid`, `bdate`, `date`, `statuss`, `paymnt sataz`) VALUES ('$e','$hid','$nd','$rdate','request','notpay')";
 
 $a=mysqli_query($con,$qury);

			header("location:nwpay.php");
			}
		else{
		echo "<script>if(confirm(' on this date this hall is already booked!!!')){document.location.href='hall_book.php'}else{document.location.href='hall_book.php'};</script>";
			}
	
	
		// setting username as session variable
	
    }
 else{
		echo "<script>if(confirm(' please select a valid date!!!')){document.location.href='hall_book.php'}else{document.location.href='hall_book.php'};</script>";
      }



}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : CrossWalk
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140216

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
<link href="nw.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1>&nbsp&nbsp<a href="#"><marquee>RESTURANT REVIEWS OF TOP  RESTURANT IN KOTTAYAM</marquee></a></h1>
		</div>
		<div id="menu">
			<ul>
			<li class="current_page_item"><a href="booking.php" accesskey="1" title="">BOOKING</a></li>
			<li ><a href="hall_book.php" accesskey="2" title="">HAll VIEW</a></li>
        <li ><a href="user.php" accesskey="2" title="">HOMEPAGE</a></li>


			</ul>
		</div>
	</div>
  <div id="banner">&nbsp;</div>
	<!--your code write here -->


	<br><br><div ><center style="color: #990066; font-size: 15px;"><b><h1>BOOKING DETAILS</h1></b></center><br>
  </div>
  <form id="form" name="form1" method="post" action="#" >
  
   <table border=1 align="center">
<tr>
<td><div><h3><center>Booked dates</center></h3></div><br></td>

</tr>
<?php
$results=mysqli_query($con,"SELECT `bid`, `regid`, `hallid`, `bdate`, `date`, `statuss` FROM `booking` WHERE `hallid`= $hid;");


while($row=mysqli_fetch_array($results)){
//print_r("$row");

?>

<td><?php echo $row['bdate'];?></td>

</tr>
<?php
}
?>
<!-- up to here-->
</table>
<div class=f2>

<table width="403"align="center">




<tr>
<td width="591">Choosen date for you want :</td>
<td width="296">
<input type="date" style="color:black;"name="bdate" required ></td>
</tr>
</table>
<center><input type="submit" value="Book"  name="ok"/></center><br><br>
	<!-- up to here-->
</div>
<div id="copyright" style="background-color: #990066; ">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>

</body>
</html>
