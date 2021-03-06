<!doctype html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!--> <html><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<title>Coming Soon - Behind the Rail</title>

	<style type="text/css">
		@font-face {
		  font-family: 'mission_scriptregular';
		  src: url("fonts/mission-script-webfont.eot");
		  src: url("fonts/mission-script-webfont.eot?#iefix") format("embedded-opentype"), url("fonts/mission-script-webfont.woff") format("woff"), url("fonts/mission-script-webfont.ttf") format("truetype"), url("fonts/mission-script-webfont.svg#mission_scriptregular") format("svg");
		  font-weight: normal;
		  font-style: normal;
		}

		@font-face {
		  font-family: 'debonair_inline_nfregular';
		  src: url("fonts/debonairinlinenf-webfont.eot");
		  src: url("fonts/debonairinlinenf-webfont.eot?#iefix") format("embedded-opentype"), url("fonts/debonairinlinenf-webfont.woff") format("woff"), url("fonts/debonairinlinenf-webfont.ttf") format("truetype"), url("fonts/debonairinlinenf-webfont.svg#debonair_inline_nfregular") format("svg");
		  font-weight: 100;
		  font-style: normal;
		}


		body {
			margin: 0 ;
			padding: 0;
			height: 100%;
			font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
			/*background: #f5a7b6;*/
			background-color: #f5a7b6;
			/*background-image: -webkit-gradient(linear, left top, left bottom, from(#ffafc4), to(#f5a7b6));
			background-image: -webkit-linear-gradient(top, #ffafc4, #f5a7b6);
			background-image: -moz-linear-gradient(top, #ffafc4, #f5a7b6);
			background-image: -o-linear-gradient(top, #ffafc4, #f5a7b6);
			background-image: -ms-linear-gradient(top, #ffafc4, #f5a7b6);
			background-image: linear-gradient(top, #ffafc4, #f5a7b6);
			filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#ffafc4', EndColorStr='#f5a7b6');*/
		}

		form {
			width: 97%;
		}

		input[type=text], input[type=url], input[type=email], input[type=tel], input[type=number], input[type=password] {
			width: 100%;
			height: 35px;
			padding:2%;
			border: none;
			outline: none;
		}

		img {
			border: none;
		}

		.clear {
			clear: both;
		}

		.wrapper {
			width: 100%;
			margin-top: 50px;
		}

		.content {
			width: 100%;
			height: auto;
			margin: auto 0;
			/*position: absolute;
			top: 5%;
			left: 50%;
			bottom: 5%;*/
			color: #656565;
			text-align: center;
		}

		.content img {
			display: block;
			margin: 0 auto;
			height: 200px;
		}

		.content h1 {
			color: #fff;
			font-family: 'mission_scriptregular';
			font-size: 54px;
			text-shadow: 1px 2px rgba(0, 0, 0, 0.24);
			font-weight: normal;
		}

		.social {
			/*text-align: center;*/
			width: 225px;
			margin: 0 auto;
		}

		.social ul {
			list-style-type: none;
			padding: 0;
		}

		.social ul li {
			font-family: "mission_scriptregular";
			font-size: 25px;
			line-height: 30px;
			text-shadow: 1px 2px rgba(0, 0, 0, 0.24);
			letter-spacing: 1px;
			color: #fff;
			float: left;
			display: inline;
		}

		.social a div {
			float: left;
			display: inline;
			margin-right: 5px;
			text-align: center;
		}

		.social a div.twitter {
			background: url('twitter.png') no-repeat;
			width: 29px;
			height: 28px;
			margin-left: 25px;
		}

		.social a div.facebook  {
			background: url('fb.png') no-repeat;
			width: 28px;
			height: 28px;
		}

		.formWrapper {
		  margin: 50px auto;
		  width: 40%;
		  clear: both;
		}
		.formWrapper .formTitleWrapper {
		  background: #adacac;
		  padding: 2px;
		  position: relative;
		  z-index: 40;
		}
		.formWrapper .formTitleWrapper .left-tail {
		  background: url("ribbon-left-tail.png") no-repeat;
		  width: 60px;
		  height: 71px;
		  position: absolute;
		  top: 8px;
		  left: -36px;
		  z-index: -2;
		}
		.formWrapper .formTitleWrapper .right-tail {
		  background: url("ribbon-right-tail.png") no-repeat;
		  width: 60px;
		  height: 70px;
		  position: absolute;
		  top: 9px;
		  right: -36px;
		  z-index: -2;
		}
		.formWrapper .formTitleWrapper .formTitle {
		  border: 2px solid #fff;
		  height: 60px;
		  background: #adacac;
		}
		.formWrapper .formTitleWrapper .formTitle h2 {
		  margin: 0;
		  font-family: "mission_scriptregular";
		  line-height: 60px;
		  text-align: center;
		  font-size: 35px;
		  font-weight: normal;
		  color: #fff;
		  text-shadow: 1px 2px rgba(0, 0, 0, 0.24);
		  letter-spacing: 1px;
		}
		.formWrapper .form {
		  background: url("paperbg.png");
		  margin: 0 24px;
		  -webkit-box-shadow: 1px 1px 3px rgba(0, 0, 1, 0.18);
		  -moz-box-shadow: 1px 1px 3px rgba(0, 0, 1, 0.18);
		  box-shadow: 1px 1px 3px rgba(0, 0, 1, 0.18);
		  padding: 20px 20px 35px 20px;
		}
		.formWrapper .form input[type=text], .formWrapper .form input[type=email] {
		  color: #ff3d7f;
		  font-family: Georgia, Times, "Times New Roman", serif;
		  font-style: italic;
		  font-size: 16px;
		  margin-bottom: 10px;
		  text-shadow: 1px 1px rgba(255, 255, 255, 0.36);
		  -webkit-border-radius: 5px;
		  -moz-border-radius: 5px;
		  border-radius: 5px;
		  background-color: rgba(0, 0, 0, 0);
		  -webkit-box-shadow: 0 0 10px rgba(251, 247, 194, 0.21), 1px 1px rgba(255, 255, 255, 0.18), inset 1px 1px 3px rgba(0, 0, 1, 0.19), inset 0 0 59px rgba(0, 0, 0, 0.25);
		  -moz-box-shadow: 0 0 10px rgba(251, 247, 194, 0.21), 1px 1px rgba(255, 255, 255, 0.18), inset 1px 1px 3px rgba(0, 0, 1, 0.19), inset 0 0 59px rgba(0, 0, 0, 0.25);
		  box-shadow: 0 0 10px rgba(251, 247, 194, 0.21), 1px 1px rgba(255, 255, 255, 0.18), inset 1px 1px 3px rgba(0, 0, 1, 0.19), inset 0 0 59px rgba(0, 0, 0, 0.25);
		}
		.formWrapper .form input[type=submit] {
		  width: 25%;
		  float: right;
		  font-family: Georgia, Times, "Times New Roman", serif;
		  font-style: italic;
		  font-size: 16px;
		  line-height: normal;
		  color: #fff;
		  padding: 5px 0;
		  background-color: #c73c66;
		  border: solid 1px #5f2d37;
		  -webkit-border-radius: 5px;
		  -moz-border-radius: 5px;
		  border-radius: 5px;
		  text-shadow: 1px 1px rgba(0, 0, 0, 0.33);
		  -webkit-box-shadow: 1px 1px rgba(0, 0, 1, 0.32), inset 1px 2px rgba(255, 255, 255, 0.13), inset 0 0 3px rgba(217, 194, 175, 0.1);
		  -moz-box-shadow: 1px 1px rgba(0, 0, 1, 0.32), inset 1px 2px rgba(255, 255, 255, 0.13), inset 0 0 3px rgba(217, 194, 175, 0.1);
		  box-shadow: 1px 1px rgba(0, 0, 1, 0.32), inset 1px 2px rgba(255, 255, 255, 0.13), inset 0 0 3px rgba(217, 194, 175, 0.1);
		}
		.formWrapper .form input[type=submit]:hover {
		  background-color: #aa3155;
		  cursor: pointer;
		}

		.formWrapper .form label {
			display: none;
		}

		.formWrapper .datefield {
			width: 105.5%;
		}

		.formWrapper .datefield .small-meta {
			clear: both;
			display: block;
			float: left;
		}

		.formWrapper .datefield .subfield {
			float: left;
			width: 31%;
			margin-right: 2%;
		}

		.ie9 .formWrapper .form label, .ie8 .formWrapper .form label, .ie7 .formWrapper .form label {
			display: block;
			text-align: left;
			color: #ff3d7f;
			font-style: italic;
		}


		.formWrapper .form .indicates-required {
			text-align: right;
			margin-bottom: 15px;
		}

		.formWrapper p.aol, .formWrapper a.aol-read-more {
			text-align: left !important;
			display: block;
			font-size: 13px;
			color: #656565;
		}

		.formWrapper a.aol-read-more {
			color: #ff3d7f;
		}

		.formWrapper .aol-message {
			display: block;
			text-align: left !important;
			font-size: 13px;
			color: #656565;
		}

		.formWrapper .aol-message a {
			color: #ff3d7f;
		}

		.formWrapper .aol-message.hidden {
			display: none;
		}

		@media all and (max-width: 1024px) and (min-width: 769px)  {
		  	.formWrapper {
				width: 60%;
			}

		  	.formWrapper input[type=submit] {
				width: 50% !important;
			}
			.formWrapper input[type=text], .formWrapper input[type=email] {
				border: 1px solid #949191;
			}
		}

		@media all and (max-width: 768px)  {
			body {
				background-image: none !important;
				background-color: #f5a7b6 !important;
			}

			.formWrapper {
				width: 80%;
			}

		  	.formWrapper input[type=submit] {
				width: 50% !important;
			}
			.formWrapper input[type=text], .formWrapper input[type=email] {
				border: 1px solid #949191;
			}
		}

		@media all and (max-width: 640px)  {
			

			.formWrapper input[type=submit] {
				width: 100% !important;
				height: 50px;
			}
		}
	</style>

