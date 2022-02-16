<?php
	require 'connect.php';

	$user_id = $_POST['postuserid'];

	$conn->query("update schedule set call_id = 111 where sc_id = $user_id;");

?>