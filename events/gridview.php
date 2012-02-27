<?php

	global $spEvents;

	$eventsURL = trailingslashit( WP_PLUGIN_URL ) . 'the-events-calendar/resources/';
	wp_enqueue_script('sp-events-calendar-script', $eventsURL.'events.js', array('jquery') );
	$eventCSS = get_bloginfo('template_url') . '/events/events.css';
	wp_enqueue_style('sp-events-calendar-style', $eventCSS);
	
	include (TEMPLATEPATH.'/header.php'); ?>

	    <div id="main-nocol">

		
		<div class="box-full curved light">	

	<div id="tec-content" class="grid">

		<div id='tec-events-calendar-header' class="clearfix">

			<h1><?php _e('Calendar of Events', $spEvents->pluginDomain) ?></h1>



			<?php get_jump_to_date_calendar( "tec-" ); ?>



<!--			<span class='tec-calendar-buttons'> 

				<a class='tec-button-off' href='<?php echo events_get_listview_link(); ?>'><?php _e('Event List', $spEvents->pluginDomain)?></a>

				<a class='tec-button-on' href='<?php echo events_get_gridview_link(); ?>'><?php _e('Calendar', $spEvents->pluginDomain)?></a>

			</span>
-->


		</div><!--#tec-events-calendar-header-->



		<?php event_grid_view( ); // See the plugins/the-events-calendar/views/table.php template for customization ?>	

	</div>

</div>
</div>


<?php

	include (TEMPLATEPATH.'/footer.php');