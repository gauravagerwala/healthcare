<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "snap_pnr";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

	if($conn){
		echo "Server running succesfully..";
	}else{
		die "Server failed";
	}

	

?>