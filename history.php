<html>
<style>
body
	{
	
	 color:black;
	border: 2px solid blue;
    padding:4px;
	margin:1px;
	}
	.container {
    position: relative;
    text-align:center;
    color: white;
}

	.centered {
    position:absolute;
    top: 60%;
    left: 40%;
	font-size:40px;
    transform: translate(-50%, -50%);
	}
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	}
	td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
	</style>
	<body>
	<link rel="stylesheet" href="coe.css" type="text/css">
	
<ul>  <li><a class="active" href="adminwel.php">HOME</a></li>
<li class="dropdown">
    <a href="#" class="dropbtn">PRAYER</a>
    <div class="dropdown-content">
      <a href="daily.php">DAILY</a>
      <a href="spcl.php">SPECIAL</a>
	  <a href="sview.php">VIEW SPECIAL</a>
	  <a href="dview.php">VIEW DAILY</a></li>
	  <li class="dropdown">
  <a href="#" class="dropbtn"> REGISTRATION</a>
    <div class="dropdown-content">
      <a href="regview.php">MEMBER</a>
      <a href="hallview.php">HALL</a></li>
	  <li class="dropdown">
	  <a href="#" class="dropbtn"> CERTIFICATE</a>
    <div class="dropdown-content">
      <a href="marriageform.php">MARRIAGE</a>
	  <li><a href="searcha.php">BlOOD BANK</a></li>
	  <li><a href="bookview.php">BOOKING</a></li>
	  <li><a href="report.php">REPORT</a></li>
      <li><a href="logout.php">LOGOUT</a></li></ul>
	  <!--<br>Welcome <?php
								echo $_SESSION['emailid'];
							?>..!!-->

	  <div class="container">
  <img src="lastsuper.jpg" alt="Norway" style="width:100%;height:50%">
	<div class="centered"> St.George Forane Church,Edappally</div>
</div><center><font size="6">HISTORY</font></center></ul>	
<table>
<tr><td>Member Registration2018</a></td><td rowspan="5"><a href="report.php">view more</td>
<tr><td>Hall Registration2018</td>
<tr><td>Hall Booking2018</td>
<tr><td>Marriage Certificates issued2018</td>
<tr><td>Baptism Certificates issued2018</td>
</table>
</body>
</html>