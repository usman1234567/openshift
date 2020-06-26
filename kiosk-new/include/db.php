<?php
	//$con = mysqli_connect('localhost','db_reproto','db_reproto','db_reproto');
	$con = new mysqli("localhost","vvmdbx","N3tp@ss1122#","kiosk");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>


