 <?php
 $paperid = filter_input(INPUT_POST, 'paperid');
 $title = filter_input(INPUT_POST, 'title');
 $abstract = filter_input(INPUT_POST, 'abstract');
 $pdf = filter_input(INPUT_POST, 'pdf');


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
    $update_Query = "UPDATE PAPER SET title=('$title'),abstract=('$abstract'),pdf=('$pdf') WHERE paperid = ('$paperid')";
   
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