<?php

$dbname='Bandlink';
$dbuser = 'bandlink';
$dbpass = 'Calin123!';
$dbhost = 'localhost';

$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($con, $dbname) or die("Could not open the db '$dbname'");

$post_id = $_POST['post_id'];
$user = $_POST['user'];

$save_user = $user;
$save_post_id = $post_id;

        $statement = mysqli_prepare($con, "SELECT * FROM Post_Like WHERE user = ? AND post_id = ?");
	mysqli_stmt_bind_param($statement, "ss", $user, $post_id);
	mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);
	mysqli_stmt_bind_result($statement, $user, $post_id);

	$result = array();
	$result['post_id'] = "NOT_FOUND";
	$result['user'] = "NOT_FOUND";

while(mysqli_stmt_fetch($statement)){
$result['post_id'] = $post_id;
$result['user'] = $user;
}

if(strcmp($result['post_id'],"NOT_FOUND") == 0 && strcmp($result['user'],"NOT_FOUND") == 0){
$statement1 = mysqli_prepare($con, "INSERT INTO Post_Like (user, post_id) VALUES (?, ?)");
mysqli_stmt_bind_param($statement1, "ss", $save_user, $save_post_id);
mysqli_stmt_execute($statement1);
mysqli_stmt_close($statement1);
}

echo json_encode($result);
mysqli_stmt_close($statement);
mysqli_close($con);

?>
