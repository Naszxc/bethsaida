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
					<td>Paymaya</td>
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
			var pm_id, clientkey, intentId, forEmail, forName, forPhone


			localStorage.clear()

			createPaymentIntent()

			async function createPaymentIntent(){

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
							payment_method_allowed: ['card', 'paymaya'],
							payment_method_options: {card: {request_three_d_secure: 'any'}},
							currency: 'PHP'
						  }
						}
					  })
					};

					let response = await fetch('https://api.paymongo.com/v1/payment_intents', options);
					response = await response.json();
					clientkey = response.data.attributes.client_key
					intentId = response.data.id

					createPaymentMethod()
			}


			async function createPaymentMethod(){
				
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
						billing: {
						  address: {city: city, state: state, postal_code: postalcode, country: 'PH'},
						  name: name,
						  email: email,
						  phone: phone
						},
						type: 'paymaya'
					  }
					}
				  })
				};

				let response = await fetch('https://api.paymongo.com/v1/payment_methods', options);
					response = await response.json();
					pm_id = response.data.id;
					forEmail = response.data.attributes.billing.email;
					forName = response.data.attributes.billing.name;
					forPhone = response.data.attributes.billing.phone;

					attachtoPaymentIntent()
			}


			async function attachtoPaymentIntent(){
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
							payment_method: pm_id,
							client_key: clientkey,
							return_url: 'http://localhost/bethsaida/PaymentDone.php?payment=paymaya'
						  }
						}
					  })
					};

					let response = await fetch('https://api.paymongo.com/v1/payment_intents/' + intentId + '/attach', options);
					response = await response.json();
					forLink = response.data.attributes.next_action.redirect.url;
					forAmount = response.data.attributes.amount;

					document.getElementById("email").innerHTML = forEmail
					document.getElementById("name").innerHTML = forName
					document.getElementById("phone").innerHTML = forPhone
					document.getElementById("link").href = forLink

					localStorage.setItem("email",forEmail)
					localStorage.setItem("name",forName)
					localStorage.setItem("phone",forPhone)
					localStorage.setItem("ammount",forAmount)

			}


	</script>


</html>