@extends('layouts/app1')
@section('content')
	<!-- PAGE CONTENT -->
	<div id="page-content">

		<div id="page-header" class="parallax" data-stellar-background-ratio="0.3" style="background-image: url(assets/images/backgrounds/page-header-5.jpg);">

			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<h1>Conatct</h1>

					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->

		</div><!-- page-header -->

		<div class="container">
			<div class="row">
				<div class="col-md-8">

					<h5><strong>Get in touch</strong></h5>

					<form id="contact-form" name="contact-form" method="post" action="http://smart-pixel.tech/smartmed/assets/php/send.php">
						<fieldset>

							<div id="alert-area"></div>

							<p>
								<input class="col-12" id="name" type="text" name="name" placeholder="" required>
								<span></span>
								<label for="name">Name</label>
							</p>

							<p>
								<input class="col-12" id="email" type="text" name="email" placeholder="" required>
								<span></span>
								<label for="email">E-mail</label>
							</p>

							<p>
								<input class="col-12" id="subject" type="text" name="subject" placeholder="" required>
								<span></span>
								<label for="subject">Subject</label>
							</p>

							<p>
								<textarea class="col-12" id="message" name="message" rows="3" cols="25" placeholder="" required></textarea>
								<span></span>
								<label for="message">Message</label>
							</p>

							<button class="btn btn-default btn-outline waves waves-dark" id="submit" type="submit" name="submit" value="">Send message <i class="decode-icon-cursor"></i></button>

						</fieldset>
					</form>

				</div><!-- col -->
				<div class="col-md-4">

					<h5><strong>Contact Info</strong></h5>

					<br>

					<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibul nec odio vestibulum est mattis effic iturut magna. Etiam nec odio vestibulum est mattis effic iturut magna. </p>

					<br>

					<div class="widget widget-contact ml-lg-5">

						<ul>
							<li>
								<i class="fa fa-map-marker"></i>
								4453 Meadow Lane, San Jose, CA 95134
							</li>
							<li>
								<i class="fa fa-phone"></i>
								315-411-8716
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:info@smart-pixel.xyz">info@smart-pixel.xyz</a>
							</li>
						</ul>

					</div><!-- widget-contact -->

				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->

		<br>

		<div class="map mb-0" data-zoom="15" data-height="600" data-address="Meadow Lane San Jose, CA 95134, USA" data-address-details="Here is our location"></div>

	</div><!-- PAGE CONTENT -->

@endsection