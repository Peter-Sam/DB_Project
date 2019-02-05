 <?php
 $MemberID = filter_input(INPUT_POST, 'MemberID');
 $Email = filter_input(INPUT_POST, 'Email');
 $FirstName = filter_input(INPUT_POST, 'FirstName');
 $LastName = filter_input(INPUT_POST, 'LastName');

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
  $sql = "DELETE FROM PCmember WHERE Email = ('$Email')";
  if ($conn->query($sql) === TRUE)
  {
    echo "Record Deleted";
  }
}





 ?>