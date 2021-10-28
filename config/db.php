<?php
$DB_HOST = 'sql6.freesqldatabase.com';
$DB_USER =  'sql6447158';
$DB_PASS = 'cwhJPsXdUp';
$DB_NAME = 'sql6447158'
	// Create Connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
	}