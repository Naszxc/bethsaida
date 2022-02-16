<?php

	require 'connect.php';

	$data = $_POST['postdate'];
	$data1 = $_POST['posttime'];
	$format = date('Y-m-d',strtotime($data));
	$format1 = date('h:i:s',strtotime($data1));


	$conn->query("insert into schedule(sc_id,date,time,bs_id) VALUES(NULL,'$format','$format1',NULL);");
?>