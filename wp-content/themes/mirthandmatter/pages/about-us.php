<?php
/**
/*
Template Name: About Us
*/

get_header();
?>

	<main id="about-us" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>
			<h1>About Us</h1>
			
			<div class="top-quote">
				<p class="shakespeare-quote"><span class="quotation-mark quote-start">"</span>A great while ago the world begun, With hey, ho, the wind and the rain; But that's all one, our play is done, And we'll strive to please you every day.<span class="quotation-mark quote-end">"</span></p>
				<p class="shakespeare-attribute">Twelfth Night Act V, Scene i</p>
			</div>
			
			<?php $image = get_field('about_us_image'); ?>
			<div id="about-image">
				<?php echo wp_get_attachment_image( $image, 'full' ); ?>
			</div>
			
			<div id="about-text">
				<p><?php the_field('about_us_text'); ?></p>
			</div>
			
			<img class="line-seperator line-transform" src="<?php bloginfo('template_directory');?>/images/contact/line-seperator.png" alt="line seperator" />

		<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_footer();
