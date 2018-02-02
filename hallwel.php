<html>
<head>
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
<ul>  <li><a class="active" href="indexes.php">HOME</a></li>
 
 
 
 <li class="dropdown">
	  <a href="#" class="dropbtn">BOOKING</a>
    <div class="dropdown-content">
      <a href="booking1.php">BOOKHALL</a>
	  <a href="bookuser.php">BOOKVIEW</a>
	 </li>
      
      <li><a href="logout.php">LOGOUT</a></li>
</ul>
<br>
<span style="color:black;font-family:Calibri Light (Headings);font-size:150%;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<b><pre><MARQUEE>**** WELCOME TO BOOKING  PAGE ****</MARQUEE></PRE></b></span></div><br><br><br>


<table>
	<tr>
	<td ><img class="mySlides"src="slide.jpg" width="100%" height="60%" alt="image" >
    <img class="mySlides"src="slide1.jpg" width="100%" height="60%" alt="image" >
     <img class="mySlides"src="slide2.jpg" width="100%" height="60%" alt="image" ></td>
	</table>


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
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>
 <br>
 </body>
 </html>