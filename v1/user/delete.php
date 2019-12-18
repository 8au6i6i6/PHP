<?php
	header("Access-Control-Allow-Origin:*");
	$Username = $_POST['username'];

	require_once("dbtools.inc.php");
	$link = create_connection();

	$sql = "DELETE FROM members WHERE Account = '$Username' ";

	if(execute_sql($link, "demoDB", $sql)){
		echo "刪除帳號成功";
	}else{
		echo "刪除帳號失敗";
	}

?>

