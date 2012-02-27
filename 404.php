<?php
/**
 * @package Communica
 * @subpackage CommunicaTheme
 */

get_header();
?>
	    <div id="main">
			<div class="box-main curved light" id="post-<?php the_ID(); ?>"><h1>Error 404 - Siden er ikke funnet</h1>
			<p>Siden du leter etter er ikke funnet. Pr&oslash;v &aring; benytte seg av s&oslash;kemulighetene, eller ta et dykk i arkivet.</p>
			</div>
		</div>

<?php get_sidebar('news'); ?>

<?php get_footer(); ?>