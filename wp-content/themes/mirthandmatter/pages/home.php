<?php
/**
/*
Template Name: Home
*/

get_header();
?>

	<main id="home" class="site-main">	
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="home-collage">
				<table id="collage-logo-wrapper">
				  <tr>
				    <td>
						<img id="collage-logo" src="<?php bloginfo('template_directory');?>/images/home/logo-white-large.png" />
				    </td>
				  </tr>
				</table>
			</div>
			
			<a href="#home-text"><div id="down-arrow" class="bounce"></div></a>
			<h1 id="home-h1"><?php the_field('home_page_title'); ?></h1>
			<div id="home-text">
				<p><?php the_field('home_page_text'); ?></p>
				<h2><?php the_field('home_closing_text'); ?></h2>
			</div>
		<?php endwhile; ?>
		
		<img class="line-seperator line-transform" src="<?php bloginfo('template_directory');?>/images/contact/line-seperator.png" alt="line seperator" />

	</main><!-- #main -->

<?php
get_footer();
