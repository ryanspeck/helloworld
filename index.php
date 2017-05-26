<?php
	$DB = mysqli_connect('localhost','user','password','hellodb')
		or die("Error " . mysqli_error($DB));
//	if (mysqli_connect_errno()) {
//		echo "Failed ". mysqli_connect_error();
//	}

//	$query = "select *
//		from integers
//		where word = 'five'";

//	$result = $DB->query($query);
//	$result = $result->fetch_assoc();

	echo 'running';	

?>
