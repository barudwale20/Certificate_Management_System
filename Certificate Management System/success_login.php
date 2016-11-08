<?php
	$dbc=mysql_connect("localhost","root","");
	$db=mysql_select_db("certificate_mgt",$dbc);
	$username=$_POST['username'];
	$password=$_POST['password'];
	//$username = stripslashes($username);
	//$password = stripslashes($password);
	//$username = mysql_real_escape_string($username);
	//$password = mysql_real_escape_string($password);

	$sql="SELECT * FROM loginTB WHERE uname='$username'";
	$sql1="SELECT * FROM loginTB WHERE uname='$username' and password='$password'";

	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	$result1=mysql_query($sql1);
	$count1=mysql_num_rows($result1);

	session_start();

	if($count!=1)
	{
		echo "<script>window.location='invaliduser.php'</script>";
	}
	else if($count==1 && $count1!=1)
	{
		echo "<script>window.location='inpass.php'</script>";
	}
	else
	{
		$_SESSION['uname'] = $username;
		echo "<script>window.location='MAINPAGE.html'</script>";
	}
?>
