<?php
/**
 * @package Communica
 * @subpackage CommunicaTheme
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

	    <div id="main">
			<div class="box-main curved light" id="post-<?php the_ID(); ?>">

<?php get_search_form(); ?>

<h1>Arkiv sortert etter m&aring;ned:</h1>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>Arkiv sortert etter kategori</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

			</div>
		</div>

<?php get_footer(); ?>
