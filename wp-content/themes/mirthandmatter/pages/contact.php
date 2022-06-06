<?php
/**
/*
Template Name: Contact
*/

get_header();
?>

	<main id="contact" class="site-main">
		
		<?php while ( have_posts() ) : the_post(); ?>
			<h1>Contact us</h1>
			<div class="top-quote">
				<p class="shakespeare-quote"><span class="quotation-mark quote-start">"</span>I do desire we may be better strangers.<span class="quotation-mark quote-end">"</span></p>
				<p class="shakespeare-attribute">As You Like It Act III, Scene ii</p>
			</div>
			
			
			
			<div id="contact-paper">
				<div id="paper-inside">
					<div id="paper-left"></div>
					<div class="contact-text">
					<img class="line-seperator" src="<?php bloginfo('template_directory');?>/images/contact/line-seperator.png" alt="line seperator" />
						<p><?php the_field('contact_text'); ?></p>
						<img id="raven" src="<?php bloginfo('template_directory');?>/images/contact/raven.png" alt="raven" />
					</div>
					<?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]'); ?>
					<img class="line-seperator line-transform" src="<?php bloginfo('template_directory');?>/images/contact/line-seperator.png" alt="line seperator" />
					<div id="paper-right"></div>
				</div>
			</div>

		<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_footer();
