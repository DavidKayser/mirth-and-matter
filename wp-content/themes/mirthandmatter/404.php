<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mirth_&_Matter
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Page can&rsquo;t be found.', 'mirthandmatter' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>Click <a href="<?php echo get_home_url(); ?>">HERE</a> to return home</p>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
		<img class="line-seperator line-transform" src="<?php bloginfo('template_directory');?>/images/contact/line-seperator.png" alt="line seperator" />

	</main><!-- #main -->

<?php
get_footer();
