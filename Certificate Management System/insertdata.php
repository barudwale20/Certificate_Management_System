<?php
	$dbc=mysql_connect("localhost","root","");
	$db=mysql_select_db("certificate_mgt",$dbc);

	$name=$_POST['name'];
	$UID=$_POST['UID'];
	$password=$_POST['pwd'];
	$cpassword=$_POST['repwd'];
	$DOB=$_POST['dob'];
	$gender=$_POST['gen'];
	$email=$_POST['email'];
	$pno=$_POST['phnum'];
	$add=$_POST['address'];

	if($password!=$cpassword)
	{
		echo "<script>window.alert('Your Passwords do not match')</script>";
		echo "<script>window.location='frontpage.html'</script>";
	}
	else
	{
		$enter="INSERT INTO logintb VALUES('$UID','$name','$gender','$DOB',$pno,'$email','$password','$add')";
		mysql_query($enter);

		$r="SELECT First_Name,Surname,Email_ID,Password FROM Members";
		$res=mysql_query($r);
		while($ro=mysql_fetch_array($res))
		{   
		    echo "success"."<br>";
		}
		session_start();
		$_SESSION['uname']=$UID;
		echo "<script>window.location='MAINPAGE.html'</script>";
	}
?>
