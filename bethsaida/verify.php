<?php 
	require 'connect.php';
	use PHPMailer\PHPMailer\PHPMailer;
	require 'connect.php';
	require_once 'phpmailer/Exception.php';
	require_once 'phpmailer/PHPMailer.php';
	require_once 'phpmailer/SMTP.php';

	$mail = new PHPMailer(true);

	$alert = '';

	$sql = "SELECT MAX(bs_id) FROM users as maxid";
	$result = $conn->query($sql);
	$row = $result->fetch_array();

	$maxid = $row['MAX(bs_id)'];
	$uniqid = $maxid + 1;
	$year = (new DateTime)->format("Y");
	$my_val=str_pad($uniqid, 5, '0', STR_PAD_LEFT);
	$randthis = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

	$finuniqid = $year.$my_val;
	$randgenpass = substr(str_shuffle($randthis),0,8);
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$middlename = $_POST['mname'];
	$address = $_POST['add'];
	$contactnumber = $_POST['phone'];
	$email = $_POST['ema'];
	$status = 2;

	$sql1 = "SELECT * FROM users WHERE bs_email = '$email'";
	$result1 = $conn->query($sql1);

		if($result1->num_rows == 1)
		{
			$conn->close();
			echo "Email Already exist";
		}else{

			$sql1 = "INSERT INTO users (bs_uniqid, bs_password, bs_fname, bs_lname, bs_mname, bs_address, bs_connum, bs_email, bs_stat)
					 VALUES ('$finuniqid', '$randgenpass', '$firstname', '$lastname','$middlename', '$address', '$contactnumber', '$email', '$status')";
			$insert = $conn->query($sql1);

				if($insert)
				{
					try{
    					$mail->isSMTP();
    					$mail->Host = 'smtp.gmail.com';
    					$mail->SMTPAuth = true;
    					$mail->Username = 'canlas.johnas03@gmail.com'; // Gmail address which you want to use as SMTP server
    					$mail->Password = 'Bae Ju-hyeon'; // Gmail address Password
    					$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    					$mail->Port = '587';

    					$mail->setFrom('canlas.johnas03@gmail.com'); // Gmail address which you used as SMTP server
    					$mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    					$mail->isHTML(true);
    					$mail->Subject = 'Bethsaida Birthing Clinic';
    					$mail->Body = "<h2>Thankyou for Registering</h2> <br> <h4>Your User ID is: $finuniqid</h4><br><h4>Your Password is: $randgenpass</h4>";

    					$mail->send();
    					$alert = '<div class="alert-success">
                 					<span>Message Sent! Thank you for contacting us.</span>
                				  </div>';

  					} catch (Exception $e){
    					$alert = '<div class="alert-error">
                					<span>'.$e->getMessage().'</span>
              					  </div>';
  					}

					echo "Please Check your Email";
					$conn->close();


				}else{
					echo "Error Encountered";
				}	
		}




?>