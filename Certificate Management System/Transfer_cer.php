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
