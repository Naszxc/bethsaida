<?php
	use PHPMailer\PHPMailer\PHPMailer;
	require 'testing2.php';
	require_once 'phpmailer/Exception.php';
	require_once 'phpmailer/PHPMailer.php';
	require_once 'phpmailer/SMTP.php';
	$mail = new PHPMailer(true);

	try{
	$mail->addAddress('mikocruz.mc@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Bethsaida Birthing Clinic';
    $mail->Body = "<h2>Thankyou for Your Response</h2> <br> <h4>Your User ID is: </h4><br><h4>Your Password is: </h4>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
	}catch(exception $e){
		$alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
	
	}






?>