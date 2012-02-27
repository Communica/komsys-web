<?php
/**
 * @package Communica
 * @subpackage CommunicaTheme
 */

get_header();
?>

	    <div id="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="box-main curved light" id="post-<?php the_ID(); ?>"><h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
				<div class="curved-box-text">
					<p>
					<?php the_content(); ?>
					</p>

					<p class="postmetadata alt">
						<small>
							Denne saken ble publisert
							<?php /* This is commented, because it requires a little adjusting sometimes.
								You'll need to download this plugin, and follow the instructions:
								http://binarybonsai.com/wordpress/time-since/ */
								/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
							<?php the_time('l') ?> den <?php the_time('j. F Y') ?> klokken <?php the_time() ?> og er arkivert under <?php the_category(', ') ?>.
							Du kan f&oslash;lge nye kommentarer til denne nyhetssaken gjennom v&aring;r <?php post_comments_feed_link('RSS 2.0'); ?> feed.

							<?php if ( comments_open() && pings_open() ) {
								// Both Comments and Pings are open ?>
								Du kan ogs&aring; <a href="#respond">legge igjen en kommentar</a>.

							<?php } elseif ( !comments_open() && pings_open() ) {
								// Only Pings are Open ?>
								Kommentarer er dessverre stengt.

							<?php } elseif ( comments_open() && !pings_open() ) {
								// Comments are open, Pings are not 
//								You can skip to the end and leave a response. Pinging is currently not allowed.?>

							<?php } elseif ( !comments_open() && !pings_open() ) {
								// Neither Comments, nor Pings are open 
//								Both comments and pings are currently closed.?>
			  				<?php } ?>

						</small>
					</p>
					<?php edit_post_link('&raquo; Rediger denne siden...', '<p>', '</p>'); ?>
				</div>
			</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>
			<div class="box-main curved light"><h1>Beklager</h1>
				<p>Vi beklager, men vi fant ingenting i arkivet som passer til ditt s&oslash;k.</p>
			</div>

<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
