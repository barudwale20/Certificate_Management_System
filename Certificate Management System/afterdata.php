<?php
	$username='';
	session_start();
	$dbc=mysql_connect("localhost","root","");
	$db=mysql_select_db("certificate_mgt",$dbc);
	if(!empty($_SESSION['uname']))
	{
		$username=$_SESSION['uname'];

		$data1="SELECT DOB FROM Birth_Certificate WHERE UID='$username'";
		$result1=mysql_query($data1);
		$DOB=mysql_fetch_array($result1);

		$data2="SELECT Child_Name FROM Birth_Certificate WHERE UID='$username'";
		$result2=mysql_query($data2);
		$Child_Name=mysql_fetch_array($result2);

		$data3="SELECT Gender FROM Birth_Certificate WHERE UID='$username'";
		$result3=mysql_query($data3);
		$Gender=mysql_fetch_array($result3);

		$data4="SELECT Father_Name FROM Birth_Certificate WHERE UID='$username'";
		$result4=mysql_query($data4);
		$Father_Name=mysql_fetch_array($result4);

		$data5="SELECT Mother_Name FROM Birth_Certificate WHERE UID='$username'";
		$result5=mysql_query($data5);
		$Mother_Name=mysql_fetch_array($result5);

		$data6="SELECT Place_Of_Birth FROM Birth_Certificate WHERE UID='$username'";
		$result6=mysql_query($data6);
		$Place_Of_Birth=mysql_fetch_array($result6);

		$data7="SELECT Weight FROM Birth_Certificate WHERE UID='$username'";
		$result7=mysql_query($data7);
		$Weight=mysql_fetch_array($result7);

		$data8="SELECT Panchayat FROM Birth_Certificate WHERE UID='$username'";
		$result8=mysql_query($data8);
		$Panchayat=mysql_fetch_array($result8);

		$data9="SELECT Doctor_Name FROM Birth_Certificate WHERE UID='$username'";
		$result9=mysql_query($data9);
		$Doctor_Name=mysql_fetch_array($result9);

		$data10="SELECT Hospital FROM Birth_Certificate WHERE UID='$username'";
		$result10=mysql_query($data10);
		$Hospital=mysql_fetch_array($result10);
?>
<html>
	<head>
		<title>Birth Certificate</title>
	</head>
	<body>
				<table border="0" align="center">
				<tr>
					<th height="50" colspan="2">Birth Certificate</th>
				</tr>
				<tr>
					<td height="50"><label>User ID:</label></td>
					<td height="50"><?php echo $username; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Date Of Birth:</label></td>
					<td height="50"><?php echo $DOB['DOB']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Child Name:</label></td>
					<td height="50"><?php echo $Child_Name['Child_Name']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Gender:</label></td>
					<td height="50"><?php echo $Gender['Gender']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Weight:</label></td>
					<td height="50"><?php echo $Weight['Weight']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Father's Name:</label></td>
					<td height="50"><?php echo $Father_Name['Father_Name']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Mother's Name:</label></td>
					<td height="50"><?php echo $Mother_Name['Mother_Name']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Place Of Birth:</label></td>
					<td height="50"><?php echo $Place_Of_Birth['Place_Of_Birth']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Panchayat</label></td>
					<td height="50"><?php echo $Panchayat['Panchayat']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Doctor's Name:</label></td>
					<td height="50"><?php echo $Doctor_Name['Doctor_Name']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Hospital:</label></td>
					<td height="50"><?php echo $Hospital['Hospital']; ?></td>
				</tr>
				<tr>
					<td height="50" colspan="2" align="center"><a href="logout.php"><input type="button" name="Submit" value="Print"/></a></td>
				</tr>
				</table>
	</body>
</html>
<?php
	}
	else
	{
?>
<html>
	<head>
		<title>Birth Certificate</title>
	</head>
	<body>
	<form name="logout" action="logout.php" method="POST">
<p align="right"> <input type="submit" name="logout" value="logout"></p>
</form>
                    <form name="birth_cer" method="post" action="birth.php">
				<table border="0" align="center">
				<tr>
					<th height="50" colspan="2">Birth Certificate</th>
				</tr>
				<tr>
					<td height="50"><label>User ID:</label></td>
					<td><input name="UID" type="text" id="UID" size="20" required  oninvalid="this.setCustomValidity('Please Enter The User ID')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Date Of Birth:</label></td>
					<td><input name="DOB" type="text" id="DOB" placeholder="dd/mm/yyyy" required  oninvalid="this.setCustomValidity('Please Enter Your Date Of Birth')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Child Name:</label></td>
					<td><input name="Child_Name" type="text" id="Child_Name" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Child's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Gender:</label></td>
					<td><select name="Gender">
						<option value="">Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select></td>
				</tr>
				<tr>
					<td height="50"><label>Weight:</label></td>
					<td><input name="Weight" type="number" id="Weight" size="20" placeholder="weight in kg" required oninvalid="this.setCustomValidity('Please Enter The Weight')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Father's Name:</label></td>
					<td><input name="Father_Name" type="text" id="Father_Name" size="20"  required  oninvalid="this.setCustomValidity('Please Enter The Father's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Mother's Name:</label></td>
					<td><input name="Mother_Name" type="text" id="Mother_Name" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Mother's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Place Of Birth:</label></td>
					<td><input name="Birth_Place" type="text" id="Birth_Place" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Place Of Birth')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Panchayat</label></td>
					<td><input name="Panchayat" type="text" id="Panchayat" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Name Of The Panchayat')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Doctor's Name:</label></td>
					<td><input name="Doctor_Name" type="text" id="Doctor_Name" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Doctor's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Hospital:</label></td>
					<td><input name="Hospital" type="text" id="Hospital" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Name Of The Hospital')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50" colspan="2" align="center"><input type="submit" name="Submit" value="Confirm"/></td>
				</tr>
				</table>
				</form>
	</body>
</html>
<?php
	}
?>
