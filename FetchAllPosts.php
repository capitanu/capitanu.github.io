<?php

$dbname='Bandlink';
$dbuser = 'bandlink';
$dbpass = 'Calin123!';
$dbhost = 'localhost';

$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($con, $dbname) or die("Could not open the db '$dbname'");

$sql = "SELECT * FROM Post";

$result = mysqli_query($con, $sql);

$data = array();
if (mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_assoc($result)){
   	      $data[] = $row;
	      }
}
echo json_encode($data);
mysqli_close($con);

?>
