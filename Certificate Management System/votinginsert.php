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
	
	

$wardn = $_POST['ward'];

$query = "INSERT INTO VOTING (UID,WARD) VALUES ('$uid','$wardn')"; 
$data = mysql_query ($query)or die(mysql_error());

if($data) 
{
 echo "YOUR REGISTRATION IS COMPLETED...";
 header("location:VotingGenerate.php");
 } 
 } 
 
 ?>