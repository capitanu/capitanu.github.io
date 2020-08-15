<?php

$dbname='Bandlink';
$dbuser = 'bandlink';
$dbpass = 'Calin123!';
$dbhost = 'localhost';

$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($con, $dbname) or die("Could not open the db '$dbname'");


		       $Title = $_POST['Title'];
		       $Author = $_POST['Author'];
		       $LikesCount = $_POST['LikesCount'];
		       $Tags = $_POST['Tags'];
		       $Description = $_POST['Description'];
		       $Location = $_POST['Location'];
		       $Genre = $_POST['Genre'];
		       $Picture = $Author;


/*
		       $Title = "TEEEST";
		       $Author = "test";
		       $Description = "test";
		       $Location = "test";
		       $Picture = $Author;
		       $LikesCount = "21";
		       $Tags = "test";
		       $Genre ="test";
*/
		       

		       $image = $_POST['Picture'];
		       $decodedImage = base64_decode("$image");
		       	file_put_contents("/home/calin/capitanu.tech/pictures/" . $Title . ".JPG", $decodedImage);
		       
	
	echo $Title;

        $statement = mysqli_prepare($con, "INSERT INTO Post (Title, Author, LikesCount, Tags, Description,Picture, ProfilePicture, Location, Genre) VALUES (?,?,?,?,?,?,?,?,?)");
	if(!$statement){
	echo "ERROR";
	die(mysqli_error($con));
}
	$likes = (int)$LikesCount;
	echo $likes;
        mysqli_stmt_bind_param($statement, "ssissssss", $Title, $Author, $likes, $Tags, $Description,$Picture, $Picture,$Location, $Genre);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);

        mysqli_close($con);
?>
