<?php 
	use PHPMailer\PHPMailer\PHPMailer;
	require_once 'phpmailer/Exception.php';
	require_once 'phpmailer/PHPMailer.php';
	require_once 'phpmailer/SMTP.php';
	$mail = new PHPMailer(true);

	$alert = '';
	try{

	$mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'whitecrow852@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'okimzurc'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('whitecrow852@gmail.co');


	}catch(exception $e){
		$alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
	}



?>