<?php
	session_start();

	$_SESSION['user_id'] = $_POST['postuser_id'];
	$_SESSION['scdate'] = $_POST['postdate'];
	$_SESSION['sctime'] = $_POST['posttime'];
	$_SESSION['appt'] = $_POST['postappt'];
	$_SESSION['name'] = $_POST['postname'];
	$_SESSION['email'] = $_POST['postemail'];
	$_SESSION['phonenum'] = $_POST['postphonenum'];

?>