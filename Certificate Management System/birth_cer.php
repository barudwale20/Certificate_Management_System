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
				<!--<tr>
					<td height="50"><label>User ID:</label></td>
					<td><input name="UID" type="text" id="UID" size="20" required  oninvalid="this.setCustomValidity('Please Enter The User ID')" oninput="setCustomValidity('')"/></td>
				</tr>-->
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
					<td height="50" align="center"><input type="submit" name="Submit" value="Confirm"/></td>
					<td height="50" align="center"><a href='b_c.php'><input type="button" name="Submit" value="Cancel"/></a></td>
				</tr>
				</table>
				</form>
	</body>
</html>
