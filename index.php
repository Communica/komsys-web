<?php
/**
 * @package Communica
 * @subpackage CommunicaTheme
 */

//History:
/*
	technocake	09.10.2010 	Made more posts to the frontpage, and removed event calendar.

	TODO: do that above. Need to make the posts be made from an loop, and not an if /elseif structure!
*/

//#################################
//	CONFIG
//################################

$posts = 5;	//Poster på framsiden

?>

<?php get_header(); ?>
	    <div id="main">

			<?php 
			// Teller for &aring; vise nyhetssiden slik vi &oslash;nsker
			$i = 0;
			?>

			<?php if ( have_posts() ) : while ( $i<$posts ) : the_post(); ?>

			<?php if($i==0){
				// Post 1
				?>
			<div class="box-top curved middle" id="post-<?php the_ID(); ?>"><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Direkte link til <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="infoline"><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/user_edit.png"> <?php the_author() ?> <img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/date.png"> <?php the_time('j. F Y') ?> <img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/tag_yellow.png"> <?php the_category(', ') ?>
				<?php edit_post_link('<img src="'. get_option('siteurl') . '/wp-content/themes/communica/img/famfamfam/page_white_edit.png"> Rediger', '', ''); ?></div>
				<div class="curved-box-text">
					<?php the_post_thumbnail(); ?>
					<p>
					<?php the_content(); ?>
					</p>
					<div>
						<p class="alignleft"><a href="<?php the_permalink() ?>" rel="bookmark" title="Direktelink til <?php the_title_attribute(); ?>">&raquo; Les mer... </a></p>
						<p class="alignright"><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/comments.png"><?php comments_popup_link('Ingen kommentarer', '1 kommentar', '% kommentarer '); ?></p>
					</div>
				</div>
			</div>

			<?
			}
			else if($i==1){
				// Post 2
				?>
			<div class="box-bottom-2x curved light" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Direkte link til <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="infoline small"><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/user_edit.png"> <?php the_author() ?> <img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/date.png"> <?php the_time('j. F Y') ?> <img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/tag_yellow.png"> <?php the_category(', ') ?>
				<?php edit_post_link('<img src="'. get_option('siteurl') . '/wp-content/themes/communica/img/famfamfam/page_white_edit.png"> Rediger', '', ''); ?></div>
<div class="curved-box-text">
				<?php the_post_thumbnail(); ?>
				<p>
					<?php
					$content = get_the_content();
					$content = strip_tags($content);
					echo substr($content, 0, 400);
					?>... 
					<div>
						<p class="alignleft"><a href="<?php the_permalink() ?>" rel="bookmark" title="Direktelink til <?php the_title_attribute(); ?>">&raquo; Les mer... </a></p>
						<p class="alignright"><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/comments.png"><?php comments_popup_link('Ingen kommentarer', '1 kommentar', '% kommentarer '); ?></p>
					</div>
				</p>
</div>
			</div>
			<?
			}
			else if($i==2){
				// Post 3
				?>
			<div class="box-bottom-2x curved light" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Direkte link til <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="infoline small"><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/user_edit.png"> <?php the_author() ?> <img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/date.png"> <?php the_time('j. F Y') ?> <img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/tag_yellow.png"> <?php the_category(', ') ?>
				<?php edit_post_link('<img src="'. get_option('siteurl') . '/wp-content/themes/communica/img/famfamfam/page_white_edit.png"> Rediger', '', ''); ?></div>
<div class="curved-box-text">
				<?php the_post_thumbnail(); ?>
				<p>
					<?php
					$content = get_the_content();
					$content = strip_tags($content);
					echo substr($content, 0, 400);
					?>... 
					<div>
						<p class="alignleft"><a href="<?php the_permalink() ?>" rel="bookmark" title="Direktelink til <?php the_title_attribute(); ?>">&raquo; Les mer... </a></p>
						<p class="alignright"><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/comments.png"><?php comments_popup_link('Ingen kommentarer', '1 kommentar', '% kommentarer '); ?></p>
					</div>
				</p>
</div>
			</div>
			<?php
					}
				$i++;
			?>

<?php endwhile; else: ?>
<p><?php _e('Beklager, ingen treff p&aring; ditt s&oslash;k.'); ?></p>
<?php endif; ?>


</div>

<?php get_sidebar('news'); ?>

<?php get_footer(); ?>
