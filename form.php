<?php
$term= mysql_real_escape_string($_REQUEST['term']);    

$sql = "SELECT firstname ,lastname,housename,postoffice,place,pin,phone FROM registration WHERE bloodgroup LIKE '%".$term."%'";
$r_query = mysql_query($sql);

while ($row = mysql_fetch_array($r_query)){ 
echo 'Firstname: ' .$row['firstname']; 
echo '<br /> Lastname: ' .$row['lastname']; 
echo '<br /> Housename: '.$row['housename']; 
echo '<br /> Category: '.$row['postoffice']; 
echo '<br /> Cut Size: '.$row['place']; 
echo '<br /> Cut Size: '.$row['pincode'];
echo '<br /> Cut Size: '.$row['phone']; 
} 
?>