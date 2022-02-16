<?php
	require 'connect.php';

	$data = $_POST['postdate'];
	$data1 = $_POST['posttime'];
	$data2 = $_POST['postid'];
	$format = date('Y-m-d',strtotime($data));
	$format1 = date('h:i:s',strtotime($data1));

	$array = array();

	$conn->query("insert into schedule(sc_id,date,time,bs_id) VALUES(NULL,'$format','$format1',$data2);");

?>