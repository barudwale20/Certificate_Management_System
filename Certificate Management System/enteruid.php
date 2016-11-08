<html>
	<head>
		<title>Birth Certificate</title>
	</head>
	<body>
				<table border="0" align="center">
				<form method="post" action="checkuid.php">
				<tr>
					<th height="50" colspan="2">Birth Certificate</th>
				</tr>
				<tr>
					<td height="50"><label>User ID:</label></td>
					<td><input name="UID" type="text" id="UID" size="20" required  oninvalid="this.setCustomValidity('Please Enter The User ID')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50" colspan="2" align="center"><input type="submit" name="Submit" value="Confirm"/></td>
				</tr>
				</form>
				</table>
	</body>
</html>
