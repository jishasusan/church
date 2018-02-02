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
$id=$_REQUEST['id'];
include 'co.php';
$sql="select * from dailyprayer where id=$id";
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
<form action="dailyupdate.php" method="post">
<tr>
<td><input name="day" type="text" value="<?php echo $row['day']; ?>"/></td>
<td><input name="morningprayer" type="text" value="<?php echo $row['morningprayer']; ?>"/></td>
<td><input name="morningtime" type="text" value="<?php echo $row['morningtime']; ?>"/></td>
<td><input name="eveningprayer" type="text" value="<?php echo $row['eveningprayer']; ?>"/></td>
<td><input name="eveningtime" type="text" value="<?php echo $row['eveningtime']; ?>"/></td>
<td><input name="description" type="text" value="<?php echo $row['description']; ?>"/></td>
<td><input type="hidden" name="id" value="<?php echo $row['id']; ?>" /> </td>
<td> <input type="submit" value="update"  name="ok"/> </td>
</tr>
</form></table>
</body>
</html>
