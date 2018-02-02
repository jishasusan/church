<table  width="400" border="1">
  <tr><font color="black"<html>
    <head>
        <title>DAILY PRAYER
        </title>
    </head>

    <body>



</div>
   
  
    <td><font color="black">&nbsp;DAY</font></td>
    <td><font color="black">&nbsp;MORNING PRAYER</font></td>
     <td><font color="black">&nbsp;MORNING TIME</font></td>
      <td><font color="black">&nbsp;EVENING PRAYER</font></td>
    <td><font color="black">&nbsp;EVENING TIME</font></td>
    <td><font color="black">&nbsp;DESCRIPION</font></td>
    
<?php
$bid=$_REQUEST['bid'];
include 'co.php';
$sql="select * from bloodbank where bid=$bid";
$results=mysqli_query($con,$sql);
//echo $sql;
$row=mysqli_fetch_array($results);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
html{
background:url('jky.png') no-repeat center fixed;
background-size:cover;
}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dailyprayer edit</title>
</style>
</head>

<body>
<form action="bloodupdate.php" method="post">
<td><input name="firstname" type="text" value="<?php echo $row['firstname']; ?>"/></td>
<td><input name="lastname" type="text" value="<?php echo $row['lastname']; ?>"/></td>
<td><input name="housename" type="text" value="<?php echo $row['housename']; ?>"/></td>
<td><input name="postoffice" type="textarea" value="<?php echo $row['postoffice']; ?>"/></td>
<td><input name="place" type="text" value="<?php echo $row['place']; ?>"/></td>

<td><input name="pincode" type="text" value="<?php echo $row['pincode']; ?>"/></td>
<td><input name="phone" type="text" value="<?php echo $row['phone']; ?>"/></td>
<td><input name="emailid" type="textarea" value="<?php echo $row['emailid']; ?>"/></td>
<td><input type="hidden" name="bid" value="<?php echo $row['bid']; ?>" /> </td>
<td> <input type="submit" value="update"  name="ok"/> </td>

</form></table>
</body>
</html>
