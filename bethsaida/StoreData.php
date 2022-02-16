<?php
	require 'connect.php';
	session_start();

	$ques1 = $_SESSION['ques1'];
	$ques2 = $_SESSION['ques2'];
	$ques3 = $_SESSION['ques3'];
	$ques4 = $_SESSION['ques4'];
	$ques5 = $_SESSION['ques5'];

	$data = $_POST['postname'];
	$data1 = $_POST['postemail'];
	$data2 = $_POST['postphone'];
	$data3 = $_POST['postammount'];
	$data5 = $_SESSION['scdate'];
	$data6 = $_SESSION['sctime'];
	$appt = $_SESSION['appt'];
	$data9 = $_SESSION['name'];
	$data10 = $_SESSION['email'];
	$data11 = $_SESSION['phonenum'];

	$format = date('Y-m-d',strtotime($data5));
	$format1 = date('H:i:s',strtotime($data6));
	$data7 = $_SESSION['user_id'];
	$data8 = NULL;

	echo $data7;

	$conn->query("insert into schedule (sc_id,date,time,appt_type,bs_id,full_name,email,phonenum,call_id) values(NULL,'$format','$format1','$appt',$data7,'$data9','$data10',$data11,0);");

	$result = $conn->query("select sc_id from schedule where bs_id = $data7;");
	$row = $result->fetch_array();

	if($row){
		$data8 = $row['sc_id'];
	}

	$conn->query("INSERT INTO payment (p_id,bs_id,sc_id,p_amount,p_email,p_name,p_connum) VALUES (NULL,'$data7','$data8','$data3','$data1','$data','$data2');");


	$conn->query("insert into patient_info (pi_id,question_1,question_2,question_3,question_4,question_5,bs_id,sc_id) values(NULL,'$ques1','$ques2','$ques3','$ques4','$ques5',$data7,$data8);");

?>

