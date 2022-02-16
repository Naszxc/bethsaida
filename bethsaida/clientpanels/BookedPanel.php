<div style="height: 100%; width: 100%; background-color: blue;"> <?php

									$result = $conn->query("select * from schedule where bs_id = $user_id;");
									if($row = $result->fetch_array()){ 
										$format_date = date('M-d-Y',strtotime($row['date']));
										$format_time = date('h:i a',strtotime($row['time']));
										$appt_type = $row['appt_type'];
									?>

								<div style="height: 10%; width: 50%;">
										<ul>
											<li>Date Booked</li>
											<li>Date: <?= $format_date; ?></li>
											<li>Time: <?= $format_time; ?></li>
											<li>Appointment: <?= $appt_type; ?></li>
											<!--
												if(/*$appt_type == 'Face-to-face Consultation' || $appt_type == 'Virtual Consultation'){ ?>
												<select id="appointment">
													<option value="Face-to-face Consultation">Face-to-face Consultation</option>
													<option value="Virtual Consultation">Virtual Consultation</option>
												</select> -->
											 <!-- } -->
										</ul>
								</div>
									<?php
									}
								?>

									
									</br></br>Reschedule </br>

									<div style="height: 60%; width: 50%;">
										<div id="datepicker-booked" name="datepicked">
									</div>

							

									<div style="height: 20%; width: 100%;">

										<div id="timepicker-booked" style="height: 15%; width: 70%; position: absolute;">
										<?php
										   if(isset($_GET['date'])){
												$date = date('Y-m-d',strtotime($_GET['date']));
												$date_list = array('08:00:00','10:00:00','12:00:00','14:00:00','16:00:00');
												$data = array();

												for($int = 0; $int < 5; $int++){
													$time = $date_list[$int];
													$result = $conn->query("select time from schedule where date = '$date' and time = '$time';");
               

													if($row = $result->fetch_array()){
														$data[$int] = false;
													}
													else{
														$data[$int] = true;
													}
  
												}


													if($data[0] == true){ ?>
														<div style="height: 25%; width: 7%; position: static; float: left;">
															<button style="height: 90%;" onclick="timeClicked('<?= $date; ?>','08:00:00')">8:00 am</button>
														</div>
												  <?php }

													if($data[1] == true){ ?>
														<div style="height: 25%; width: 7%; position: static; float: left;">
															<button style="height: 90%;" onclick="timeClicked('<?= $date; ?>','10:00:00')">10:00 am</button>
														</div>
												  <?php }

													if($data[2] == true){ ?>
														<div style="height: 25%; width: 7%; position: static; float: left;">
															<button style="height: 90%;" onclick="timeClicked('<?= $date; ?>','12:00:00')">12:00 pm</button>
														</div>
												  <?php }

												  if($data[3] == true){ ?>
														<div style="height: 25%; width: 7%; position: static; float: left;">
															<button style="height: 90%;" onclick="timeClicked('<?= $date; ?>','14:00:00')">2:00 pm</button>
														</div>
												  <?php }

												  if($data[4] == true){ ?>
														<div style="height: 25%; width: 7%; position: static; float: left;">
															<button style="height: 90%;" onclick="timeClicked('<?= $date; ?>','16:00:00')">4:00 pm</button>
														</div>
												  <?php }
											  }
										   ?>
												<script>
													function timeClicked(date,time){
														window.history.pushState({id: 100}, '' , 'clientindex.php?id=<?= $user_id; ?>&date=' + date + '&time=' + time)
													}
												</script>
										  </div>

									  </div>	 
									  <!-- ------------------------------------------------------ -->
									<div style="height: 15%; width: 20%; margin-top: 20px;">
										<button onCLick="submit()">RESCHEDULE</button>
									</div>

									<!-- -------------------------------------------------------- -->
									</br></br>
										<div style="height: 10%; width: 15%;" id="vc-button">
											<?php
												$result = $conn->query("select call_id from schedule where bs_id = $user_id;");
												if($row = $result->fetch_array()){ 
													if($row['call_id'] == 111){?>
														<button onClick="window.location.replace('ClientVideoCall.php')">Accept Call</button>
											<?php	}
												} ?>
										</div>

										<script>
											$(document).ready(function(){
												setInterval(function(){
													$("#vc-button").load(window.location.href + " #vc-button");
													},3000);
											});
										</script>

</div>

<div id="maindiv" style="height: 50%; width: 50%; background-color: whitesmoke; margin-top: 20px;">
	<?php include './chat/ClientChatBox.php'; ?>
</div>