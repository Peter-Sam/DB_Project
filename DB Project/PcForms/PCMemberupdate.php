 <?php
  $Email = filter_input(INPUT_POST, 'Email');
 $FirstName = filter_input(INPUT_POST, 'FirstName');
 $LastName = filter_input(INPUT_POST, 'LastName');
 


$host = "localhost";
$dbusername = "john";
$dbpassword = "pass1234";
$dbname = "sampledb";
//$id = 0;
 
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}

 {   
    $update_Query = "UPDATE PCmember SET FirstName=('$FirstName'),LastName=('$LastName') WHERE Email = ('$Email')";
   
    try{
        $update_Result = mysqli_query($conn, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }


}
  $conn->close();



 ?>