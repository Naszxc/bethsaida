<?php
	require 'connect.php';

	$data = $_POST['postdate'];
	$data1 = $_POST['posttime'];
	$data2 = $_POST['postuser_id'];
	$format = date('Y-m-d',strtotime($data));
	$format1 = date('H:i:s',strtotime($data1));

	$conn->query("update schedule set date = '$format', time = '$format1' where bs_id = $data2;");

?>