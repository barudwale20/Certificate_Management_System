<?php
	$dbc=mysql_connect("localhost","root","");
	$db=mysql_select_db("certificate_mgt",$dbc);

	$UID=$_POST['UID'];

	$r="SELECT * FROM Birth_Certificate where UID='$UID'";
	$res=mysql_query($r);
	$count=mysql_num_rows($res);
	if($count==1)
	{
		session_start();
		$_SESSION['user']=$UID;
		echo "<script>window.location='http://localhost/DBMSPRO/afterdata.php'</script>";
	}
	else
	{
		echo "<script>window.location='http://localhost/DBMSPRO/noceruid.php'</script>";
	}		
?>
