<?php
session_start();
$u = $_SESSION['uname'];
	
$server = "localhost";
$username = "root";
$password = "";
//$conn=mysql_connect("localhost","root","");
	//$db=mysql_select_db("certificate_mgt",$conn);
$conn = mysqli_connect($server, $username, $password) or die("server is not connecting");
$sql = mysqli_select_db($conn, 'certificate_mgt') or die("database is not connecting");

$sql = "INSERT INTO pan_id_sample VALUES('$u','{$_POST['last_name']}','{$_POST['first_name']}','{$_POST['middle_name']}','{$_POST['abbreviation']}','{$_POST['date']}',
                                         '{$_POST['month']}','{$_POST['year']}','{$_POST['last_name1']}','{$_POST['first_name1']}','{$_POST['middle_name1']}',
										 '{$_POST['flat']}','{$_POST['name_of_premises']}','{$_POST['road']}','{$_POST['area']}','{$_POST['town']}','{$_POST['state']}',
										 '{$_POST['flat1']}','{$_POST['name_of_premises1']}','{$_POST['road1']}','{$_POST['area1']}','{$_POST['town1']}','{$_POST['state1']}'
										 ,'{$_POST['country_code']}','{$_POST['area_code']}','{$_POST['telephone']}','{$_POST['email_id']}','{$_POST['registration_no']}','{$_POST['adhaar_card_no']}'
										 ,'{$_POST['last_name2']}','{$_POST['first_name2']}','{$_POST['middle_name2']}','{$_POST['flat3']}','{$_POST['name_of_premises3']}'
										 ,'{$_POST['road3']}','{$_POST['area3']}','{$_POST['city3']}');";



if($conn->query($sql) === TRUE)
{
	//echo "new record created successfully";
	echo "<script>window.location='pangenerate.php'</script>";
	
	

}
else
{
	echo "error";
}

?>






