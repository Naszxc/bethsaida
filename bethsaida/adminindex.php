<?php
	require 'connect.php';
	//session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>BETHSAIDA</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="VideoCall/styles.css">
	<script src="https://unpkg.com/peerjs@1.3.1/dist/peerjs.min.js"></script>
	<script src="VideoCall/script.js"></script>

	<style>
		*{
			padding: 0;
			margin: 0;
		}

		body{
			position: absolute;
			width: 100%;
			height: 100%;
		}
		
		/* For Navigational Dashboard */

		.nav-bar{
			height: 100%;
			width: 20%;
			position: relative;
			float: left;
			background-color: whitesmoke;
		}

				.nav-bar .nav-head{
					height: 10%;
					width: 100%;
					background-color: rgba(145, 199, 223, 0.8);
					display: flex;
					justify-content: center;
					align-items: center;
				}


				.nav-bar ul li{
					margin-left: 20px;
					margin-top: 10px;
					cursor: pointer;
					text-decoration: none;
					display: inline-block;
					width: 100%;
				}



		/* For Panel */

		.appointment-panel{
			height: 100%;
			width: 80%;
			position: relative;
			float: right;
			background-color: gray;
			display: flex;
			align-items: center;
			justify-content: center;
		}

				.appointment-table{
					height: 95%;
					width: 95%;
					background-color: pink;
				}

					.appointment-table .appointment-header{
						height: 10%;
						width: 100%;
						background-color: rgba(130, 214, 253, 0.8);
					}

					.appointment-table .table-container{
						height: 90%;
						width: 100%;
						background-color: rgba(222, 243, 253, 0.8);
					}

					.appointment-table table{
						height: 100%;
						width: 100%;
						
					}

					.appointment-table table thead{
						background-color: rgba(145, 199, 223, 0.8);
					}

		.account-panel{
			height: 100%;
			width: 80%;
			position: relative;
			float: right;
			background-color: whitesmoke;
		}

		.add-schedules-panel{
			height: 100%;
			width: 80%;
			position: relative;
			float: right;
			background-color: whitesmoke;
		}

		.video-call-panel{
			height: 100%;
			width: 80%;
			position: relative;
			float: right;
			background-color: gray;
		}

		.chat-panel{
			height: 100%;
			width: 80%;
			position: relative;
			float: right;
			background-color: whitesmoke;
		}

	</style>

	<script>
		//ITO YUNG JQUERY
		//ITO YUNG NAG PAPALIT-PALIT NG PAGE
		$(document).ready(function(){
			$(".add-schedules-panel").hide();
			$(".account-panel").hide();
			$(".video-call-panel").hide();
			$(".chat-panel").hide();
			$(".appointment-panel").show();
			
			$(".accounts-li").click(function(){
				$(".add-schedules-panel").hide();
				$(".appointment-panel").hide();
				$(".video-call-panel").hide();
				$(".chat-panel").hide();
				$(".account-panel").show();
			});

			$(".appointment-li").click(function(){
				$(".add-schedules-panel").hide();
				$(".account-panel").hide();
				$(".video-call-panel").hide();
				$(".chat-panel").hide();
				$(".appointment-panel").show();
			});

			$(".add-schedules-li").click(function(){
				$(".appointment-panel").hide();
				$(".account-panel").hide();
				$(".video-call-panel").hide();
				$(".chat-panel").hide();
				$(".add-schedules-panel").show();
			});

			$(".chat-li").click(function(){
				$(".appointment-panel").hide();
				$(".account-panel").hide();
				$(".video-call-panel").hide();
				$(".add-schedules-panel").hide();
				$(".chat-panel").show();
			});
		});
	</script>

</head>
<body>



<!----------DITO YUNG NAVIGATIONAL DASHBOARD--------->
<!------ ITO YUNG KINO-KONTROL NUNG JQUERY YUNG NASA TAAS-------->
<section class="nav-bar">
	<div class="nav-head"><label>Bethsaida Admin</label></div>

		<ul>
			<li class="appointment-li">Appointments
				<ul>
					<li><a style="color: black; text-decoration: none;" href="adminindex.php?change=appointment">Schedule</a></li>
					<li><a style="color: black; text-decoration: none;" href="adminindex.php?change=payment">Payment</a></li>
				</ul>
			</li>
			<li class="add-schedules-li">Add Schedules</li>
			<li class="accounts-li">Accounts</li>
			<li class="chat-li">Messages</li>
		</ul>
</section>
<!-- -------AYAN HANGGANG DYAN------- -->






<section class="appointment-panel">


		<div class="appointment-table">
			<div class="appointment-header">
				
				This is label: <label>data</label>
				This is label: <label>data</label>

				<a href="adminindex.php?change=today" style="color: white;"><button>Today</button></a>
				<a href="adminindex.php?change=appointment" style="color: white;"><button>All</button></a>
				<a href="adminindex.php?change=done" style="color: white;"><button>Done Appointments</button></a>
			</div>

			<div class="table-container">
				

				<?php 
					 $table = "appointment";
					 if(isset($_GET['change'])){ $table = $_GET['change']; }


									switch ($table) {
										  case 'payment': 
										  
											include "adminpanels/appointment/ApptPayment.php";
										
										  break;

										//HANGGANG DITO LANG YUNG PAYMENT TABLE

										  case 'appointment': 

										    include "adminpanels/appointment/ApptList.php";

										  break;

										  //HANGGANG DITO LANG YUNG APPOINTMENT TABLE

										  case 'today': 
											
											include "adminpanels/appointment/TodayApptList.php";

										  break;


										//HANGGANG DITO LANG YUNG APPOINTMENT TABLE

										 case 'done': 

											include "adminpanels/appointment/DoneApptList.php";	

										   break;
	
										  default:
											
											include "adminpanels/appointment/ApptDetails.php";

									      break;
										} ?>
			</div>
		</div>
</section>







<!-- -----------------ITO YUNG PAGE NG PAG A-ADD NG APPOINTMENT NI ADMIN----------------- -->
<section class="add-schedules-panel">
	<?php include 'adminpanels/addschedulepanel.php'; ?>
</section>
<!-- ---------------------HANGGANG DITO LANG YUNG PARA SA PAG A-ADD NG APPOINTMENT------------------- -->








 <!-- ----------------ITO YUNG PAGE NG PARA SA MGA ACCOUNT-------------------------- -->

<section class="account-panel">

	<?php include 'adminpanels/adminaccount.php'; ?>

</section>
<!-- -----------------HANGGANG DITO YUNG SA PAGE NG TUNGKOL SA MGA ACCOUNT ACCOUNT-------------------- -->


<section class="chat-panel">
	
	<?php include 'chat/UsersList.php'; ?>

</section>

</body>
</html>