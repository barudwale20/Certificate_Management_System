<?PHP
$server = "localhost";
$username = "root";
$password = "";

	
	
$conn = mysql_connect($server, $username, $password) or die("server is not connecting");
$sql = mysql_select_db('certificate_mgt',$conn) or die("database is not connecting");
session_start();
$u=$_SESSION['uname'];

$query="SELECT * FROM pan_id_sample WHERE username='$u'";
$result=mysql_query($query,$conn);
while($row=mysql_fetch_assoc($result)){
	
	@$first_name=$row['first_name'];
	@$middle_name=$row['middle_name'];
	@$last_name=$row['last_name'];
	
	@$first_name1=$row['first_name1'];
	@$middle_name1=$row['middle_name1'];
	@$last_name1=$row['last_name1'];
	
	@$date = $row['date'];
	@$month = $row['month'];
	@$year = $row['year'];
	
	@$pan_no = $row['registration_no'];
}


	
	
?>
<html><body>
<form name="logout" action="logout.php" method="POST">
<p align="right"> <input type="submit" name="logout" value="logout"></p>
</form>
<br><br><br><br><br><br><br><br><br><table align='center' border='2' WIDTH='400' BGCOLOR='BLUE'>
<tr><td>

<h1 align='center'><FONT COLOR='RED'>PAN CARD</FONT></h1>
<font color='white'>
PAN_HOLDER: -<?php echo $first_name."   "; echo $middle_name."  "; echo $last_name."  "; ?><br>
	
    FATHER_NAME: - <?php echo $first_name1."  "; echo $middle_name1."  "; echo $last_name1."  " ?><br>
	
	DATE_OF_BIRTH: - <?php echo $date."  "; echo $month."  "; echo $year."  "; ?><br>
	
	PAN_NO: - <?php echo $pan_no."  "; ?><br>
	</td></tr>
</body>	</html>