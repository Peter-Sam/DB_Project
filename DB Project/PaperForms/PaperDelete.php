 <?php
 $title = filter_input(INPUT_POST, 'title');
 $abstract = filter_input(INPUT_POST, 'abstract');
 $pdf = filter_input(INPUT_POST, 'pdf');
 $paperid = filter_input(INPUT_POST, 'paperid');

$host = "localhost";
$dbusername = "john";
$dbpassword = "pass1234";
$dbname = "sampledb";
//id = 0;
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}



{
  $sql = "DELETE FROM PAPER WHERE paperid = ('$paperid')";
  if ($conn->query($sql) === TRUE)
  {
    echo "Record Deleted";
  }
}





 ?>