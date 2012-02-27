<?php 

	$eventsURL = trailingslashit( WP_PLUGIN_URL ) . 'the-events-calendar/resources/';
	wp_enqueue_script('sp-events-calendar-script', $eventsURL.'events.js', array('jquery') );
	$eventCSS = get_bloginfo('template_url') . '/events/events.css';
	wp_enqueue_style('sp-events-calendar-style', $eventCSS);
	
	include (TEMPLATEPATH.'/header.php'); ?>

	<?php the_post(); global $post, $spEvents; ?>

<div id="main">
<div class="box-main curved light"><h1><?php the_title(); ?></h1>


<!--				<span class="back"><a href="<?php echo events_get_gridview_link(); ?>"><?php _e('&laquo; Back to Events', $this->pluginDomain); ?></a></span> -->

<!--				<h2 class="entry-title"><?php the_title() ?></h2> -->
<div class="curved-box-text">

<!--				<?php if (the_event_end_date() > time()  ) { ?><small><?php  _e('This event has passed.', $spEvents->pluginDomain) ?></small> <?php } ?> -->

				<div id="tec-event-meta">

					<dl class="column">

						<dt><?php _e('Start:', $spEvents->pluginDomain) ?></dt> 

							<dd><?php echo the_event_start_date(); ?></dd>

						<?php if (the_event_start_date() !== the_event_end_date() ) { ?>

							<dt><?php _e('End:', $spEvents->pluginDomain) ?></dt>

							<dd><?php echo the_event_end_date();  ?></dd>						

						<?php } ?>

						<?php if ( the_event_cost() ) : ?>

							<dt><?php _e('Cost:', $spEvents->pluginDomain) ?></dt>

							<dd><?php echo the_event_cost(); ?></dd>

						<?php endif; ?>

					</dl>

					<dl class="column">

						<?php if(the_event_venue()) : ?>

						<dt><?php _e('Venue:', $spEvents->pluginDomain) ?></dt> 

							<dd><?php echo the_event_venue(); ?></dd>

						<?php endif; ?>

						<?php if(the_event_address()) : ?>

						<dt><?php _e('Address:', $spEvents->pluginDomain) ?></dt>

							<dd>

							<?php $address = the_event_address();

							$address .= (the_event_city())?  ', ' . the_event_city() : '';
							$address = str_replace(' ,', ',', $address);
							echo $address;
							$googleaddress = str_replace(' ', '+', $address);

							 ?>

							</dd>

						<?php endif; ?>

					</dl>

				</div>

				<div class="entry">
				<?php the_post_thumbnail( 'single-post-thumbnail' ); ?>

					<?php the_content() ?>	

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

				<?php if(the_event_address()) { event_google_map_embed(); } ?>

			</div>






	</div>
			<?php if(eventsGetOptionValue('showComments','no') == 'yes'){ comments_template();} ?>
	</div>

	

<?php

	include (TEMPLATEPATH.'/sidebar.php');

	include (TEMPLATEPATH.'/footer.php');