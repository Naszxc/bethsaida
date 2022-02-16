<!-- ---------------ITO NAMAN YUNG TABLE NG MGA APPOINTMENT SA KASALUKUYANG ARAW------------------ -->
										  <!-- --------------------IPASOK MO NALANG SA DIV KUNG DOON KA SASAYA------------------ -->
												<table>
												<thead>
													<td>Date</td>
													<td>Time</td>
													<td>appointment</td>
													<td>Last Name</td>
													<td>First Name</td>
													<td>Middle Name</td>
													<td>Details</td>
												</thead>

												<tbody>
													<?php 
														$result = $conn->query("select s.bs_id, s.sc_id, s.date, s.time, s.appt_type, u.bs_fname, u.bs_lname, u.bs_mname from schedule s inner join users u on s.bs_id = u.bs_id where s.date = '". date('Y-m-d',strtotime('today')) ."';");

														while($row = $result->fetch_array()){

															$date_format = date('M d, Y', strtotime($row['date']));
															$time_format = date('h:i a', strtotime($row['time']));
													?>
														<tr>
															<td><?= $date_format; ?></td>
															<td><?= $time_format; ?></td>
															<td><?= $row['appt_type']; ?></td>
															<td><?= $row['bs_lname']; ?></td>
															<td><?= $row['bs_fname']; ?></td>
															<td><?= $row['bs_mname']; ?></td>
															<td><a href="adminindex.php?change=details&id=<?= $row['sc_id']; ?>&user=<?= $row['bs_id']; ?>&type=<?= $row['appt_type']; ?>&date=<?= $row['date']; ?>">View Details</a></td>
														</tr>
													<?php } ?>
												</tbody>
											</table>