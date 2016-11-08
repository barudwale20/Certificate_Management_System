<?php 

define('DB_HOST', 'localhost');
define('DB_NAME', 'certificate_mgt'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


session_start();
 
if(isset($_POST['submit'])) 
{
	
$uid=$_SESSION['uname'];
$type=$_POST['type'];
$quali=$_POST['quali'];
$imark1=$_POST['mark1'];
$imark2=$_POST['mark2'];
$bg=$_POST['blood'];
$RTO=$_POST['rtono'];
$rel=$_POST['sonwi'];

$query = "INSERT INTO LISCENCE (UID,TYPE,QUALIF,MARK1,MARK2,BLOODG,RTONO,SONWI) VALUES ('$uid','$type','$quali','$imark1','$imark2','$bg','$RTO','$rel')"; 
$data = mysql_query ($query)or die(mysql_error());

if($data) 
{
 echo "YOUR REGISTRATION IS COMPLETED...";
 header("location:LiscGenerate.php");
 } 
 } 
 
 ?>