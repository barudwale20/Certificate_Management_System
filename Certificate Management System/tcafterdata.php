<?php
	$username='';
	session_start();
	$dbc=mysql_connect("localhost","root","");
	$db=mysql_select_db("certificate_mgt",$dbc);
	if(!empty($_SESSION['uname']))
	{
		$username=$_SESSION['uname'];

		$data1="SELECT cbse_ano FROM transfer_certificate WHERE UID='$username'";
		$sresult1=mysql_query($data1);
		$cbse_ano=mysql_fetch_array($sresult1);

		$data2="SELECT scode FROM transfer_certificate WHERE UID='$username'";
		$sresult2=mysql_query($data2);
		$scode=mysql_fetch_array($sresult2);

		$data3="SELECT sl_no FROM transfer_certificate WHERE UID='$username'";
		$result3=mysql_query($data3);
		$sl_no=mysql_fetch_array($result3);

		$data4="SELECT adm_no FROM transfer_certificate WHERE UID='$username'";
		$result4=mysql_query($data4);
		$adm_no=mysql_fetch_array($result4);

		$data5="SELECT sname FROM transfer_certificate WHERE UID='$username'";
		$result5=mysql_query($data5);
		$sname=mysql_fetch_array($result5);

		$data6="SELECT mname FROM transfer_certificate WHERE UID='$username'";
		$result6=mysql_query($data6);
		$mname=mysql_fetch_array($result6);

		$data7="SELECT fname FROM transfer_certificate WHERE UID='$username'";
		$result7=mysql_query($data7);
		$fname=mysql_fetch_array($result7);

		$data8="SELECT dob_sreg FROM transfer_certificate WHERE UID='$username'";
		$result8=mysql_query($data8);
		$dob_sreg=mysql_fetch_array($result8);

		$data9="SELECT caste FROM transfer_certificate WHERE UID='$username'";
		$result9=mysql_query($data9);
		$caste=mysql_fetch_array($result9);

		$data10="SELECT first_doj_class FROM transfer_certificate WHERE UID='$username'";
		$result10=mysql_query($data10);
		$first_doj_class=mysql_fetch_array($result10);
		
		$data11="SELECT last_studied_class FROM transfer_certificate WHERE UID='$username'";
		$result11=mysql_query($data11);
		$last_studied_class=mysql_fetch_array($result11);

		$data12="SELECT result FROM transfer_certificate WHERE UID='$username'";
		$result12=mysql_query($data12);
		$result=mysql_fetch_array($result12);

		$data13="SELECT sfee_paid_uptomonth FROM transfer_certificate WHERE UID='$username'";
		$result13=mysql_query($data13);
		$sfee_paid_uptomonth=mysql_fetch_array($result13);

		$data14="SELECT date_of_application FROM transfer_certificate WHERE UID='$username'";
		$result14=mysql_query($data14);
		$date_of_application=mysql_fetch_array($result14);

		$data15="SELECT date_of_issue FROM transfer_certificate WHERE UID='$username'";
		$result15=mysql_query($data15);
		$date_of_issue=mysql_fetch_array($result15);

		$data16="SELECT reason_for_leaving FROM transfer_certificate WHERE UID='$username'";
		$result16=mysql_query($data16);
		$reason_for_leaving=mysql_fetch_array($result16);
		
?>
<html>
	<head>
		<title>Transfer Certificate</title>
	</head>
	<body>
				<table border="0" align="center">
				<tr>
					<th height="50" colspan="2">Transfer Certificate</th>
				</tr>
				<tr>
					<td height="50"><label>User ID:</label></td>
					<td height="50"><?php echo $username; ?></td>
				</tr>
				<tr>
					<td height="50"><label>CBSE Affiliation No:</label></td>
					<td height="50"><?php echo $cbse_ano['cbse_ano']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>School Code No:</label></td>
					<td height="50"><?php echo $scode['scode']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Sl No:</label></td>
					<td height="50"><?php echo $sl_no['sl_no']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Admission No:</label></td>
					<td height="50"><?php echo $adm_no['adm_no']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Name of Pupil:</label></td>
					<td height="50"><?php echo $sname['sname']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Father's Name:</label></td>
					<td height="50"><?php echo $fname['fname']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Mother's Name:</label></td>
					<td height="50"><?php echo $mname['mname']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Date of birth according to Admission Register:</label></td>
					<td height="50"><?php echo $dob_sreg['dob_sreg']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Caste</label></td>
					<td height="50"><?php echo $caste['caste']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Date of first admission in the school with class:</label></td>
					<td height="50"><?php echo $first_doj_class['first_doj_class']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Class in which the pupil last studied/studying:</label></td>
					<td height="50"><?php echo $last_studied_class['last_studied_class']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Whether qualifies for promotion to the higher class:</label></td>
					<td height="50"><?php echo $result['result']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Month upto which school fee paid:</label></td>
					<td height="50"><?php echo $sfee_paid_uptomonth['sfee_paid_uptomonth']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Date of application for certificate:</label></td>
					<td height="50"><?php echo $date_of_application['date_of_application']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Date of issue of certificate:</label></td>
					<td height="50"><?php echo $date_of_issue['date_of_issue']; ?></td>
				</tr>
				<tr>
					<td height="50"><label>Reason for leaving school:</label></td>
					<td height="50"><?php echo $reason_for_leaving['reason_for_leaving']; ?></td>
				</tr>
				<tr>
					<td height="50" colspan="2" align="center"><a href="tclogout.php"><input type="button" name="Submit" value="Print"/></a></td>
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
		<title>Transfer Certificate</title>
	</head>
	<center>
	<body>
	
	<form name="logout" action="logout.php" method="POST">
<p align="right"> <input type="submit" name="logout" value="logout"></p>
</form>
        <form name="transfer_cer" method="post" action="transfer.php">
		<table><caption><h2>Transfer Certifficate</h2></caption>
	<tr>
		<td colspan='2'>CBSE Affiliation No.<span class="alert"><font color=red>*</font></span></td><td><input type='text' required name='Cbseano' id='num' value=''/></td>
		<td colspan='2'>School Code No.<span class="alert"><font color=red>*</font></span></td><td><input type='text' required name='Scode' id='num2' value=''/></td>
	</tr>
	<tr>
		<td colspan='2'>Sl No.<span class="alert"><font color=red>*</font></span></td><td><input type='text' required name='Slno' id='num2' value=''/></td> 
		<td colspan='2'>Admission No.<span class="alert"><font color=red>*</font></span></td><td><input type='text' required name='Ano' id='num3' value=''/></td>
	</tr>
	</table>
	<table><tr>
		<td colspan='2'>1.Name of Pupil:<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><input type='text' required name='Sname' id='sname' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>2.Mother's Name:<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><input type='text' required name='Mname' id='mname' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>3.Father's Name/Guardian Name:<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><input type='text' required name='Fname' id='fname' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>4.Nationality:<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><input type='text' required id='nationality' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>5.Caste:<span class="alert"><font color=red>*</font></span><td>
		<td colspan='2'><input type='text' required name='Caste' id='caste' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>6.Date of first admission in the school with class:<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><input type='text' required name='Doa' id='doa' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>7.Date of birth according to Admission Register(in figures)<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><input type='text' required name='Dob' id='dob' value='' size='50'/></td></tr><tr>
		<td colspan='2'>(in words)</td>
		<td colspan='2'><input type='text' required id='dob' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>8.Class in which the pupil last studied/studying(in figures)<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><input type='text' required name='Class' id='class' value='' size='50'/></td></tr><tr>
		<td colspan='2'>(in words)</td>
		<td colspan='2'><input type='text' required name='Class' id='class' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>9.School/Board's Annual Examination last taken with result<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><select><option value='Pass' selected>Pass</option><option value='fail'>Fail</option></select></td>
	</tr>
	<tr>
		<td colspan='2'>10.Subjects studied:</td>
		<td colspan='2'><input type='text' required id='subjects' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>11.Whether qualifies for promotion to the higher class</td>
		<td colspan='2'><select name='Result'><option value='yes' selected>Yes</option><option value='no'>No</option></select></td></tr><tr>
		<td colspan='2'>If so,to which class (in figures)</td><td colspan='2'><input type='text' required id='promotion' value='' size='50'/></td></tr><tr>
		<td colspan='2'>(in words)</td><td colspan='2'><input type='text' required id='promotion' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>12.Month upto which school fee paid<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><input type='text' required name='Fee' id='month' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>13.Total number of working days</td>
		<td colspan='2'><input type='text' required id='number' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>14.Total number of working days present</td>
		<td colspan='2'><input type='text' required id='number1' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>15.Whether NCC Cadet/Boy Scout/Girl Guide</td>
		<td colspan='2'><input type='text' required id='ncc' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>16.Games played or the extra-curricular activities in which<br>the pupil usually took part(mention achievement level therein)</td>
		<td colspan='2'><textarea rows='2' cols='52' required id='achievements' value='' ></textarea></td>
	</tr>
	<tr>
		<td colspan='2'>17.General Conduct</td>
		<td colspan='2'><input type='text' required id='conduct' value='' size='50'/></text area></td>
	</tr>
	<tr>
		<td colspan='2'>18.Date of application for certificate<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><input type='text' required name='Doac' id='doc' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>19.Date of issue of certificate<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><input type='text' required name='Doic' id='doic' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>20.Reason for leaving school<span class="alert"><font color=red>*</font></span></td>
		<td colspan='2'><input type='text' required name='Reason' id='reason' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>21.Student's Insurance Premium paid upto</td>
		<td colspan='2'><input type='text' required id='insurance' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'>22.Any other remarks</td>
		<td colspan='2'><input type='text' required id='remark' value='' size='50'/></td>
	</tr>
	<tr>
		<td colspan='2'><button name='submit' value='Submit'>Submit</button></td>
		<td colspan='2'><button name='reset' value='Reset'>Reset</button></td>
	</tr>
	</table>
	</form>
	</body>
</html>
<?php
	}
?>
