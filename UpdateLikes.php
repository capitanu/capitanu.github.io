<?php

$dbname='Bandlink';
$dbuser = 'bandlink';
$dbpass = 'Calin123!';
$dbhost = 'localhost';

$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($con, $dbname) or die("Could not open the db '$dbname'");


$post_idS = $_POST['post_id'];
$likesS = $_POST['likes'];
$post_id = (int)$post_idS;
$likes = (int)$likesS;

$statement = mysqli_prepare($con, "UPDATE Post SET LikesCount = $likes WHERE post_id = $post_id");
	if(!$statement){
	echo "ERROR";
	die(mysqli_error($con));
}
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);

        mysqli_close($con);
?>
