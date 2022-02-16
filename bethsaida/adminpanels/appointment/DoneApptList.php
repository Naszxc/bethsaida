<table>
												<thead>
													<td>Date</td>
													<td>Time</td>
													<td>Full Name</td>
													<td>Appointment Type</td>
													<td>Email</td>
													<td>Phone Number</td>
												</thead>

												<tbody>
													<?php 
														$result = $conn->query("select * from appt_list;");

														while($row = $result->fetch_array()){

															$date_format = date('M d, Y', strtotime($row['date']));
															$time_format = date('h:i a', strtotime($row['time']));
													?>
														<tr>
															<td><?= $date_format; ?></td>
															<td><?= $time_format; ?></td>
															<td><?= $row['full_name']; ?></td>
															<td><?= $row['appt_type']; ?></td>
															<td><?= $row['email']; ?></td>
															<td><?= $row['phonenum']; ?></td>
														</tr>
													<?php } ?>
												</tbody>
												</table>