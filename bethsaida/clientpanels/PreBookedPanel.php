<div style="height: 100%; width: 100%; background-color: gray; position: absolute;">
							

									<div style="height: 55%; width: 50%;">
										<div id="datepicker" name="datepicked">
									</div>

							

									<div style="height: 15%; width: 100%;">

										<div id="timepicker" style="height: 15%; width: 70%; position: absolute;">
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

									  <div style="height: 10%; width: 50%;">
										<select id="appointment" style="position: relative;">
											<optgroup style="color: gray; font-size: .2in;" label="Consultation Priority"></optgroup>
												<option value="Face-to-face Consultation">Face-to-face Consultation</option>
												<option value="Virtual Consultation">Virtual Consultation</option>

											<optgroup style="color: gray; font-size: .2in;" label="Well Baby Care"></optgroup>
												<option value="Immunization">Immunization</option>
												<option value="Deforming">Deforming</option>
												<option value="Cord Pressing">Cord Pressing</option>
												<option value="Weight Taking">Weight Taking</option>

											<optgroup style="color: gray; font-size: .2in;" label="Mathernal & Child Health"></optgroup>
												<option value="Counceling">Counceling</option>
												<option value="Breast Exam">Breast Exam</option>
												<option value="Pregnancy Test">Pregnancy Test</option>
												<option value="Normal Spontaneous Delivery">Normal Spontaneous Delivery</option>
												<option value="Pre-natal Care">Pre-natal Care</option>
												<option value="Post-natal Care">Post-natal Care</option>
												<option value="Newborn Screening">Newborn Screening</option>
												<option value="Hearing Text">Hearing Text</option>

											<optgroup style="color: gray; font-size: .2in;" label="Family Planning"></optgroup>
												<option value="Counceling">Counceling</option>
												<option value="Condom Supply">Condom Supply</option>
												<option value="DMPI injection">DMPI injection</option>
												<option value="Insertion Removal Check-up">Insertion Removal Check-up</option>
												<option value="Referral for natural family planning">Referral for natural family planning</option>
												<option value="Vasectomy">Vasectomy</option>

										</select>
									</div>

									<div style="height:10%; width: 20%;">
										 <input type="text" id="fullname" placeholder="Full Name" required=""/>
										 <input type="text" id="email" placeholder="Email" required=""/>
										 <input type="text" id="phonenum" placeholder="Contact Number" required=""/>
									</div>

									<div style="height: 10%; width: 20%; margin-top: 20px;">
										<button onCLick="submitClicked()">BOOK SCHEDULE</button>
									</div>


									<div id="maindiv" style="height: 50%; width: 50%; background-color: whitesmoke;">
										<?php include './chat/ClientChatBox.php'; ?>
									</div>


</div>
