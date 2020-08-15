<?php

$dbname='Bandlink';
$dbuser = 'bandlink';
$dbpass = 'Calin123!';
$dbhost = 'localhost';

$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($con, $dbname) or die("Could not open the db '$dbname'");


	       $author = $_POST['author'];
	       $comment = $_POST['comment'];
	       $picture = $author;
	       $post_idS = $_POST['post_id'];
	       $post_id = (int)$post_idS;
	       
        $statement = mysqli_prepare($con, "INSERT INTO Comment (Author, Text, ProfilePicture, post_id) VALUES (?, ?, ?,?)");
	if(!$statement){
	echo "ERROR";
	die(mysqli_error($con));
}
        mysqli_stmt_bind_param($statement, "sssi", $author, $comment , $picture, $post_id);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);

        mysqli_close($con);
?>





