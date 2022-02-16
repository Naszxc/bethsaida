<h3 align="center">ACTIVATED ACCOUNT</h3>

		<table width="100%" border='1'>
			<thead>
				<tr>
					<th>User ID</th>
					<th>Full Name</th>
					<th>Address</th>
					<th>Contact Number</th>
					<th>Email</th>
					<th>Date Created</th>
					<th>Action</th>				
				</tr>				
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM users WHERE bs_stat ='2'";
					$result = $conn->query($sql);
						while ($row = $result->fetch_array()) {
							echo "<tr><td align = 'center'>" . $row['bs_uniqid'] . "</td>";
							echo "<td align = 'center'>" . $row['bs_fname'] . " " . $row['bs_lname'] . " " . $row['bs_mname'] . "</td>";
							echo "<td align = 'center'>" . $row['bs_address'] . "</td> ";
							echo "<td align = 'center'>" . $row['bs_connum'] . "</td> ";
							echo "<td align = 'center'>" . $row['bs_email'] . "</td> ";
							echo "<td align = 'center'>" . $row['bs_datecreated'] . "</td> ";
							echo "<td align='center'><a href='deactivate.php?getid=". $row['bs_uniqid']. "'>Deactivate</a></td></tr>";
						}
				?>


			</tbody>
		</table>

		<h3 align="center">DEACTIVATED ACCOUNT</h3>

		<table width="100%" border='1'>
			<thead>
				<tr>
					<th>User ID</th>
					<th>Full Name</th>
					<th>Address</th>
					<th>Contact Number</th>
					<th>Email</th>
					<th>Date Created</th>
					<th>Action</th>				
				</tr>				
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM users WHERE bs_stat ='1'";
					$result = $conn->query($sql);
						while ($row = $result->fetch_array()) {
							echo "<tr><td align = 'center'>" . $row['bs_uniqid'] . "</td>";
							echo "<td align = 'center'>" . $row['bs_fname'] . " " . $row['bs_lname'] . " " . $row['bs_mname'] . "</td>";
							echo "<td align = 'center'>" . $row['bs_address'] . "</td> ";
							echo "<td align = 'center'>" . $row['bs_connum'] . "</td> ";
							echo "<td align = 'center'>" . $row['bs_email'] . "</td> ";
							echo "<td align = 'center'>" . $row['bs_datecreated'] . "</td> ";
							echo "<td align='center'><a href='reactivate.php?getid=". $row['bs_uniqid']. "'>Reactivate</a></td></tr>";
						}
				?>


			</tbody>
		</table>