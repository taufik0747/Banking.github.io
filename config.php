<?php

	$conn = mysqli_connect("localhost","root"); 
	mysqli_select_db($conn,"sparks_bank.sql");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>