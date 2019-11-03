<!DOCTYPE html>
<html lang="en">
<head>

  @include('include/header')
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset ('assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('asset/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/main2.css')}}">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form"  action="{{ route ('checkpres',[$doc,$clinicid,$patid,$appid])}}" method="GET"                              >
				@csrf
				<span class="contact100-form-title">
				       Doctor Authentication
				</span>

				<!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>

 -->
 								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Mr.{{$doc->doctor_name}}</span>
					<input class="input100" type="password" name="password" placeholder="Enter your Identification code">
					<span class="focus-input100"></span>
				</div>

						<!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">CNIC(without hashes)</span>
					<input class="input100" type="number" name="cnic" placeholder="Enter your CNIC">
					<span class="focus-input100"></span>
				</div>
 -->
						<!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Degree Name</span>
					<input class="input100" type="text" name="degree" placeholder="Enter your Degree name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Institute Name</span>
					<input class="input100" type="text" name="institute" placeholder="Enter your Institute">
					<span class="focus-input100"></span>
				</div>
 -->


<!-- 
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Age</span>
					<input class="input100" type="number" name="age" placeholder="Enter your age">
					<span class="focus-input100"></span>
				</div>
 -->


					<!-- 			<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Phone Number</span>
					<input class="input100" type="number" name="phone" placeholder="Enter your phone numer">
					<span class="focus-input100"></span>
				</div>
 -->
<!-- 
								<div class="wrap-input100 input100-select">
					<span class="label-input100">Gender</span>
					<div>
						<select class="selection-2" name="gender">
							<option>Male</option>
							<option>Female</option> -->
							<!-- <option>eCommerce Bussiness</option>
							<option>UI/UX Design</option>
							<option>Online Services</option>
 -->				<!-- 		</select>
					</div>
					<span class="focus-input100"></span>
				</div>
 -->
							<!-- <div class="wrap-input100 input100-select">
					<span class="label-input100">Status</span>
					<div>
						<select class="selection-2" name="status">
							<option>Active</option>
							<option>Away</option>
 -->							<!-- <option>eCommerce Bussiness</option>
							<option>UI/UX Design</option>
							<option>Online Services</option>
 -->					<!-- 	</select>
					</div>
					<span class="focus-input100"></span>
				</div>
 -->




<!-- 				<div class="wrap-input100 input100-select">
					<span class="label-input100">Budget</span>
					<div>
						<select class="selection-2" name="budget">
							<option>Select Budget</option>
							<option>1500 $</option>
							<option>2000 $</option>
							<option>2500 $</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div> -->

				<!-- <div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Your Background</span>
					<textarea class="input100" name="experience" placeholder="Your experience here..."></textarea>
					<span class="focus-input100"></span>
				</div>
 -->

					
					<!-- 	<div class="wrap-input100 validate-input" data-validate="">
					<span class="label-input100"></span>
					<input class="input100" type="file" name="file" placeholder="">
					<span class="focus-input100"></span>
				</div>
 -->
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset ('assets/js/main2.js')}}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
@include('include/footer')

</body>
</html>