</head>
<body>

	<div class="wrapper">
		<div class="content">


			<a href="http://www.behindtherail.co.uk"><img src="logo.png" alt="Behind the Rail" class="logo"></a>
			
			<h1>Exclusive Daily Deal Fashion Website <br> Unveiling Soon!</h1>
			
			<div class="social">

				<ul>
					<li>Feeling Social?</li>
					<li><a href="https://twitter.com/BehindTheRailUK" target="_blank">	<div class="twitter"></div>
					</a></li>
					<li><a href="https://www.facebook.com/BehindTheRail" target="_blank"><div class="facebook"></div></a>	</li>
				</ul>
				
			</div><!-- END social DIV -->
			

			<div class="clear"></div>

				<div class="formWrapper">
					<div class="formTitleWrapper">

						<div class="left-tail"></div>
						<div class="right-tail"></div>

						<div class="formTitle">
							<h2>Be the first to know!</h2>
						</div><!-- END formTitle DIV -->
					</div><!-- END formTitleWrapper DIV -->
					<div class="form">
						<p>Don't want to miss out? Subscribe to our mailling list to ensure you are the first to know!</p>


						<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup">
							<form action="http://behindtherail.us7.list-manage.com/subscribe/post?u=0500e2d71ee01eebaa5fc041c&amp;id=ad6184baa0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							
							<div class="mc-field-group">
								<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
							</label>
								<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address *">
							</div>
							<div class="mc-field-group">
								<label for="mce-FNAME">First Name  <span class="asterisk">*</span>
							</label>
								<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name *">
							</div>
							<div class="mc-field-group">
								<label for="mce-LNAME">Last Name  <span class="asterisk">*</span>
							</label>
								<input type="text" value="" name="LNAME" class="required" id="mce-LNAME" placeholder="Last Name *">
							</div>
							<div class="mc-field-group size1of2">
								<label for="mce-DATEOFBIRT-month">Date of Birth </label>
								<div class="datefield">
									<span class="subfield dayfield">
									<label>Day</label>
										<input type="text" pattern="[0-9]*" value="" size="2" maxlength="2" name="DATEOFBIRT[day]" id="mce-DATEOFBIRT-day" placeholder="DD">
									</span>

							        <span class="subfield monthfield">
										<label>Month</label>
							        	<input type="text" pattern="[0-9]*" value="" size="2" maxlength="2" name="DATEOFBIRT[month]" id="mce-DATEOFBIRT-month" placeholder="MM">
							        </span> 

									<span class="subfield yearfield">
										<label>Year</label>
										<input type="text" pattern="[0-9]*" value="" size="4" maxlength="4" name="DATEOFBIRT[year]" id="mce-DATEOFBIRT-year" placeholder="YYYY">
									</span>

							        <span class="small-meta nowrap">(dd / mm / yyyy)</span>

									<div class="fake-date"><input type="hidden" class=" date" id="DATEOFBIRT-fake-date" value=""></div>
								</div>
							</div>

							<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>

							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
								</div>	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							</form>
						</div>

						<!--End mc_embed_signup-->
						<div class="clear"></div>
						
						<p class="aol"><strong>Important Information</strong></p>
						<p class="aol">Using an AOL email Address?</p>
						<a href="#" class="aol-read-more">Read More &raquo;</a>

						<div class="aol-message hidden">
							<p>We have been experiencing issues with a small number of AOL email addresses not receiving verification emails.
							</p>

							<p>If you have an AOL email address and would like to join our mailing list, then please email <a href="mailto:info@behindtherail.co.uk?subject=Please sign me up to the Behind the Rail Mailing List">info@behindtherail.co.uk</a> with your <strong>First Name, Last Name, Email Address</strong> and <strong>Date of Birth</strong> and we will make sure you don't miss our exclusive daily fashion deals.</p>
						</div>

					</div><!-- END form DIV -->

					

				</div><!-- END formwrapper DIV -->


		</div><!-- END Content DIV -->
		<div class="clear"></div>
	</div><!-- END wrapper DIV -->
	
</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('a.aol-read-more').on('click', function(event) {
			event.preventDefault();
			$('.aol-message').toggleClass('hidden');
		});
	});
</script>
