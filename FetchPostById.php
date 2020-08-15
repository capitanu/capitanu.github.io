<?php

$dbname='Bandlink';
$dbuser = 'bandlink';
$dbpass = 'Calin123!';
$dbhost = 'localhost';

$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($con, $dbname) or die("Could not open the db '$dbname'");

		       $post_id = $_POST['post_id'];
		       

		       $statement = mysqli_prepare($con, "SELECT * FROM Post WHERE post_id = ?");
		       mysqli_stmt_bind_param($statement, "i", $post_id );
		       mysqli_stmt_execute($statement);
		       mysqli_stmt_store_result($statement);
		       mysqli_stmt_bind_result($statement, $post_id);

		       $post = array();
		       while(mysqli_stmt_fetch($statement)){
		       		       $post[] = mysqli_fetch_row($statement);
}


	echo json_encode($post);	
	mysqli_close($con);

?>
