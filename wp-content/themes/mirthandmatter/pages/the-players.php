<?php
/**
/*
Template Name: The Players
*/

get_header();
?>
	<main id="the-players" class="site-main">

				<h1>The Players</h1>
				
				<div class="top-quote">
					<p class="shakespeare-quote"><span class="quotation-mark quote-start">"</span>Good, my lord, will you see the players well bestowed? Do you hear, let them be well used; for they are the abstract and brief chronicles of the time.<span class="quotation-mark quote-end">"</span></p>
					<p class="shakespeare-attribute">Hamlet Act II, Scene ii</p>
				</div>
				
				<div id="player-wrap">
					<?php 
	
					// check for rows (parent repeater)
					if(have_rows('the_players')): ?>
						
						<?php while(have_rows('the_players')): the_row() ?>
	
							<?php 
							$names = get_sub_field('name');
							$image = get_sub_field('image');
							$bio = get_sub_field('bio');
							$introduced = get_sub_field('first_introduced');
							$favorite = get_sub_field('favorite_shakespeare_play');
							$quote = get_sub_field('favorite_shakespeare_quote__insult');
							$icon = get_sub_field('icon');
							?>
							<div class="player">
									<div class="player-image">
									<?php echo wp_get_attachment_image( $image, 'player-image' ); ?>
									</div>
									<div class="player-text-wrap">
										<h2 class="player-name"><?php echo $names ?></h2>
										<div class="container">
											<p class="switch-mirth">Mirth</p>
											<label class="switch"><input class="mirth-matter-check" type="checkbox" />
												<div></div>
											</label>
											<p class="switch-matter">Matter</p>
										</div>
										<div class="mirth-matter-wrap">
											<p class="player-bio"><?php echo $bio ?></p>
											<div class="player-mirth">
												<h3>How were you first introduced to the bard?</h3>
												<p><?php echo $introduced ?></p>
												<h3>Favorite Shakespeare Play</h3>
												<p><?php echo $favorite ?></p>
												<h3>Favorite Shakespeare Quote / Insult</h3>
												<p><?php echo $quote ?></p>
											</div>
										</div>
									</div>

									<?php /* <img class="<?php echo $icon ?> player-icon" src="<?php bloginfo('template_directory');?>/images/the-players/<?php echo $icon ?>.png"></img> */ ?>
							</div>

	
						<?php endwhile; ?>
					<?php endif; ?>	
				</div>	

	</main><!-- #main -->

<?php
get_footer();
