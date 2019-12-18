<?php
	header("Access-Control-Allow-Origin:*");
	$Username = $_POST["username"];
	$Password = $_POST["password"];

	require_once("dbtools.inc.php");
	$link = create_connection();

	$sql = "SELECT * FROM members WHERE Account = '$Username' ";
	$result = execute_sql($link, "demoDB", $sql);

	if(mysqli_num_rows($result) > 0){
		echo "已有此帳號!";
	}else {
		$sql = "INSERT INTO members (Account, Password) Values('$Username', '$Password')";

		if(execute_sql($link, "demoDB", $sql)){
			echo "新增帳號成功";
		}else{
			echo "新增帳號失敗";
		}
	}

?>