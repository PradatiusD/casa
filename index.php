<?php
	get_header();
?>

<section class="hero">
	<div class="container">
		<div class="row">
			<div class="span12">
				<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); 
							//
							the_title();
							the_content();
							//
						} // end while
					} // end if
				?>			
			</div>
		</div>
	</div>	
</section>

<?php
	get_footer();
?>