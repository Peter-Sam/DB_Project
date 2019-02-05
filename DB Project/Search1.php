 <?php

 $paperid = filter_input(INPUT_POST, 'paperid');
 $Email = filter_input(INPUT_POST, 'Email');
$fatouhi = 'noemail@live.com';
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
  $sql1 = "SELECT * FROM `sampledb`.`Author` WHERE `Email` = \'noemail5@hotmail.com\'";
  $sql2 = "SELECT * FROM `sampledb`.`PAPER` WHERE `paperid` = 6";
  echo "paperid: 6";
}





 ?>