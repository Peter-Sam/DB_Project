 <?php
 $ReportID = filter_input(INPUT_POST, 'ReportID'); 
 $Sdate = filter_input(INPUT_POST, 'Sdate');
 $cmnt = filter_input(INPUT_POST, 'cmnt');
 $Recommendation = filter_input(INPUT_POST, 'Recommendation');
 $paperid = filter_input(INPUT_POST, 'paperid'); 
 $Email = filter_input(INPUT_POST, 'Email'); 


$host = "localhost";
$dbusername = "john";
$dbpassword = "pass1234";
$dbname = "sampledb";
//id = 0;
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error())
{
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}

{
  $sql = "DELETE FROM ReviewFile WHERE ReportID = ('$ReportID')";
  if ($conn->query($sql) === TRUE)
  {
    echo "Record Deleted";
  }
}

 ?>