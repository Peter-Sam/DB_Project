<html>
<head>
</head>
<body>
<?php
$con = mysql_connect("localhost", "john", "pass1234");
if (!$con)
{
	die("can't connect:" . mysql_error());
}
mysql_select_db("sampledb", $con);

$sql = "SELECT * FROM PCmember";
$myData = mysql_query($sql, $con);
echo "<table border =1>
<tr>
<th>email</th>
<th>name</th>
</tr>";

while ($record = mysql_fetch_array($myData)){
	echo "<tr>";
	echo "<td>" . $record['Email'] . "</td>";
	echo "<td>" . $record['Name'] . "</td>";
	
	
	echo "</tr>";
}
echo "</table>";

mysql_close ($con);

?>

</body>
</html>