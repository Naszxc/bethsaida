<!DOCTYPE html>
<head>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<?php session_start(); ?>
</head>
<body>
	<?php 
		require 'connect.php';
		$usid = $_POST['userid'];
		$uspass = $_POST['pass'];

		$sql = "SELECT * FROM users WHERE bs_uniqid = '$usid' AND bs_password = '$uspass'";
		$result = $conn->query($sql);
		$row = $result->fetch_array();

		if($row){

				if($row['bs_stat'] == 3){
					$conn->close();
					$_SESSION['admin_id'] = $row['bs_id'];
					header("location:adminindex.php");
				}elseif ($row['bs_stat'] == 2) {
					$_SESSION['user_id'] = $row['bs_id'];
					$data = $row['bs_id'];
					header("location:clientindex.php?id=$data");
				}else{
					echo "Invalid Account";
				}

		}else{
			$conn->close();
			echo "INVALID ACCOUNT";
		}

	?>
</body>
</html>