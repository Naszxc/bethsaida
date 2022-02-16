<?php
	require "connect.php";

	$get = $_POST['postid'];
	$data = null;
	
	$result = $conn->query("select sc_id from schedule where bs_id = $get");
	$row = $result->fetch_array();

	if($row){
		$data = "yes";
		echo $data;
	}
	else{
		$data = "no";
		echo $data;
	}

?>