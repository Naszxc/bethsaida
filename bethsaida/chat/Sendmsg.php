<?php
	require '../connect.php';

	$msg = $_POST['postmsg'];
	$OutgoingId = $_POST['postoutgoing'];
	$IncomingId = $_POST['postincoming'];
	$datetime = date('Y-m-d H:i:s',strtotime('now'));

	$conn->query("insert into chats (msg_id,incoming_msg_id,outgoing_msg_id,msg,datetime) values(NULL,$IncomingId,$OutgoingId,'$msg','$datetime');");
	
?>