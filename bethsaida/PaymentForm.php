<!DOCTYPE html>
<html style="height: 7in">
<head>
	<script src="PaymentConstructor.js"></script>
</head>


<body style="height: 7in;">

	<div style="transform: translate(45%,30%); height: 65%; width: 50%; padding: 2%">
		
		<div style=" height: 100%; width: 50%; float: left;">
			<input id="name" type="text" placeholder="name">
			<input id="phone" type="text" placeholder="phone">
			<input id="email" type="text" placeholder="email"></br>


		</div>


		<div style=" height: 100%; width: 50%; float: left;">
			
			<input id="state" type="text" placeholder="state"></br>
			<input id="postal-code" type="text" placeholder="postal code"></br>
			<input id="city" type="text" placeholder="city"></br>

			<p>Amount:&nbsp 100</p>

		</div>


		Select Payment Method:
		<button onClick="gcashPayment()">Gcash</button>
		<button onClick="grabpayPayment()">Grab Pay</button>
		<button onClick="paymayaPayment()">Paymaya</button>
		
	</div>


	<script>
		
		let construct
		function getData(){
			
			construct = new gettingdata()
			construct.name = document.getElementById('name').value
			construct.phone = document.getElementById('phone').value
			construct.email = document.getElementById('email').value
			construct.state = document.getElementById('state').value
			construct.postalcode = document.getElementById('postal-code').value
			construct.city = document.getElementById('city').value
		}

		function gcashPayment(){

			getData()


			localStorage.setItem("name",construct.name)
			localStorage.setItem("phone",construct.phone)
			localStorage.setItem("email",construct.email)
			localStorage.setItem("state",construct.state)
			localStorage.setItem("postalcode",construct.postalcode)
			localStorage.setItem("city",construct.city)

			window.location.replace("GcashPayment.php")
		}

		function grabpayPayment(){

			getData()


			localStorage.setItem("name",construct.name)
			localStorage.setItem("phone",construct.phone)
			localStorage.setItem("email",construct.email)
			localStorage.setItem("state",construct.state)
			localStorage.setItem("postalcode",construct.postalcode)
			localStorage.setItem("city",construct.city)

			window.location.replace("GrabPayPayment.php")
		}

		function paymayaPayment(){

			getData()

			localStorage.setItem("name",construct.name)
			localStorage.setItem("phone",construct.phone)
			localStorage.setItem("email",construct.email)
			localStorage.setItem("state",construct.state)
			localStorage.setItem("postalcode",construct.postalcode)
			localStorage.setItem("city",construct.city)

			window.location.replace("PaymayaPayment.php")
		}


	</script>


</body>
</html>
