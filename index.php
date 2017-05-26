<?php
	$DB = mysqli_connect('162.243.23.150','user','password','hellodb');
	if (mysqli_connect_errno()) {
		echo "Failed ". mysqli_connect_error();
	}

//	$query = "select *
//		from integers
//		where word = 'five'";

//	$result = $DB->query($query);
//	$result = $result->fetch_assoc();

	echo 'running';	

?>
