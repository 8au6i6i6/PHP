<?php
	header("Access-Control-Allow-Origin:*");
	$Username = $_POST['username'];
	$Password = $_POST['password'];

	require_once("../dbtools.inc.php");
	$link = create_connection();

	$sql = "UPDATE members SET Password = '$Password' WHERE Account = '$Username' ";

	if(execute_sql($link, "demoDB", $sql)){
		echo "修改密碼成功";
	}else{
		echo "修改密碼失敗";
	}

?>