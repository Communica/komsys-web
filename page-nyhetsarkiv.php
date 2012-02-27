<?php
/**
 * @package Communica
 * @subpackage CommunicaTheme
 */

/*
Template Name: Standardmal m/nyhetsarkiv
*/
?>

<?php get_header(); ?>

	<div id="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="box-main curved light" id="post-<?php the_ID(); ?>"><h1><?php the_title(); ?></h1>
			<div class="curved-box-text">
			<p>
			<?php the_content(); ?>
			</p>
			<?php edit_post_link('&raquo; Rediger denne siden...', '<p>', '</p>'); ?>
			</div>
		</div>

		<?php endwhile; endif; ?>

	</div>

<?php get_sidebar('news'); ?>

<?php get_footer(); ?>
