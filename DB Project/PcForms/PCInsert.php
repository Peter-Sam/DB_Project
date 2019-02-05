 <?php
 $Email = filter_input(INPUT_POST, 'Email');
 $FirstName = filter_input(INPUT_POST, 'FirstName');
 $LastName = filter_input(INPUT_POST, 'LastName');

$host = "localhost";
$dbusername = "john";
$dbpassword = "pass1234";
$dbname = "sampledb";

 
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}
else{ 
  $sql = "INSERT INTO PCmember(Email, FirstName, LastName) 
  values ('$Email','$FirstName', '$LastName')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ." ". $conn->error;
  }
  $conn->close();
}


 ?>