<html>
	<head>
		<title>CERTIFICATE MANAGEMENT</title>
	</head>
	<body>
		<form action="success_login.php" method="post" name="login">
		<table border="0" align="center">
			<tr>
				<th colspan="2" align="center">CERTIFICATE MANAGEMENT</th>
			</tr>
			<tr>
				<td height="50"><label>Username:</label></td>
				<td><input name="username" type="text" size="25" required oninvalid="this.setCustomValidity('Please Enter Your Username')" oninput="setCustomValidity('')"/></td>
			</tr>
			<tr>
                   	<td height="50"><label>Password:</label></td>
				<td><input name="password" type="password" oninvalid="this.setCustomValidity('Please Enter your password');"  oninput="setCustomValidity('')" size="25" required/></td>
			</tr>
			<tr>
				<td colspan="2" height="50" align="center"><input type="submit" name="Submit" value="Confirm"/></td>
			</tr>
		</table>
		</form>
	</body>
</html>
