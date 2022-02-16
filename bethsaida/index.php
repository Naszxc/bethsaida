<!DOCTYPE html>
<html>
<head>
	<title>Bethsaida</title>
	<link rel="stylesheet" href="css/index.css"/>
	<meta name="viewport" width="width=device-width initial-scale:1">

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script>
		
		$(document).ready(function(){
			
			$(".sign-up").hide();
			$(".login").show();
			$(".sign-up-li").addClass("active");

			$(".sign-up-li").click(function(){
				$(this).addClass("active");
				$(".login-li").removeClass("active");
				$(".sign-up").show();
				$(".login").hide();
			});
		
			$(".login-li").click(function(){
				$(this).addClass("active");
				$(".sign-up-li").removeClass("active");
				$(".login").show();
				$(".sign-up").hide();
			});
		});

	</script>


</head>
<body>

	<section style="height: 100%; width: 100%;">
		<div class="top" style="width: 100%;">
			<div class="up">
				<div class="opacity">

					<!-- Page header -->
					<div class="top-head">
				
					</div>


					<!-- Menu bar -->
					<div class="top-combobox">
						<div class="combobox" style="background-color: white;">

							<!-- Clinic logo -->
							<div style="height: 100%; width: 15%; position: relative; float: left;">
								<img src="image/cliniclogo.png" style="height: 100%; width: 100%;">
							</div>


							<!-- div for Menu tabs -->
							<div style="height: 100%; width: 55%; position: relative; float: left;">
							
						
								<div style="height: 12%;"></div>  <!-- div for margin-top -->

								<!-- Menu tabs -->
								<div style="height: 76%;">
									<div style="position: relative; float:left; height: 100%; width: 25%; border-right: solid .8px rgba(0,0,0, .1);">
										<div style="margin-top: 22px;">
											<a href="#" style="text-decoration: none; color: rgba(0,0,0, .8); font-size: 15px;">About our clinic</a>
										</div>
									</div>

									<div style="position: relative; float:left; height: 100%; width: 24%; border-right: solid .8px rgba(0,0,0, .1);">
										<div style="margin-top: 22px;">
											<a href="#" style="text-decoration: none; color: rgba(0,0,0, .8); font-size: 15px;">What we offer</a>
										</div>
									</div>


									<div style="position: relative; float:left; height: 100%; width: 20%; width: 20%; border-right: solid .8px rgba(0,0,0,.1);">
										<div style="margin-top: 22px;">
											<a href="#location" style="text-decoration: none; color: rgba(0,0,0, .8); font-size: 15px;">Location</a>
										</div>
									</div>

									<div style="position: relative; float:left; height: 100%; width: 20%; width: 20%; border-right: solid .8px rgba(0,0,0,.1);">
										<div style="margin-top: 22px;">
											<a href="#login" style="text-decoration: none; color: rgba(0,0,0, .8); font-size: 15px;">Login</a>
										</div>
									</div>

								</div>


								<div style="height: 12%;"></div> <!-- div for margin-bottom -->
							</div>
						</div>
					</div>

	
					<!-- div for the body content: sliding text and doctor image -->
					<div class="top-body">
				
						<div style="height: 100%; width: 50%; position: relative; float: right;">
							<img src="image/mwphoto.png" style="height: 100%; margin-left: 10%">     <!-- EDIT HERE -->
						</div>

						<div style="height: 100%; width: 50%; position: relative;">
					
							<!-- slider panel -->
							<div style="height: 100%; float: left; margin-left: 20%; width: 80%; position: relative; overflow: hidden;">
						

								<div class="slider" style="float: left; width: 270%; height: 100%; position:absolute;">
									<div style="float: left; height: 100%; width: 33.3%; position: relative;">
										<div style="height: 100%; width: 100%; position: relative; padding: 25px;"> <!-- Tier 2 -->
											<div style="position: relative; height: 70%; width: 90%;"> <!-- Tier 3 -->
										
												<center>
													<b><p style="font-family: serif; font-size: 41px; color: rgba(34, 153, 84); margin-top: 10vh;">
														FAMILY PLANNING
													</p></b>
												</center>
							
												<center>
													<p style="font-size: 17px; color: rgb(240, 243, 244); margin-top: 15px; font-family: serif;">
														allows people to attain their desired number of children, if any,</br>
														and to determine the spacing of their pregnancies.</br>
														It is achieved through use of contraceptive methods and the treatment of infertility.
													</p>
												</center>


												<center>
													<a href="#third-slide" style="text-decoration: none;">
														<Button style="cursor: pointer; background-color: rgba(34, 153, 84); border-radius: 10px; border: none; height: 30px; width: 110px; margin-top: 15px; color: rgba(0,0,0, .5);">
															Learn More
														</Button>
													</a>
												</center>
												
									
											</div>
										</div>	
									</div>
							
									<div style="float: left; height: 100%; width: 33.3%; position: relative;"> <!-- Tier 1 -->
										<div style="height: 100%; width: 100%; position: relative; padding: 25px;"> <!-- Tier 2 -->
											<div style="position: relative; height: 70%; width: 90%;"> <!-- Tier 3 -->
										
												<center>
													<b><p style="font-family: serif; font-size: 41px; color: rgba(34, 153, 84); margin-top: 10vh;">
														WELL BABY CARE
													</p></b>
												</center>
							
												<center>
													<p style="font-size: 17px; color: rgb(240, 243, 244); margin-top: 15px; font-family: serif;">
														From feeding, bathing, sleeping to activities, our comprehensive guide has it covered</br>
														Newborn care and Newborn Health. Now Even Better.</br>
														Absorbs up to 7 Wettings.</br>
													</p>
												</center>


												<center>
													
														<a href="#second-slide" style="text-decoration: none;">
															<Button style="cursor: pointer; background-color: rgba(34, 153, 84); border-radius: 10px; border: none; height: 30px; width: 110px; margin-top: 15px; color: rgba(0,0,0, .5);">
																Learn more
															</Button>
														</a>
												
												</center>
												
											</div>
										</div>
							
									</div>
							
									<div style="float: left; height: 100%; width: 33.3%; position: relative;"> <!-- Tier 1 -->
										<div style="height: 100%; width: 100%; position: relative; padding: 25px;"> <!-- Tier 2 -->
											<div style="position: relative; height: 70%; width: 90%;"> <!-- Tier 3 -->
										
												<center>
													<b><p style="font-family: serif; font-size: 41px; color: rgba(34, 153, 84); margin-top: 10vh;">
														Mathernal and Child Health
													</p></b>
												</center>
							
												<center>
													<p style="font-size: 17px; color: rgb(240, 243, 244); margin-top: 15px; font-family: serif;">
													Together with our partners, APHA is improving the health and</br> 
													well-being of women, children and adolescents,</br>
													in support of global Every Woman Every Child movement...</br>
													</p>
												</center>


												<center>
													
														<a href="#first-slide" style="text-decoration: none;">
															<button style="cursor: pointer; background-color: rgba(34, 153, 84); border-radius: 10px; border: none; height: 40px; width: 110px; margin-top: 15px; color: white;">
																Learn more
															</button>
														</a>
													
												</center>
												
									
											</div>
										</div>
							
									</div>
								</div>

							</div>

						</div>
				
					</div>
				</div>
			</div>
	
	
			<!-- head bottom div for the blocks -->
			<div class="top-bottom">
				<div style="height: 100%; display: flex; justify-content: center; color: rgba(0,0,0, .5);">
			
					<section id="left">
						
						<center>
							<img src="image/icons/vcicon.jpg" style="height: 7vh; width: 7vh; margin-top: 30px;"/>
						</center>
						
						<center>
							<p style="margin-top: 10px; font-size: 18px;">Online Consultation</p>
						</center>
						
						<center>
							<p style="font-size: 15px; margin-top: 10px;">
								Set up medical appointments and send lab results from the safety of your own home. 
							</p>
						</center>
					</section>


					<section id="center">
						
						<center>
							<img src="image/icons/appticon.png" style="height: 7vh; width: 7vh; margin-top: 30px;"/>
						</center>
						
						<center>
							<p style="margin-top: 10px;">Booking Appointment</p>
						</center>
						
						<center>
							<p style="font-size: 15px; margin-top: 10px;">
								Set up medical appointments and send lab results from the safety of your own home. 
							</p>
						</center>

					</section>


					<section id="right">

						<center>
							<img src="image/icons/notifyicon.png" style="height: 7vh; width: 7vh; margin-top: 30px;"/>
						</center>
						
						<center>
							<p style="margin-top: 10px;">Emergency</p>
						</center>
						
						<center>
							<p style="font-size: 15px; margin-top: 10px;">
								Set up medical appointments and send lab results from the safety of your own home. 
							</p>
						</center>

					</section>

					<section id="right">

						<center>
							<img src="image/icons/paymenticon.jpg" style="height: 7vh; width: 7vh; margin-top: 30px;"/>
						</center>
						
						<center>
							<p style="margin-top: 10px;">Online Payment</p>
						</center>
						
						<center>
							<p style="font-size: 15px; margin-top: 10px;">
								Set up medical appointments and send lab results from the safety of your own home. 
							</p>
						</center>

					</section>
				<div>
			</div>
		</div>
	</section>


