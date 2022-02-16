<!DOCTYPE html>
<html style="height: 7in;">
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


<body style="height: 7in;">
	

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


	<script>


		document.getElementById("email").innerHTML = localStorage.getItem("forEmail");
		document.getElementById("name").innerHTML = localStorage.getItem("forName");
		document.getElementById("phone").innerHTML = localStorage.getItem("forPhone");
		document.getElementById("link").href = localStorage.getItem("forLink");

	</script>



</body>


</html>