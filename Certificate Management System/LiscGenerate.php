<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'certificate_mgt'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

//if(isset($_POST['submit']))
session_start();	
	$b = $_SESSION['uname'];
	$type = "SELECT TYPE as ty FROM liscence WHERE UID LIKE '$b'";
	$data1=mysql_query($type) or die(mysql_error());
	$rtno = "SELECT RTONO as rtono FROM liscence WHERE UID LIKE '$b'";
	$data2=mysql_query($rtno) or die(mysql_error());
	$sonwi = "SELECT SONWI as sw FROM liscence WHERE UID LIKE '$b'";
	$data3=mysql_query($sonwi) or die(mysql_error());
	$name = "select NAME as name FROM logintb where UNAME LIKE '$b'";
	$data4 = mysql_query($name) or die(mysql_error());
	$add = "select ADDRESS as addr from logintb where UNAME LIKE '$b'";
	$data5 = mysql_query($add) or die(mysql_error());
	
	
	
	

	if($data1 && $data2 && $data3 && $data4 && $data5)
	{
		$row1=mysql_fetch_array($data1);
		
		$row2=mysql_fetch_array($data2);
		
		$row3=mysql_fetch_array($data3);
		
		$row4=mysql_fetch_array($data4);
		
		$row5=mysql_fetch_array($data5);
		
	}
	else
	{
		echo "Please register first";
	}
?>

<html>

<form name="logout" action="logout.php" method="POST">
<p align="right"> <input type="submit" name="logout" value="logout"></p>
</form>
	<table align="center">
		<tr>
		<td><img src="swj.jpg">&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td style="color:red" align="center" ><h2>THE UNION OF INDIA<br>STATE MOTOR DRIVING LISCENCE</h2></td>
		<td align="right"><img src="tnrto.png"></td>
		</tr>
		
		<tr>
		<td rowspan =8><img src="snip.png"></td>
		<td><b>DL No. <?php echo $row2['rtono']?>-21475693</td>
		<td><b>Valid Till: Dec <?php echo date("Y/m/d")+25;?>(Non Trans.)</td>
		<tr>
		
		<tr>
		<td><b>AUTHORIZATION TO DRIVE FOLLOWING <br>CLASS OF VEHICLES THROUGHOUT INDIA</td>
		<td><b>Class : <?php echo $row1['ty'];?></td>
		<tr>
		
		<tr>
		
		<td><b>Name: 
		<?php echo $row4['name']; ?></td>
		<td rowspan=4><img src="unknown.png"></td>
		</tr>
		
		<tr>
		
			<td><b>S/D/W of:
			<?php echo $row3['sw'];?></td>
		</tr>
		
		<tr>
		
		<td><b>Address: 
		<?php echo $row5['addr']; ?></td>
		</tr>
		
		<tr>
		
			<td><b>Issuing Authority: TN-<?php echo $row2['rtono']?></td>
		</tr>
		
	</table>
</html>