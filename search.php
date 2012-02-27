<?php
/**
 * @package Communica
 * @subpackage CommunicaTheme
 */

get_header(); ?>

	    <div id="main">
			<div class="box-main curved light" id="post-<?php the_ID(); ?>">

			<?php if (have_posts()) : ?>

				<h1>S&oslash;keresultater</h1>

				<?php while (have_posts()) : the_post(); ?>

					<div <?php post_class() ?>>
						<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Direktelink til <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<small><?php the_time('l, F jS, Y') ?></small>

						<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> publisert i <?php the_category(', ') ?> | <?php edit_post_link('Rediger', '', ' | '); ?>  <?php comments_popup_link('Ingen kommentarer &#187;', '1 kommentar &#187;', '% kommentarer &#187;'); ?></p>
					</div>

				<?php endwhile; ?>

				<div class="navigation">
					<div class="alignleft"><?php next_posts_link('&laquo; Eldre nyheter') ?></div>
					<div class="alignright"><?php previous_posts_link('Nyere nyheter &raquo;') ?></div>
				</div>

			<?php else : ?>
				<h1>S&oslash;keresultater</h1>
				<p>Fant ingenting som passet til ditt s&oslash;k. Kanskje du skal pr&oslash;ve ett annet s&oslash;keord?</p>
				<?php get_search_form(); ?>

			<?php endif; ?>

			</div>
		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
