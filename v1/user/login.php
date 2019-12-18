<?php
	header("Access-Control-Allow-Origin:*");
	$Username = $_POST['username'];
	$Password = $_POST['password'];

	require_once("dbtools.inc.php");
	$link = create_connection();

	$sql = "SELECT * FROM members WHERE Account = '$Username' and Password = '$Password' ";
	$result = execute_sql($link, "demoDB", $sql);

	if(mysqli_num_rows($result) > 0){
		echo "Login";
	}else {
		echo "Login Failed";
	}

?>