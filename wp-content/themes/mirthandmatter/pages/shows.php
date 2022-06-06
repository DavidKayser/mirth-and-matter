<?php
/**
/*
Template Name: Shows
*/

get_header();
?>

	<main id="shows" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>
			<h1>Shows</h1>
			<div class="top-quote">
				<p class="shakespeare-quote"><span class="quotation-mark quote-start">"</span>Is there no play, To ease the anguish of a torturing hour?<span class="quotation-mark quote-end">"</span></p>
				<p class="shakespeare-attribute">A Midsummer Night’s Dream Act V, Scene i</p>
			</div>
			<div class="shows-text">
				<p><?php the_field('shows_page_description'); ?></p>
			</div>
			
			<div id="show-wrap">
				<?php 

				// check for rows (parent repeater)
				if(have_rows('shows')): ?>
					
					<?php while(have_rows('shows')): the_row() ?>

						<?php 
						$showName = get_sub_field('show_name');
						$showImage = get_sub_field('show_image');
						$description = get_sub_field('show_description');
						$link = get_sub_field('ticket_link');
						?>
						<div class="show">
							<div class="show-image">
								<?php echo wp_get_attachment_image( $showImage, 'full' ); ?>
							</div>
							<div class="show-text-wrap">
								<h2 class="show-name"><?php echo $showName ?></h2>
								<p class="show-description"><?php echo $description ?></p>
								<p class="show-link"><a href="<?php echo $link ?>">Reserve Ticket(s)</a></p>
							</div>
						</div>


					<?php endwhile; ?>
				<?php endif; ?>	
				
			</div>	

		<?php endwhile; ?>

	</main><!-- #main -->

<?php
get_footer();
