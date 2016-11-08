<?php
	$dbc=mysql_connect("localhost","root","");
	$db=mysql_select_db("certificate_mgt",$dbc);
	
	/*$query = 'CREATE TABLE transfer_certificate( '.
         'UID VARCHAR(8) NOT NULL ,'.
		 'cbse_ano INT(8) NOT NULL ,'.
         'scode INT(6) NOT NULL, '.
         'sl_no INT(6) NOT NULL, '.
		 'adm_no INT(8)  NOT NULL, '.
		 
		 'sname VARCHAR(15)  NOT NULL, '.
		 'mname VARCHAR(15)  NOT NULL, '.
		 'fname VARCHAR(15)  NOT NULL, '.
		 'dob_sreg VARCHAR(15)  NOT NULL, '.
		 'caste VARCHAR(15))  NOT NULL, '.
		 
		 'first_doj_class VARCHAR(12) NOT NULL, '.
		 'last_studied_class VARCHAR(10)NOT NULL, '.
         'result VARCHAR(8) NOT NULL, '.
         'sfee_paid_uptomonth VARCHAR(10)NOT NULL,'.
		 'date_of_application VARCHAR(12) NOT NULL,'.
		 'date_of_issue VARCHAR(12) NOT NULL,'.
		 'reason_for_leaving VARCHAR(50) NOT NULL)';
		    
		$result = mysql_query($query);*/
session_start();
		$uid=$_SESSION['uname'];
	    $Cbseano=$_POST['Cbseano'];
		$Scode=$_POST['Scode'];
	    $Slno=$_POST['Slno'];
		$Ano=$_POST['Ano'];
		$Doa=$_POST['Doa'];
		$Sname=$_POST['Sname'];
		$Mname=$sname=$_POST['Mname'];
		$Fname=$sname=$_POST['Fname'];
		$Dob=$sname=$_POST['Dob'];
		$Caste=$sname=$_POST['Caste'];
		$Class=$_POST['Class'];
		$Result=$_POST['Result'];	
		$Fee=$_POST['Fee'];
		$Doac=$_POST['Doac'];
		$Doic=$_POST['Doic'];
		$Reason=$_POST['Reason'];
	
	
	$enter="INSERT INTO transfer_certificate VALUES('$uid','$Cbseano','$Scode','$Slno','$Ano','$Doa','$Sname','$Mname','$Fname','$Dob','$Caste','$Class','$Result','$Fee','$Doac','$Doic','$Reason')";
	mysql_query($enter);
	$r="SELECT uid,cbse_ano,scode,sl_no,adm_no,sname,mname,fname,dob_sreg,castefirst_doj_class,last_studied_class,result,sfee_paid_uptomonth,date_of_application,date_of_issue,reason_for_leaving";
	$res=mysql_query($r);
	while($ro=mysql_fetch_array($res))
	{   
		    echo "success"."<br>";
	}
	$_SESSION['user']=$uid;
	echo "<script>window.location='tcafterdata.php'</script>";
?>
