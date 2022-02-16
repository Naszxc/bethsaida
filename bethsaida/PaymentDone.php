<!DOCTYPE html>
<html style="height: 7in;">
<head>
	<?php require 'connect.php'; ?>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<?php session_start(); ?>
</head>


<body style="height: 7in;">
	

	<div style="transform: translate(45%,30%); height: 70%; width: 50%;">
		
		<h2 id="show" style="font-size: 40px;"></h2></br>
		<button style="transform: translate(45%,30%);"><a href id="proceed"></a></button>

	</div>


	<?php $type = $_GET['payment']; 
		if($type == "gcash" || $type == "grabpay"){ ?>


	<script>

		let a = localStorage.getItem("forId");

		gatherInfo()

		async function gatherInfo(){
			const options = {
				  method: 'POST',
				  headers: {
					Accept: 'application/json',
					'Content-Type': 'application/json',
					Authorization: 'Basic c2tfdGVzdF9BTjRHbmE5Tk1iak1peFhVbWtXQ01nNXM6'
				  },
				  body: JSON.stringify({
					data: {
					  attributes: {
						amount: 10000,
						source: {type: 'source', id: a},
						currency: 'PHP'
					  }
					}
				  })
				};


				let response = await fetch('https://api.paymongo.com/v1/payments', options)
				response = await response.json()
				console.log(response)

				datas = response.data.attributes.status
				datas1 = response.data.attributes.billing.name
				datas2 = response.data.attributes.billing.email
				datas3 = response.data.attributes.billing.phone
				datas4 = response.data.attributes.amount

				document.getElementById('show').innerHTML = datas


				$.post('StoreData.php',{postname: datas1, postemail: datas2, postphone: datas3, postammount: datas4},
					function(data){
						console.log(data)
						localStorage.clear()
						document.getElementById('show').innerHTML = 'Appointment Booked'
						document.getElementById('proceed').innerHTML = 'Proceed to Client Page'
						document.getElementById('proceed').href = "clientindex.php?id=" + data
						
					}
				);

		}


	</script>
	<?php } 
	
	else{ ?>
		<script>

				var datas1 = localStorage.getItem("name")
				var datas2 = localStorage.getItem("email")
				var datas3 = localStorage.getItem("phone")
				var datas4 = localStorage.getItem("ammount")

				$.post('StoreData.php',{postname: datas1, postemail: datas2, postphone: datas3, postammount: datas4},
					function(data){
						console.log(data)
						localStorage.clear()
						document.getElementById('show').innerHTML = 'Appointment Booked'
						document.getElementById('proceed').innerHTML = 'Proceed to Client Page'
						document.getElementById('proceed').href = "clientindex.php?id=" + data
						
					}
				);
		</script>
	<?php } ?>

</body>



</html>