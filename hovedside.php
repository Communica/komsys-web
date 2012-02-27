<?php
/**
 * @package Communica
 * @subpackage CommunicaTheme
 */

 /*
Template Name: Hovedside
*/

get_header(); ?>

		<div id="main-nocol">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="box-top curved middle" id="post-<?php the_ID(); ?>"><h1>Velkommen til Communica</h1>
				<div class="curved-box-text">
				<p>
				<?php the_content(); ?>
				</p>
				<?php edit_post_link('&raquo; Rediger denne siden...', '<p>', '</p>'); ?>
				</div>
			</div>

			<?php endwhile; endif; ?>

			<div id="partners"></div>

			<div class="box-bottom-leftbig curved light">
				<h1>Siste nytt fra Communica</h1>
				<?php
				 $lastposts = get_posts('numberposts=3');
				 $i = 1;
				 foreach($lastposts as $post) :
					setup_postdata($post);
					?> 
				<div class="newslist <?php echo ($i % 2) ? "middlelight curved" : "middlelight curved"; // her er det klargjort for alternerende css, men fant ingen farger som passet godt nok?>">
					<div>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Direktelink til <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<div class="infoline"><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/user_edit.png"> <?php the_author() ?> <img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/date.png"> <?php the_time('j. F Y') ?> <img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/tag_yellow.png"> <?php the_category(', ') ?> <?php edit_post_link('<img src="'. get_option('siteurl') . '/wp-content/themes/communica/img/famfamfam/page_white_edit.png"> Rediger', '', ''); ?></div>
						<?php the_post_thumbnail(); ?>
						<?php
						$content = get_the_content();
						$content = strip_tags($content);
						echo substr($content, 0, 200);
						?>...
						<div>
							<p class="alignleft"><a href="<?php the_permalink() ?>" rel="bookmark" title="Direktelink til <?php the_title_attribute(); ?>">&raquo; Les mer... </a></p>
							<p class="alignright"><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/comments.png"><?php comments_popup_link('Ingen kommentarer', '1 kommentar', '% kommentarer '); ?></p>
						</div>
					</div>
					<div class="clear"></div>
				</div>
					<?php $i++; endforeach; ?>
				<p>
				<a href="<?php bloginfo('wpurl'); ?>/nyheter/" rel="bookmark" title="Nyheter">&raquo; Vis komplett oversikt... </a>
				</p>
			</div>		

			<div class="box-bottom-rightbig curved dark">
				<h1>Aktivitetskalender</h1>
<?php 
 // henter de tre neste eventene for inneværende måned.
$lastposts = get_events(3);
 foreach($lastposts as $post) :
 setup_postdata($post);

// let's make time
$start_time		= strtotime(get_post_meta( $post->ID, '_EventStartDate', true )); 
$EventCity		= get_post_meta( $post->ID, '_EventCity', true );
$EventAddress	= get_post_meta( $post->ID, '_EventAddress', true );
$EventCountry	= get_post_meta( $post->ID, '_EventCountry', true );
$EventState		= get_post_meta( $post->ID, '_EventState', true );
$EventProvince	= get_post_meta( $post->ID, '_EventProvince', true );
$EventVenue		= get_post_meta( $post->ID, '_EventVenue', true );
$EventCost		= get_post_meta( $post->ID, '_EventCost', true );

$city = true;
?>

	<div class="newslist <?php echo ($i % 2) ? "lightdark curved" : "lightdark curved"; // her er det klargjort for alternerende css, men fant ingen farger som passet godt nok?>">
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Direktelink til <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_post_thumbnail(); ?></p>
			<ul class="aktivitetsinfo">
				<li>
					<img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/date.png"> <?php echo date('j. F Y', $start_time); ?> 
					<img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/time.png"> <?php echo date('H:i', $start_time); ?>
					<?php edit_post_link('<img src="'. get_option('siteurl') . '/wp-content/themes/communica/img/famfamfam/page_white_edit.png"> Rediger', '', ''); ?>
				</li>
				<li><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/house.png"> <?=$EventAddress;?>, <?=$EventCity;?></li>
				<li><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/door.png"> M&oslash;tested: <?=$EventVenue;?></li>
				<li><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/map.png"> 
				<a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=<?=$EventAddress;?>+<?=$EventCity;?>+<?=$EventProvince;?>+<?=$EventCountry;?>" target="_new">Vis p&aring; kart</a></li>
<!--			<li><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/money.png"> Pris: <?php echo ($EventCost) ? $EventCost : "Gratis";?></li> -->
			</ul>

			<?php
			/*			OVERFLØDIG
			$content = get_the_content();
			$content = strip_tags($content);
			echo substr($content, 0, 50);
			echo "... ";
			*/
			?><p><a href="<?php the_permalink() ?>" rel="bookmark" title="Direktelink til <?php the_title_attribute(); ?>">&raquo; Mer informasjon...</a></p>
			<div class="clear"></div>
	</div>

 <?php endforeach; ?>

<p>
<a href="<?php bloginfo('wpurl'); ?>/aktivitetskalender/" rel="bookmark" title="Aktivitetskalender">&raquo; Vis komplett oversikt... </a>
</p>


			</div>

		</div>

<?php get_footer(); ?>
