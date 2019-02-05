
 <?php
 $Sdate = filter_input(INPUT_POST, 'Sdate');
 $cmnt = filter_input(INPUT_POST, 'cmnt');
 $Recommendation = filter_input(INPUT_POST, 'Recommendation');
 $paperid = filter_input(INPUT_POST, 'paperid'); 
 $Email = filter_input(INPUT_POST, 'Email'); 



$host = "localhost";
$dbusername = "john";
$dbpassword = "pass1234";
$dbname = "sampledb";

 
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error())
{
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}
else
{ 
  $sql = "INSERT INTO ReviewFile (Sdate, cmnt, Recommendation, paperid, Email)
  VALUES ('$Sdate','$cmnt','$Recommendation','$paperid','$Email')";
  if ($conn->query($sql) === TRUE){
    echo "New record is inserted sucessfully. The new ReportID is : " .$conn-> insert_id;
  }
  else{
    echo "Error: ". $sql ." ". $conn->error;
  }
  
  $conn->close();
}


 ?>