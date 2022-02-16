<!-- ----------------------ITO YUNG PARA SA PAYMENT TABLE---------------------- -->
										<!-- ---------------------IPASOK MO NALANG SA DIV KUNG DOON KA SASAYA------------------ -->
											<a href="https://dashboard.paymongo.com/payments">Direct to Paymongo Site</a>
											<table>
												<thead>
													<td>Phone Number</td>
													<td>Phone Account</td>
													<td>Amount</td>
													<td>Date Booked</td>
													<td>Time Booked</td>
													<td>Last Name</td>
													<td>First Name</td>
													<td>Middle Name</td>
												</thead>

												<tbody>
													<?php 
														$result = $conn->query("select p.p_connum,p.p_name,p.p_amount,s.date,s.time,u.bs_lname,u.bs_fname,u.bs_mname from payment p inner join schedule s on p.sc_id = s.sc_id inner join users u on s.bs_id = u.bs_id;");

														while($row = $result->fetch_array()){ 
															$amount = $row['p_amount'] / 100;
														?>

														<tr>
															<td><?= $row['p_connum']; ?></td>
															<td><?= $row['p_name']; ?></td>
															<td><?= $amount; ?></td>
															<td><?= $row['date']; ?></td>
															<td><?= $row['time']; ?></td>
															<td><?= $row['bs_lname']; ?></td>
															<td><?= $row['bs_fname']; ?></td>
															<td><?= $row['bs_mname']; ?></td>
														</tr>
													<?php } ?>
												</tbody>
											</table>