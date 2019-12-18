<?php 
	//連接資料庫
	function create_connection()
	{
		$link = mysqli_connect("localhost", "yuri", "123456") or die("建立連線失敗".mysqli_connect_error());
		//解決亂碼UTF-8
		mysqli_query($link,"SET NAMES UTF8");
		return $link;
	}
	//execute(執行)
	function execute_sql($link,$dbname,$sql){
		mysqli_select_db($link, $dbname) or die("連接資料庫失敗".mysqli_connect_error());

		$result = mysqli_query($link, $sql);
		return $result;
	}
 ?>

