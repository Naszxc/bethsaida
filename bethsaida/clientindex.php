<?php
	require 'connect.php';
?>

<!DOCTYPE html>
<html style="height: 100%;">
<head>
	<title>BETHSAIDA </title>
	<link rel="stylesheet" href="css/clientindex.css"/>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!-- ChatOnce embed START -->
	<script id="co-index" src="https://cdn.oncehub.com/co/widget.js?website_id=WEB-FFE487D81C" defer></script>
	<!-- ChatOnce embed END -->

</head>



<body style="height: 8in;">
	<style>

		td{
			border-bottom: 1px solid gray;
			border: none;
		}

		tbody tr:hover
		{
			background-color: rgba(133, 146, 158);
		}

		thead
		{
			background-color: #BBBDA6;
			border: none;
			height: 10%;
		}

		thead td{

		}

		table
		{
			background-color: rgba(133, 146, 158,.9);
			border: none;
		}



	</style>

						<?php
							$schedCheck = null;
							$user_id = null;

							if(isset($_GET['id'])){
								$user_id = $_GET['id'];
								$result = $conn->query("select * from schedule where bs_id = $user_id;");
								$row = $result->fetch_array();

								if($row){
									$schedCheck = 'true';
								}
								else{
									$schedCheck = 'false';
								}

							}




							switch ($schedCheck) {
								case 'true': 

									include 'clientpanels/BookedPanel.php';

								break;

								case 'false': 

									include 'clientpanels/PreBookedPanel.php';

								break;
								
								default:
									echo "invalid";
									break;
							}
						?>









				<script>
				
										var unavailableDates = ["9-1-2022","14-1-2022","15-1-2022","20-1-2022","21-1-2022"];

										function unavailable(date) {
										  dmy = date.getDate() + "-" + (date.getMonth()+1) + "-" + date.getFullYear();
										  if ($.inArray(dmy, unavailableDates) == -1) {
											return [true];
										  } else {
											return [false];
										  }
										}

										$("#datepicker").datepicker({
											beforeShowDay: unavailable,
											dateFormat: 'Md,yy',
                                            onSelect: function() {
                                         
												window.history.pushState({id: 100}, '' , "clientindex.php?id=<?= $user_id; ?>&date=" + this.value)

												$("#timepicker").load(" #timepicker > *")
                                            }
										});

										function submitClicked(){
											var url_string = window.location;
											var url = new URL(url_string);
											var time = url.searchParams.get("time");
											var date = url.searchParams.get("date");
											var user_id = url.searchParams.get("id");
											var appt = document.getElementById('appointment').value;
											var fullname = document.getElementById('fullname').value;
											var email = document.getElementById('email').value;
											var phonenum = document.getElementById('phonenum').value;

											$.post('StoreAppt.php', { postdate: date, posttime: time, postuser_id: user_id, postappt: appt, postname: fullname, postemail: email, postphonenum: phonenum },
												function(data){
													console.log("success")
													window.location.href="Form.php"
												}
											)
										}

							
									</script>





				<script>
					

										var unavailableDates = ["9-1-2022","14-1-2022","15-1-2022","20-1-2022","21-1-2022"];

										function unavailable(date) {
										  dmy = date.getDate() + "-" + (date.getMonth()+1) + "-" + date.getFullYear();
										  if ($.inArray(dmy, unavailableDates) == -1) {
											return [true];
										  } else {
											return [false];
										  }
										}

										$("#datepicker-booked").datepicker({
											beforeShowDay: unavailable,
											dateFormat: 'Md,yy',
                                            onSelect: function() {
                                           
                                                //window.location.href="clientindex.php?id=<?= $user_id; ?>&date=" + this.value;

												window.history.pushState({id: 100}, '', "clientindex.php?id=<?= $user_id; ?>&date=" + this.value)

												$("#timepicker-booked").load(" #timepicker-booked > *")
                                            }
										});

										function submit(){
											var url_string = window.location;
											var url = new URL(url_string);
											var time = url.searchParams.get("time");
											var date = url.searchParams.get("date");
											var user_id = url.searchParams.get("id");
											
											$.post('UpdateSched.php', { postdate: date, posttime: time, postuser_id: user_id},
												function(data){
													console.log("success")
													window.location.href="clientindex.php?id=" + user_id
												}
											)
										}
				</script>


				<script>
					function openVideoCall(){
						window.location.replace("VideoCall/index.html");
					}
				</script>

</body>
</html>