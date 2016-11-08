<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'certificate_mgt'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
	
	session_start();
	$b = $_SESSION['uname'];
	$type = "SELECT WARD as ward FROM voting WHERE UID LIKE '$b'";
	$data1=mysql_query($type) or die(mysql_error());
	
	$name = "select NAME as name FROM logintb where UNAME LIKE '$b'";
	$data2 = mysql_query($name) or die(mysql_error());
	
	$dob = "select DOB as dob FROM logintb where UNAME LIKE '$b'";
	$data3 = mysql_query($dob) or die(mysql_error());
	
	$sex = "select GENDER as gen from logintb where UNAME LIKE '$b'";
	$data4 = mysql_query($sex) or die(mysql_error());

	$add = "select ADDRESS as addr from logintb where UNAME LIKE '$b'";
	$data5 = mysql_query($add) or die(mysql_error());
	
	
	
	if($data1 && $data2 && $data4 && $data5 && $data3)
	{
		$row1=mysql_fetch_array($data1);
		echo $row1['ward'];

		$row2=mysql_fetch_array($data2);
		echo $row2['name'];

		$row4=mysql_fetch_array($data4);
		echo $row4['gen'];

		$row5=mysql_fetch_array($data5);
		echo $row5['addr'];

		$row3=mysql_fetch_array($data3);
		echo $row3['dob'];
	}
	
?>

<html>

<form name="logout" action="logout.php" method="POST">
<p align="right"> <input type="submit" name="logout" value="logout"></p>
</form>
<table align="center">

<tr>
<td colspan=2 align="center"><img src="swj.jpg"></td>
</tr>

<tr>
<td colspan=2 align="center"><h2>भारत निर्वाचन आयोग</h2></td>
</tr>

<tr>
<td colspan=2 align="center"><h2>ELECTION COMMISION OF INDIA</h2></td>
</tr>

<tr>
<td colspan=2 align="center"><h3>Identity Card</h3></td>
<tr>

<tr>
<td>Elector's Name: </td>
<td><?php echo $row2['name'];?></td>
</tr>

<tr>
<td>Sex: </td>
<td><?php echo $row4['gen'];?></td>
</tr>

<tr>
<td>Date of Birth: </td>
<td><?php echo $row3['dob'];?></td>
</tr>

<tr>
<td>Address: </td>
<td><?php echo $row5['addr'];?></td>
</tr>

<tr>
<td colspan=2 align="center">This card can be used as an identity card <br> Under different Government Programmes </td>
</tr>

<tr>
<td>Ward No.:</td>
<td><?php echo $row1['ward'];?></td>
</tr>

</table>
</html>