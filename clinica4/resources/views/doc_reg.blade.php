<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clinica</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/roboto-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/jquery-ui.min.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style-doc-reg.css')}}"/>
    @include('include/header')
</head>
<body>
	<div class="page-content" style="background-image: url('assets/images/doc.jpg')">
		<div class="wizard-v3-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<h3 class="heading">Enter Required Details for Your Doctor Account</h3>
					<p>Fill all form fields to go next step</p>
				</div>
		        <form class="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-text">Personal</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Personal Information:</h3>
			                	<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first_name" name="first_name" required>
											<span class="label">First Name*</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last_name" name="last_name" required>
											<span class="label">Last Name*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div id="radio">
										<label>Gender*:</label>
										<input type="radio" name="gender" value="male" checked class="radio-1"> Male
  										<input type="radio" name="gender" value="female"> Female
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="phone" name="phone" required>
											<span class="label">Age*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">Date of Birth*:</label>
										<select name="date" id="date">
											<option value="Day" disabled selected>Day</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
										</select>
										<select name="month" id="month">
											<option value="Month" disabled selected>Month</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
										</select>
										<select name="year" id="year">
											<option value="Year" disabled selected>Year</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="cnic" name="cnic" required>
											<span class="label">CNIC*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="phone" name="phone" required>
											<span class="label">Phone Number*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-1">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="address" name="address" required>
											<span class="label">Address*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-1">
										<label class="form-row-inner">
											<input type="file" accept="Image" class="form-control" id="imagepick" name="imagepick" size="10">
											<span class="label">Choose an Image</span>
					  						<span class="border"></span>
					  						<style type="text/css">
					  							input[type='file']::-webkit-file-upload-button
												{
													padding: 20 30;
													color: #fff;
													background-color: #24C1E8;
													border: none;
													font-size: 20;
													border-radius: 5px;
													}
					  						</style>
										</label>
									</div>
								</div>
							</div>
			            </section>
			           
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
			            	<span class="step-text"> Professional</span>
			            </h2>
			             <section>
			                <div class="inner">
			                	<h3>Education info:</h3>
			                	<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" name="degree" id="degree" class="form-control" required>
											<span class="label">Education*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="Instution" name="institution" required>
											<span class="label">Institution*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<h3>Specialization:</h3>
								
						<div class="form-row form-row-specialization">
									<div class="form-holder form-holder-2">
										<label for="specialization" class="special-label">Choose specialization*:</label>
										<select name="specialization" id="specialization" required>
											<option value="Specialization" disabled selected> Specialization
											</option>
											<option value="16">MBBS</option>
											<option value="17">Neurosurgeon</option>
											<option value="18">\oncology</option>
											<option value="19">Radiology</option>
										</select>
									</div>
								</div>

								<h3>Practice Areas:</h3>
								<div class="form-row form-row-specialization">
									<div class="form-holder form-holder-2">
										<label for="disease" class="special-label">Choose practice areas*:</label>
										<select name="disease" id="disease" required>
											<option value="disease" disabled selected> Practice areas
											</option>
											<option value="16">Epilepsy</option>
											<option value="17">Neuromolecular</option>
											<option value="18">random</option>
											<option value="19">random</option>
										</select>
									</div>
								</div>

							<!-- practice one -->
			            </section>
			            
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-text">Account</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Payment Information:</h3>
			                	<div class="form-row">
			                		<div class="form-holder form-holder-2">
			                			<input type="radio" name="radio1" id="pay-1" value="pay-1" checked>
			                			<label class="pay-1-label" for="pay-1"><img src="{{ asset ('assets/images/wizard_v3_icon_1.png')}}" alt="pay-1">Credit Card</label>
										<input type="radio" name="radio1" id="pay-2" value="pay-2">
										<label class="pay-2-label" for="pay-2"><img src="{{ asset ('assets/images/wizard_v3_icon_2.png')}}" alt="pay-2">Paypal</label>
			                		</div>
			                	</div>
			                	<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="holder" name="holder" required>
											<span class="label">Holder Name*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
			                	<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="card" name="card" required>
											<span class="label">Card Number*</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="cvc" name="cvc" required>
											<span class="label">CVC*</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
			                	<div class="form-row form-row-date form-row-date-1">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">Expiry Date*:</label>
										<select name="month_1" id="month_1">
											<option value="Month" disabled selected>Month</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
										</select>
										<select name="year_1" id="year_1">
											<option value="Year" disabled selected>Year</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 4 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-text">Confirm</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Confirm Details:</h3>
			                	<div class="form-row table-responsive">
									<table class="table">
										<tbody>
											<tr class="space-row">
												<th>Full Name:</th>
												<td id="fullname-val"></td>
											</tr>
											<tr class="space-row">
												<th>Email Address:</th>
												<td id="email-val"></td>
											</tr>
											<tr class="space-row">
												<th>Phone Number:</th>
												<td id="phone-val"></td>
											</tr>
											<tr class="space-row">
												<th>User:</th>
												<td id="username-val"></td>
											</tr>
											<tr class="space-row">
												<th>Gender:</th>
												<td id="gender-val"></td>
											</tr>
											<tr class="space-row">
												<th>Address:</th>
												<td id="address-val"></td>
											</tr>
											<tr class="space-row">
												<th>Card Type:</th>
												<td id="pay-val">Credit Card</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	@include('include/footer')

	<script src="{{ asset ('assets/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{ asset ('assets/js/jquery.steps.js')}}"></script>
	<script src="{{ asset ('assets/js/jquery-ui.min.js')}}"></script>
	<script src="{{ asset ('assets/js/main.js')}}"></script>

</body>
</html>