<?php

$dbname='Bandlink';
$dbuser = 'bandlink';
$dbpass = 'Calin123!';
$dbhost = 'localhost';

$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($con, $dbname) or die("Could not open the db '$dbname'");

		      // $username = $_POST['username'];
		       $username = "darthvader11";
		       

		       $statement = mysqli_prepare($con, "SELECT * FROM User WHERE username = ?");
		       mysqli_stmt_bind_param($statement, "s", $username);
		       mysqli_stmt_execute($statement);
		       mysqli_stmt_store_result($statement);
		       mysqli_stmt_bind_result($statement, $username, $email, $password, $Title, $ProfilePicture, $ProfileDescription, $Name, $Rating, $user_id);

echo $username;
echo $password;
		       $post = array();
		       while(mysqli_stmt_fetch($statement)){
		       		       $post[] = mysqli_fetch_row($statement);
}


	echo "test";
	echo json_encode($post);	
	mysqli_close($con);

?>
