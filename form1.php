
<html>
<head><title></title></head>
<body>
<form name="form1" id="form1"  method=post>
<input name="act" value="Back" type="submit" >


<?php
	$fname = $lname = $age = $gen = $mail = $nmum = $state = $city ="";?>
	<?php
	// Connecting to Data Base
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;

$dbuser = 'root';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to mysql');

$dbname = 'entries';
mysql_select_db($dbname);


  	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$age=$_POST["age"];
	$gen=$_POST["gen"];
	$mail=$_POST["mailid"];
	$date=$_POST["date"]
	$mnum=$_POST["mnum"];
	$state=$_POST["state"];
	$city=$_POST["city"];


$sql_insert="INSERT INTO details('F_name','L_name','Age','Gender','mail_id','mobile','State','City','date')VALUES([$fname],[$lname],[$age],[$gen],[$mail],[$mnum],[$state],[$city],[$date])";


	
	if (!mysql_query($sql_insert,$conn))
  	{
	  die('Error: ' . mysql_error());
	  echo "EROOOOOOOORRR";
  	}
	else {
		echo "Updated sucessfully!!!";
	
	}

mysql_close($conn)

?>
</form>

<br><br><br><br>
<a href="disp.php">DISPLAY RECORDS</a>
</body>
</html>