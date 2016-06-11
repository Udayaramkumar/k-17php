<html>
<head>
</head>


<?php

	
	// Connecting to Data Base


$mysqlport = getenv('S2G_MYSQL_PORT');

$dbhost = "localhost:".$mysqlport;


$dbuser = 'root';
$dbpass = '';



$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to mysql');



$dbname = 'entries';


mysql_select_db($dbname);



  		



$query="select * from DETAILS ";


$result=mysql_query($query,$conn);	

	


if (!mysql_query($query,$conn))

  	{
	  
die('Error: ' . mysql_error());

  	}
echo "<center>";	

echo "<table border='2'>

<tr>
	<th>First name</th>
	<th>Last name</th>
	<th>D.O.B</th>
	<th>Age</th>
	<th>Gender</th>
	<th>Mail Id</th>
	<th>Mobile</th>
	<th>State</th>
	<th>City</th>
	
</tr>";

while($row= mysql_fetch_array($result)) 
{
echo "<tr>";
 echo "<td>" . $row['F_name']; "</td>";
 echo "<td>" . $row['L_name'];"</td>";
 echo "<td>" .$row['date'];"</td>";
echo "<td>" . $row['Age'];"</td>";
 echo "<td>" . $row['Gender'];"</td>";
echo "<td>" . $row['mail_id'];"</td>";
 echo "<td>" .  $row['mobile'];"</td>";
echo "<td>" . $row['State'];"</td>";
 echo "<td>" .  $row['City'];"</td>";
 

echo "</tr>";

} 
echo "</table>";






echo "</center>";



?>
<br>

<center>
<div>
<form name=disp.php >

</form>


</div>
</center>



<body>
</body>
</html>
