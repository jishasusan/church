<html>
<head>
<style>
body
	{
    padding:-90px;
	margin:-35px;
    
	}
div.new {
    float: right;
	width: 50%;
    height: 20px;
    border: 3px solid red;
}

	.centered {
    position:absolute;
    top: 20%;
    left: 10%;
	font-size:40px;
    transform: translate(-50%, -50%);
	}
	.right{
    position:absolute;
    top: 20%;
    left: 60%;
	width:85%;
	font-size:15px;
    transform: translate(-50%, -50%);
	}
	div.qw{
    background-color:#eee;
    width:100%;
	height:90%;
	left:60%;
	right:10%;
	padding:30px ;
	
	}
	h2 {
    overflow: hidden;
    text-align: center;
	font-size: 26px;
	font-weight: 500;
    color: #333;
    font-family:"Montserrat";
	}
	div.georgechurch{
		color:#888;
		padding:80px;
		width:27%;
		height:1;
		margin-left:60px;
		margin-top:-90px;

	}	
	
	
	div.history{
		color:#888;
		padding:90px;
		width:27%;
		height:10%;
		margin-left:490px;
		margin-top:-160px;

	}	
	div.organization
	{
	color:#888;
	 padding:100px;
	 	width:27%;
		height:10%;
		margin-left:900px;
		margin-top:-250px;
	
	}
	
	.st-btn {
    text-decoration: none;
    color: #fff;
    font-family: "Montserrat";
    text-transform: uppercase;
    background: #8ec92f;
    padding: 8px 25px 8px 25px;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
}
</style>
<title>Church management</title>

<link rel="stylesheet" href="coe1.css" type="text/css">
<link rel="stylesheet" href="style1.css"/>
</head>
<body>
<br>
<div class="right">
<ul>  <li><a class="active" href="home.php">HOME</a></li>
<li class="dropdown">
<a href="#" class="dropbtn"> REGISTRATION</a>
    <div class="dropdown-content">
      <a href="register.php">MEMBER</a>
	  <a href="hallreg.php">HALL</a>
 <li><a href="login.php">LOGIN</a></li> 
 <li><a href="bibleverse.php">BIBLEVERSE</a></li> 
      <li><a href="contact.html">CONTACT</a></li>
</div>
	  
</ul>
<br>

<div >
	<img class="mySlides"src="churchimage.jpg" width="100%" height="100%" alt="image">
    <img class="mySlides"src="georgechurch.jpg" width="100%" height="100%" alt="image" >
     <img class="mySlides"src="churchhall.jpg" width="100%" height="100%" alt="image" >
	 <img class="mySlides"src="image4.jpg" width="100%" height="100%" alt="image" >
	</div>
	<div class="centered"><img src="newlogo.png"></div>


	<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
</div>
 <br>
 <br>
<div class="qw">
<h2>About The Church</h2>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="pic-1.jpg " width="27%" height="40%" alt="new">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="pic-2.jpg" width="27%" height="40%" alt="new" >
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="pic-3.jpg"width="27%" height="40%" alt="new">
<div class="georgechurch">

<h3>ST.George</h3>
Saint George (AD 275–281 to 23 April 303), according to legend, was a Roman soldier and military officer in the Guard of Emperor Diocletian of the Roman army, who ordered his death..
<br>
<br>
<a href="stgeorge.php" class="st-btn">Read More</a>
</div>
<div class="history">
<h3>Our History</h3>St.George's Forane Church has a glorious history of 14 centuries. Fourteen centuries ago, there was no nation called India. Nor a state called Kerala. And no city called Cochin. Much of what...

<br>
<br>
<a href="our-history.php" class="st-btn">Read More</a>
 </div>
 <div class="organization">
<h3>Organizations</h3>A Darsana Samooham is a religious body consisting of laymen, dedicated to Virgin Mary or any other Saint with close connection with a religious order. They usually wear their religious dress...
<br>
<br>
<a href="http://www.edappallystgeorge.org/organizations.php" class="st-btn">Read More</a>
 </div>

</div>


 <!-- <b>MAIL ID: church@gmail.com</b><br>
<br><br><b>Copyright &copy; 2016 - All Rights Reserved for COE LIBRARY</b>-->

  
   </div>
 </body>
</html>