<?php
/**
 * @package Communica
 * @subpackage CommunicaTheme
 */

get_header();
?>

	    <div id="main">
			<div class="box-main curved light" id="post-<?php the_ID(); ?>">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1>Archive for <?php the_time('F, Y'); ?></h1>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1>Archive for <?php the_time('Y'); ?></h1>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1>Author Archive</h1>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1>Blog Archives</h1>
 	  <?php } ?>


	<?php $i=0; while (have_posts()) : the_post(); ?>
				<div class="newslist <?php echo ($i % 2) ? "middlelight curved" : "middlelight curved"; // her er det klargjort for alternerende css, men fant ingen farger som passet godt nok?>">
					<div>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Direktelink til <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<div class="infoline"><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/user_edit.png"> <?php the_author() ?> <img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/date.png"> <?php the_time('j. F Y') ?> <img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/tag_yellow.png"> <?php the_category(', ') ?> <?php edit_post_link('<img src="'. get_option('siteurl') . '/wp-content/themes/communica/img/famfamfam/page_white_edit.png"> Rediger', '', ''); ?></div>
						<?php the_post_thumbnail(); ?>
						<?php
						$content = get_the_content();
						$content = strip_tags($content);
						echo substr($content, 0, 350);
						?>...
						<div>
							<p class="alignleft"><a href="<?php the_permalink() ?>" rel="bookmark" title="Direktelink til <?php the_title_attribute(); ?>">&raquo; Les mer... </a></p>
							<p class="alignright"><img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/communica/img/famfamfam/comments.png"><?php comments_popup_link('Ingen kommentarer', '1 kommentar', '% kommentarer '); ?></p>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<?php $i++;  endwhile; ?>

		<div>
			<p class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></p>
			<p class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
		</div>

		<div class="clear">
			<a href="<?php bloginfo('wpurl'); ?>/nyheter/" rel="bookmark" title="Nyheter">&raquo; Tilbake til nyhetsforsiden... </a>
		</div>


	<?php else :
?><h1>S&oslash;keresultater</h1><?php
		if ( is_category() ) { // If this is a category archive
			printf("<p>Beklager, men det er ingen innlegg i %s kategorien enda.</p>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<p>Beklager, men det er ingen innlegg publisert p&aring; denne datoen.</p>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<p>Beklager, men det er ingen innlegg skrevet av %s enda.</p>", $userdata->display_name);
		} else {
			echo("<p>Ingen innlegg funnet.</p>");
		}
		get_search_form();

	endif;
?>

	</div> <!-- box-main -->
	</div> <!-- main -->

<?php get_sidebar('news'); ?>

<?php get_footer(); ?>
