<?php
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
							?>	
		
						</div>
					</div>
				</div>	
			</section>

<?php
		} // end while
	} // end if	

	get_footer(); 
?>