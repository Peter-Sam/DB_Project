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
//$id = 0;
 
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}

 {   
    $update_Query = "UPDATE ReviewFile SET Sdate=('$Sdate'),cmnt=('$cmnt'),Recommendation=('$Recommendation') WHERE ReportID = ('$ReportID') AND paperid =('$paperid') AND Email =('$Email')";
   
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