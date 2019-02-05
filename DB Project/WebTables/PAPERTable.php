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

$sql = "SELECT * FROM PAPER";
$myData = mysql_query($sql, $con);
echo "<table border =1>
<tr>
<th>paperid</th>
<th>title</th>
<th>abstract</th>
<th>pdf</th>
</tr>";

while ($record = mysql_fetch_array($myData)){
	echo "<tr>";
	echo "<td>" . $record['paperid'] . "</td>";
	echo "<td>" . $record['title'] . "</td>";
	echo "<td>" . $record['abstract'] . "</td>";
	echo "<td>" . $record['pdf'] . "</td>";
	echo "</tr>";
}
echo "</table>";

mysql_close ($con);

?>

</body>
</html>