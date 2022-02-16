<!DOCTYPE html>
<html>

<?php
	require 'connect.php';
	session_start();
?>

<head>

	<style>
		html{
			height: 100%;
			width: 100%;
		}

		body{
			height: 100%;
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.form{
			width: 50%;
			height: 50%;
			background-color: rgba(0,0,0,.4);
		}
	</style>
	

</head>

<body>

	
	<div class="form">

	<!-- ############################################################################################# -->

	<form method="POST">
		
		Are You having Medical Problems? 
		<input type="radio" id="answer-1A" name="question-1" value="Yes">
		<label for="answer-1A">Yes</label>

		<input type="radio" id="answer-2A" name="question-1" value="No">
		<label for="answer-2A">No</label>

		<br>



		Are You Suffering of any kind of illness? 
		<input type="radio" id="answer-1B" name="question-2" value="Yes" required>
		<label for="answer-1B">Yes</label>

		<input type="radio" id="answer-2B" name="question-2" value="No" required>
		<label for="answer-2B">No</label>

		<br>


		
		Are you on any kind of medication? 
		<input type="radio" id="answer-1C" name="question-3" value="Yes" required>
		<label for="answer-1C">Yes</label>

		<input type="radio" id="answer-2C" name="question-3" value="No" required>
		<label for="answer-2C">No</label>

		<br>
		


		Do You have allergies?	
		<input type="radio" id="answer-1D" name="question-4" value="Yes" required>
		<label for="answer-1D">Yes</label>

		<input type="radio" id="answer-2D" name="question-4" value="No" required>
		<label for="answer-2D">No</label>

		<br>
		

		Are You experiencing any kind of stress?
		<input type="radio" id="answer-1E" name="question-5" value="Yes" required>
		<label for="answer-1E">Yes</label>

		<input type="radio" id="answer-2E" name="question-5" value="No" required>
		<label for="answer-2E">No</label>

		<br>


	<!-- ############################################################################################# -->

		<input name="show" type="submit"/>

	</form>

		<?php
			

			if(isset($_POST['show'])) {
			    $_SESSION['ques1'] = $_POST['question-1']; 
				$_SESSION['ques2'] = $_POST['question-2'];
				$_SESSION['ques3'] = $_POST['question-3'];
				$_SESSION['ques4'] = $_POST['question-4'];
				$_SESSION['ques5'] = $_POST['question-5'];

				header("location:PaymentForm.php");
			} 

		?>


	</div>
	

</body>

</html>