<!-------------------------------------------------------------------------------------------------------------------------------------------------------->


	<section id="location" style="width: 100%; height: 40%; background-color: rgb(214, 234, 248); position: relative; display:flex; justify-content: center; align-items: center;">
		
		<div id="map" style="height: 40vh; width: 70vh; margin-left: 2%;"></div>

		<div style="height: 36vh; width: 36vh; margin-left: 2%;  background-color: rgb(72, 201, 176); padding: 15px 15px;"> 
			
			<div style="height: 100%; width: 100%;">
				
				<section style="height: 15%; width: 100%;">
					<label style="color: black; font-size: 20px;">Get in touch</label>
				</section>

				<section style="height: 25%; width: 100%; font-size: 15px;">

					<div style="height: 100%; width: 20%; position: relative; float: left;">
						<img src="mapicon.png" style="height: 20px; width: 20px;">
					</div>

					<div style="height: 100%; width: 80%; position: relative; float: left;">
						<p>bldg.123 house.123</p>
						<p>sucad, apalit, pampanga</p>
					</div>

				</section>

				<section style="height: 25%; width: 100%;">

					<div style="height: 100%; width: 20%; position: relative; float: left;">
						<img src="telephoneicon.png" style="height: 20px; width: 20px;">
					</div>

					<div style="height: 100%; width: 80%; position: relative; float: left;">
						<p>(045)649 4776</p>
					</div>

				</section>

				<section style="height: 35%; width: 100%;">
					
					<input type="text" placeholder="Your Location"/>
				</section>

			</div>


		</div>




		<div style="height: 36vh; width: 36vh; margin-left: 2%; background-color: white; overflow: hidden;  padding: 15px 15px;"> 
			
			<div style="height: 100%; width: 100%;">
				<section style="height: 15%; width: 100%;">
					<label style="color: black; font-size: 20px;">Opening hours</label>
				</section>
				
				<section style="height: 25%; width: 100%; font-size: 15px;">
					<center><p style="margin-top: 10px;"> Monday-Friday </p></center>
					<center><p style="margin-top: 10px;"> 8:00am - 9:00pm </p></center>
				</section>

				<section style="height: 25%; width: 100%; font-size: 15px;">
					<center><p style="margin-top: 10px;"> Saturday-Sunday </p></center>
					<center><p style="margin-top: 10px;"> 8:00am - 9:00pm </p></center>
				</section>



			</div>

		</div>



		<script>
			function initMap() {
				var options = {
					zoom: 15,
					center: { lat: 14.9645, lng: 120.7579 },
					//mapTypeId: 'satellite'
				}

				var map = new google.maps.Map(document.getElementById('map'), options);

				var marker = new google.maps.Marker({
					position: { lat: 14.9645, lng: 120.7579 },
					map: map,
				});
			}
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB06Qs-_OMZjXZC5f_is7-3OzeF7aXP3Dk&callback=initMap&libraries=&v=weekly"
            async></script>



	</section>

	<!-------------------------------------------------------------------------------------------------------------------------------------------->

	<section id="offers" style="width: 100%; height: 300vh; position: relative;">
		
		<div id="first-slide" style="width: 100%; height: 6in; display: flex; justify-content: center; align-items: center;">
			<div style="height: 90%; width: 160vh; float: left; padding: 2% 2%;">
				
				<div style="height: 100%; width: 50%; float: left; display: flex; justify-content: center; align-items: center;">
					
					<div style="height: 80%; width: 80%;">
						
						<img src="image/services/photo(1).jpg" style="height: 100%; width: 100%;"/> <!-- EDIT HERE -->

					</div>

				</div>

				<div style="height: 100%; width: 50%;float: left; display: flex; justify-content: center; align-items: center;">
					
					<div style="height: 80%; width: 80%;">
						
						<label style="font-size: 30px; font-family: Gill Sans;">Mathernal & Child Health</label>
						

						<style>
							ul li{
								margin-top: 10px;
								margin-left: 60px;
								font-family: Candara;
								font-size: 20px;
							}
						</style>

						<ul>
							<li>Physical Exam</li>
							<li>Breast Exam</li>
							<li>Pregnancy Test</li>
							<li>Normal Spontaneous Delivery</li>
							<li>Pre-natal Care</li>
							<li>Post-natal Care</li>
							<li>Newborn Screening</li>
							<li>Hearing Text</li>
						</ul>

						<button style="margin-top: 20px; height: 30px; width: 1.5in; background-color: rgb(72, 201, 176); border: none;">
							<a href="#" style="text-decoration: none; color: rgba(0,0,0, .7);">Make an appointment</a>
						</button>

					</div>

				</div>

			</div>
			
		</div>



		<div id="second-slide" style="width: 100%; height: 6in;display: flex; justify-content: center; align-items: center;">
				
			<div style="height: 90%; width: 160vh; float: left;padding: 2% 2%;">
				
				<div style="height: 100%; width: 50%;float: left; display: flex; justify-content: center; align-items: center;">
					
					<div style="height: 80%; width: 80%;">
						
						<label style="font-size: 30px; font-family: Gill Sans;">Well Baby Care</label>
						

						<style>
							ul li{
								margin-top: 10px;
								margin-left: 60px;
								font-family: Candara;
								font-size: 20px;
							}
						</style>

						<ul>
							<li>Immunization</li>
							<li>Deforming</li>
							<li>Cord Pressing</li>
							<li>Weight Taking</li>
						</ul>

						<button style="margin-top: 20px; height: 30px; width: 1.5in; background-color: rgb(72, 201, 176); border: none;">
							<a href="#" style="text-decoration: none; color: rgba(0,0,0, .7);">Make an appointment</a>
						</button>

					</div>

				</div>

				<div style="height: 100%; width: 50%;float: left; display: flex; justify-content: center; align-items: center;">
					
					<div style="height: 80%; width: 80%;">
						
						<img src="image/services/photo(2).jpg" style="height: 100%; width: 100%;"/> <!-- EDIT HERE -->

					</div>

				</div>

			</div>


		</div>





		<div id="third-slide" style="width: 100%; height: 6in; display: flex; justify-content: center; align-items: center;">
			
			<div style="height: 90%; width: 160vh; float: left; padding: 2% 2%;">
				
				<div style="height: 100%; width: 50%; float: left; display: flex; justify-content: center; align-items: center;">
					
					<div style="height: 80%; width: 80%;">
						
						<img src="image/services/photo(3).jpg" style="height: 100%; width: 100%;"/> <!-- EDIT HERE -->

					</div>

				</div>

				<div style="height: 100%; width: 50%; float: left; display: flex; justify-content: center; align-items: center;">
					
					<div style="height: 80%; width: 80%;">
						
						<label style="font-size: 30px; font-family: Gill Sans;">Family Planning</label>
						

						<style>
							ul li{
								margin-top: 10px;
								margin-left: 60px;
								font-family: Candara;
								font-size: 20px;
							}
						</style>

						<ul>
							<li>Counceling</li>
							<li>Pills Supply</li>
							<li>Condom Supply</li>
							<li>DMPI injection</li>
							<li>Insertion Removal Check-up</li>
							<li>Referral for natural family planning</li>
							<li>Vasectomy</li>
						</ul>

						<button style="margin-top: 20px; height: 30px; width: 1.5in; background-color: rgb(72, 201, 176); border: none;">
							<a href="#" style="text-decoration: none; color: rgba(0,0,0, .7);">Make an appointment</a>
						</button>

					</div>

				</div>

			</div>
		</div>

	</section>




	<div style="position: fixed; height: 1.9in; width: .7in; background-color: none; right: 0; top: 30%;">
		
		<a href="#" style="text-decoration: none;">
			<button style="height: 55px; width: 60px; border: none; border-radius: 25px; background-color: rgb(14, 102, 85);">
				Top
			</button>
		</a>

		<a href="#location" style="text-decoration: none;">
			<button style="height: 55px; width: 60px; margin-top: 10px; border: none; border-radius: 25px; background-color: rgb(14, 102, 85);">
				Location
			</button>
		</a>

		<a href="#offers" style="text-decoration: none;">
			<button style="height: 55px; width: 60px; margin-top: 10px; border: none; border-radius: 25px; background-color: rgb(14, 102, 85);">
				Offers
			</button>
		</a>

	</div>




	<div id="login" class="overlay">
			<div class="popup">

				<ul>	
					<li class="sign-up-li">Sign up</li>
					<li class="login-li">Log in</li>
				</ul>


				<div class="sign-up">
						<a class="close" href="#" style="text-decoration: none; float: right;">&times;</a>
						<form method="POST" action="verify.php">
							<table align="center">
								<tr><td><h1>SIGN UP</h1></td></tr>
								<tr><td><input type="text" name="fname" placeholder="First Name" size="30" required=""></td></tr>
								<tr><td><input type="text" name="lname" placeholder="Last Name" size="30" required=""></td></tr>
								<tr><td><input type="text" name="mname" placeholder="Middle Name" size="30" required=""></td></tr>
								<tr><td><input type="text" name="add" placeholder="Address" size="30" required="" ></td></tr>
								<tr><td><input type="number" id="phone" name="phone" placeholder="Contact number" required size="30" ></td></tr>
								<tr><td><input type="email" name="ema" placeholder="Active Email" size="30" required=""></td></tr>
								<tr><td><input type="submit" name="submit" value="Sign Up"></td></tr>
								<tr><td><p>Already have an account? </p></a><a href="login.php">Log In</a></td></tr>
							</table>
						</form>
				</div>

				<div class="login">
						<a class="close" href="#" style="text-decoration: none; float: right;">&times;</a>
						<form method="POST" action="verifylogin.php">
							<table align="center">
								<tr><td><h1>Log in</h1></td></tr>
								<tr><td><input type="text" name="userid" placeholder="ID" size="30" required=""></td></tr>
								<tr><td><input type="text" name="pass" placeholder="Password" size="30" required=""></td></tr>
								<tr><td><input type="submit" name="submit" value="login"></td></tr>
							</table>
						</form>
				</div>

			<div>
		</div>
</body>
</html>