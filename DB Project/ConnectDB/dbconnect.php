
 <?php

 $user = 'john';
 $pass = 'pass1234';
 $db = 'sampledb';

$db = new mysqli ('localhost', $user, $pass, $db) or die("unable to connect");


?>
