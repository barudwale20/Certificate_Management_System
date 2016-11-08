<?php
	$dbc=mysql_connect("localhost","root","");
	$db=mysql_select_db("certificate_mgt",$dbc);
	session_start();
	$UID=$_SESSION['uname'];
	$DOB=$_POST['DOB'];
	$name=$_POST['Child_Name'];
	$gender=$_POST['Gender'];
	$weight=$_POST['Weight'];
	$father=$_POST['Father_Name'];
	$mother=$_POST['Mother_Name'];
	$place=$_POST['Birth_Place'];
	$panchayat=$_POST['Panchayat'];
	$doctor=$_POST['Doctor_Name'];
	$hospital=$_POST['Hospital'];
	
	
	$enter="INSERT INTO Birth_Certificate VALUES('$UID','$name','$gender','$father','$mother','$place','$weight','$panchayat','$doctor','$hospital','$DOB')";
	mysql_query($enter);
	$r="SELECT UID,Child_Name,Gender,Father_Name,Mother_Name,Place_Of_Birth,Weight,Panchayat,Doctor_Name,Hospital,DOB FROM Birth_Certificate";
	$res=mysql_query($r);
	while($ro=mysql_fetch_array($res))
	{   
		    echo "success"."<br>";
	}
	$_SESSION['user']=$UID;
	echo "<script>window.location='http://localhost/DBMSPRO/afterdata.php'</script>";
?>
