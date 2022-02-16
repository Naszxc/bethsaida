<!DOCTYPE html>
<html>
<head>

	<style>

		span{
			font-size: 20px;
		}

		label{
			font-size: 20px;
		}

		a{
			font-size: 20px;
		}

		.container table tbody{
			border: 2px solid;
		}

	</style>

</head>


<body>

	<div class="container" style="transform: translate(60%,20%); height: 70%; width: 40%; background-color: rgba(0,0,0, .2); padding: 2% 2%;">
		
		<table>
			<tbody>
				<tr>
					<th>Email:</th>
					<td id="email"></td>
				</tr>

				<tr>
					<th>Name:</th>
					<td id="name"></td>
				</tr>

				<tr>
					<th>Phone:</th>
					<td id="phone"></td>
				</tr>

				<tr>
					<th>Payment type:</th>
					<td>Gcash</td>
				</tr>
				
				<tr>
					<th>Amount:</th>
					<td>100.00</td>
				</tr>

				<tr>
					<td><button><a href id="link">Proceed</a></button></td>
				</tr>
			</tbody>
		</table>


	</div>
	
</body>


<script>

			var name = localStorage.getItem("name")
			var phone = localStorage.getItem("phone")
			var email = localStorage.getItem("email")
			var state = localStorage.getItem("state")
			var postalcode = localStorage.getItem("postalcode")
			var city = localStorage.getItem("city")

			localStorage.clear()

			createSource()

			async function createSource(){

				const options = {
				  method: 'POST',
				  headers: {
					Accept: 'application/json',
					'Content-Type': 'application/json',
					Authorization: 'Basic cGtfdGVzdF9WYm1UcTY3OUROdlFTTmFLUjFGYXlmWTM6'
				  },
				  body: JSON.stringify({
					data: {
					  attributes: {
						amount: 10000,
						redirect: {
						  success: 'http://localhost/bethsaida/PaymentDone.php?payment=gcash',
						  failed: 'http://localhost/bethsaida/adminindex.php'
						},
						billing: {
						  address: {
							state: state, 
							postal_code: postalcode, 
							city: city, 
							country: 'PH'
							},
						  name: name,
						  phone: phone,
						  email: email
						},
						type: 'gcash',
						currency: 'PHP'
					  }
					}
				  })
				};

					let response = await fetch('https://api.paymongo.com/v1/sources', options);
					response = await response.json();
					forId = response.data.id;
					forEmail = response.data.attributes.billing.email;
					forName = response.data.attributes.billing.name;
					forPhone = response.data.attributes.billing.phone;
					forLink = response.data.attributes.redirect.checkout_url;

					console.log(response);

					localStorage.setItem("forId", forId);

					document.getElementById("email").innerHTML = forEmail
					document.getElementById("name").innerHTML = forName
					document.getElementById("phone").innerHTML = forPhone
					document.getElementById("link").href = forLink

				//window.location.replace("SendPayment.php");
		}
	</script>






</html>