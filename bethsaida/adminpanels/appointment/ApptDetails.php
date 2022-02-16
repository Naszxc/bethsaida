<!-- -----------------ITO YUNG LALABAS KAPAG PININDOT MO YUNG VIEW DETAILS MAKIKITA MO YUN SA MGA TABLE ROWS-------------- -->

											<div style="height: 100%; width: 100%; display: flex; align-items: center; justify-content: center;">


												<!-- -----------ITO YUNG MAY MGA YES AT NO SA FORM.PHP BASTA PAG PININDOT MO YUNG VIEW DETAILS MAKIKITA MO DIN SA LEFT SIDE------------- -->
												<div style="height: 90%; width: 40%; background-color: gray;">
													<?php	
														$get = $_GET['id'];
														$get_user = $_GET['user'];
														$get_appt = $_GET['type'];
														$result = $conn->query("select p.*, s.appt_type from patient_info p inner join schedule s on s.sc_id = p.sc_id where p.sc_id = $get;"); 
														$current_date = date('Y-m-d',strtotime('today'));?>
								
														<ul>
												<?php	if($row = $result->fetch_array()){ ?>

																<li>Medical Problems:<?= $row['question_1']; ?></li>
																<li>Suffering of any kind of illness:<?= $row['question_2']; ?></li>
																<li>kind of medication:<?= $row['question_3']; ?></li>
																<li>Allergies:<?= $row['question_4']; ?></li>
																<li>Experiencing any kind of stress:<?= $row['question_5']; ?></li>
																<li>Appointment:<?= $row['appt_type']; ?></li>
																<?php if(isset($_GET['date'])){ 
																		$verifydate = $_GET['date'];
																		if($verifydate == date('Y-m-d',strtotime('today'))){ ?>
																			<button onCLick="start()">Start a Video Call</button>
																			<a href="adminindex.php?change=details&id=<?= $row['sc_id']; ?>&user=<?= $row['bs_id']; ?>&type=<?= $row['appt_type']; ?>&apptDone=done"><button>Done</button></a>
																<?php   } 
																	  }
																		if(isset($_GET['apptDone'])){
																			$user_id = $_GET['user'];
																			$date_format = date('Y-m-d',strtotime('today'));
																			$result = $conn->query("select * from schedule where bs_id = $user_id and date = '$date_format'");
												
																			if($row = $result->fetch_array()){
																				$date = $row['date']; $time = $row['time']; $appt_type = $row['appt_type']; $full_name = $row['full_name']; $email = $row['email']; $phonenum = $row['phonenum'];
																				$conn->query("insert into appt_list (bs_id,date,time,appt_type,full_name,email,phonenum,status) values($user_id,'$date','$time','$appt_type','$full_name','$email','$phonenum','done');");
																				$conn->query("delete from schedule where bs_id = $user_id");
																			}
																		}
										
																?>
												<?php	} ?>
														</ul>

																<!-- -----------ITO LUMILITAW LANG KAPAG YUNG APPOINTMENT TUNGKOL SA MGA SERVICES------------- -->
																		<div style="height: 40%; width: 100%; margin-top: 1in; background-color: gray;">
																					<?php 
																						$query = "select * from appt_list where bs_id = $get_user and appt_type = '$get_appt';";
																						$result = $conn->query($query);
									
																						if($row = $result->fetch_array()){ ?>	
																								<table>
																									<thead>
																										<td>Date</td>
																										<td>time</td>
																										<td>Appointment</td>
																									</thead>
																									<tbody>
											
																										<?php
																											$result = $conn->query($query);
												
																											  while($row = $result->fetch_array()){ 
																												 $format_date = date('M d, Y',strtotime($row['date']));
																												 $format_time = date('h:i a',strtotime($row['time']));
																											  ?>
																												<tr>
																													<td><?= $format_date; ?></td>
																													<td><?= $format_time; ?></td>
																													<td><?= $row['appt_type']; ?></td>
																												</tr>
										  
																										<?php  } ?>
																									</tbody>

																								</table>
																						<?php } ?>
																		</div>
																<!-- -----------------------HANGGANG DITO LANG YUNG PARA SA MGA SERVICES-------------------------------- -->
												</div>
												<!-- -------------HANGGANG DITO YUNG SA MGA YES AT NO NA SINAGUTAN SA FORM.PHP--------------- -->



														<!-- ------ITO YUNG PARA SA INFO NG PAYMENT NILA MAKIKITA MO NAMAN YUN SA RIGHT SIDE KAPAG PININDOT MO YUNG VIEW DETAILS-------- -->
														<div style="height: 90%; width: 40%; background-color: gray;">

																<?php 
									
																	$get = $_GET['id'];
																	$result = $conn->query("select p.p_amount,p.p_name,p.p_connum from payment p inner join users u on p.bs_id = u.bs_id where p.sc_id = $get;"); ?>
								
																<ul>
														<?php	if($row = $result->fetch_array()){
						
																	$amount = $row['p_amount'] / 100;	
																?>

																		<li>Amount Paid:<?= $amount; ?></li>
																		<li>Account Name:<?= $row['p_name']; ?></li>
																		<li>Number:<?= $row['p_connum']; ?></li>
																	</ul>

														<?php	} ?>
								
																</ul>
														</div>
														<!-- -------------HANGGANG DITO YUNG INFO NG PAYMENT------------------ -->

											</div>

											<!-- ---------------HANGGANG DITO LANG YUNG TABLE NG MGA APPOINTMENT PARA SA KASALUKUYANG ARAW------------------ -->

											<script>
										function start(){
											$.post("SendCall.php", {postuserid: <?= $get; ?>},function(){window.location.replace("AdminVideoCall.php");});
										}
									</script>