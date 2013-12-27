<?php
/*
Template Name: Donate Page
*/
	get_header(); 
?>

	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
	?>

		<section class="content-background" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>')">
			<div class="container content-page">
				<div class="row">
					<div class="span8 push1">

						<?php
									
									the_title('<h2>','</h2>');
									the_content();
									//
								} // end while
							} // end if
						?>		

						 <p>Choose your Donation Amount</p>
						 <div id="donationAmount">
							 <a href="#" class="btn btn-warning btn-large">$12.50</a>
							 <a href="#" class="btn btn-warning btn-large">$25.00</a>
							 <a href="#" class="btn btn-warning btn-large">$37.50</a>
							 <a href="#" class="btn btn-warning btn-large">$50.00</a>
						 </div>
						 <p>Or your own custom amount</p>
						 <div>
			 				<input type="text" class="input-large" id="customAmount" placeholder="$10.00">
						 </div>
						 <p>How often do you want to make your donation?</p>
						 <div id="donationFrequency">
							 <a href="#" class="btn btn-warning btn-large">One Time</a>
							 <a href="#" class="btn btn-warning btn-large">Monthly</a>
							 <a href="#" class="btn btn-warning btn-large">Quarterly</a>
							 <a href="#" class="btn btn-warning btn-large">Annually</a>
						 </div>
						 <div>

						<br>
						<p>Thank you!  Click below on the donate button.  You will be taken to Paypal to process your donation.</p>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" id="donationForm">
							<!-- 	if subscriptions then cmd is _xclick-subscriptions
								<input type="hidden" name="a3" value="5.00">  
							    <input type="hidden" name="p3" value="1">  
							    <input type="hidden" name="t3" value="M"> 
						 	-->
						 	<input type="hidden" name="a3" value="5.00">
						 	<input type="hidden" name="p3" value="12">
						 	<input type="hidden" name="t3" value="M">
						 	<input type="hidden" name="src" value="1">
							<input type="hidden" name="cmd" value="_donations">
							<input type="hidden" name="item_name" value="Donate to Casa Caridad">  
							<input TYPE="hidden" name="currency_code" value="USD">
							<input TYPE="hidden" name="charset" value="utf-8">
							<input type="hidden" name="amount" value="12.50">
							<input type="hidden" name="business" value="info@casacaridad.org">  
							<input TYPE="hidden" name="return" value="http://casacaridad.org">
							<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">				 	
						 </div>

						</form>
					</div>
				</div>
			</div>
		</section>
<script>
// refer to https://developer.paypal.com/webapps/developer/docs/classic/paypal-payments-standard/integration-guide/Appx_websitestandard_htmlvariables/
	(function($){

		var subscriptionAmount;

		$('#donationAmount a, #donationFrequency a').click(function(e){

			// For selecting amounts
			e.preventDefault();

			$(this).siblings().removeClass('btn-danger');
			$(this).addClass('btn-danger');

			var id = $(this).closest("div").attr("id");

			// Change donation amount if it selected
			if (id === "donationAmount") {
				subscriptionAmount = $(this).text();

				subscriptionAmount = subscriptionAmount.substring(1, subscriptionAmount.length);

				$('input[name="amount"], input[name="a3"]').attr("value",subscriptionAmount);

			}

			buttonIndex = $(this).index();

			// IF they click on subscription then change model to subscription
			if (id === "donationFrequency" && buttonIndex>0) {

				$('input[name="cmd"]').attr('value','_xclick-subscriptions');

				$('input[name="a3"]').attr('value',subscriptionAmount);

				if (buttonIndex === 1) {
					$('input[name="t3"]').attr('value',"M");
					$('input[name="p3"]').attr('value',"1");
				}

				if (buttonIndex === 2) {
					$('input[name="t3"]').attr('value',"M");
					$('input[name="p3"]').attr('value',"3");
				}

				if (buttonIndex === 3) {
					$('input[name="t3"]').attr('value',"Y");
					$('input[name="p3"]').attr('value',"1");
				}

			}
			// If they switch back to one time donation
			if (id === "donationFrequency" && buttonIndex === 0) {

				$('input[name="cmd"]').attr('value','_donations');
			}
		})

		// For custom typed subscription prices
		
		$( "#customAmount" ).keyup(function( event ) {

			subscriptionAmount = $("#customAmount").val().replace("$",'');
			console.log(subscriptionAmount)
			$('input[name="a3"]').attr('value',subscriptionAmount);
		})

	})(jQuery)
</script>
<?php
	get_footer();
?>