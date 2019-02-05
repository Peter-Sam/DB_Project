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

$sql = "SELECT * FROM ReviewFile";
$myData = mysql_query($sql, $con);
echo "<table border =1>
<tr>
<th>ReportID</th>
<th>Sdate</th>
<th>cmnt</th>
<th>Recommendation</th>
<th>paperid</th>
<th>Email</th>
</tr>";

while ($record = mysql_fetch_array($myData)){
	echo "<tr>";
	echo "<td>" . $record['ReportID'] . "</td>";
	echo "<td>" . $record['Sdate'] . "</td>";
	echo "<td>" . $record['cmnt'] . "</td>";
	echo "<td>" . $record['Recommendation'] . "</td>";
	echo "<td>" . $record['paperid'] . "</td>";
	echo "<td>" . $record['Email'] . "</td>";
	echo "</tr>";
}
echo "</table>";

mysql_close ($con);

?>

</body>
</html>