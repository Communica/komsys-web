<?php
/**
 * @package Communica
 * @subpackage CommunicaTheme
 */

/*
Template Name: Styret
*/
?>

<?php get_header(); ?>
<?php $post_id = $post->ID; ?>

	    <div id="main">
			<div class="box-main curved light">
				<h1><?php the_title(); ?></h1>
				<div class="curved-box-text">
				<p><?php the_content(); ?></p>
				<?php edit_post_link('&raquo; Rediger denne siden...', '<p>', '</p>'); ?>
				</div>
			</div>

			<div class="box-main curved light middle">
				<h1>Leder</h1>
				<img src="<?=get_post_meta($post_id, 'Leder-bildeurl', true); ?>" alt="Communica" class="styret-profilbilde" />
				<p>
				<h3><?=get_post_meta($post_id, 'Leder-navn', true); ?></h3>
				<div class="styret-tabell">
					<div class="styret-tabell-v"><strong>Klasse</strong></div>
					<div class="styret-tabell-m"><strong>Telefon</strong></div>
					<div class="styret-tabell-h"><strong>E-post</strong></div>
				</div>
				<br />
				<div class="styret-tabell">
					<div class="styret-tabell-v"><?=get_post_meta($post_id, 'Leder-klasse', true); ?></div>
					<div class="styret-tabell-m"><?=get_post_meta($post_id, 'Leder-tlf', true); ?></div>
					<div class="styret-tabell-h"><?=get_post_meta($post_id, 'Leder-epost', true); ?></div>
				</div>
				</p>
			</div>

			<div class="box-main curved light">
				<h1>Nestleder</h1>
				<img src="<?=get_post_meta($post_id, 'Nestleder-bildeurl', true); ?>" alt="Communica" class="styret-profilbilde" />
				<p>
				<h3><?=get_post_meta($post_id, 'Nestleder-navn', true); ?></h3>
				<div class="styret-tabell">
					<div class="styret-tabell-v"><strong>Klasse</strong></div>
					<div class="styret-tabell-m"><strong>Telefon</strong></div>
					<div class="styret-tabell-h"><strong>E-post</strong></div>
				</div>
				<br />
				<div class="styret-tabell">
					<div class="styret-tabell-v"><?=get_post_meta($post_id, 'Nestleder-klasse', true); ?></div>
					<div class="styret-tabell-m"><?=get_post_meta($post_id, 'Nestleder-tlf', true); ?></div>
					<div class="styret-tabell-h"><?=get_post_meta($post_id, 'Nestleder-epost', true); ?></div>
				</div>
				</p>
			</div>
			
			<div class="box-main curved light middle">
				<h1>Sekret&aelig;r</h1>
							<img src="<?=get_post_meta($post_id, 'Sekretaer-bildeurl', true); ?>" alt="Communica" class="styret-profilbilde" />
				<p>
				<h3><?=get_post_meta($post_id, 'Sekretaer-navn', true); ?></h3>
				<div class="styret-tabell">
					<div class="styret-tabell-v"><strong>Klasse</strong></div>
					<div class="styret-tabell-m"><strong>Telefon</strong></div>
					<div class="styret-tabell-h"><strong>E-post</strong></div>
				</div>
				<br />
				<div class="styret-tabell">
					<div class="styret-tabell-v"><?=get_post_meta($post_id, 'Sekretaer-klasse', true); ?></div>
					<div class="styret-tabell-m"><?=get_post_meta($post_id, 'Sekretaer-tlf', true); ?></div>
					<div class="styret-tabell-h"><?=get_post_meta($post_id, 'Sekretaer-epost', true); ?></div>
				</div>
				</p>
			</div>

			<div class="box-main curved light">
				<h1>&Oslash;konomiansvarlig</h1>
				<img src="<?=get_post_meta($post_id, 'Okonomi-bildeurl', true); ?>" alt="Communica" class="styret-profilbilde" />
				<p>
				<h3><?=get_post_meta($post_id, 'Okonomi-navn', true); ?></h3>
				<div class="styret-tabell">
					<div class="styret-tabell-v"><strong>Klasse</strong></div>
					<div class="styret-tabell-m"><strong>Telefon</strong></div>
					<div class="styret-tabell-h"><strong>E-post</strong></div>
				</div>
				<br />
				<div class="styret-tabell">
					<div class="styret-tabell-v"><?=get_post_meta($post_id, 'Okonomi-klasse', true); ?></div>
					<div class="styret-tabell-m"><?=get_post_meta($post_id, 'Okonomi-tlf', true); ?></div>
					<div class="styret-tabell-h"><?=get_post_meta($post_id, 'Okonomi-epost', true); ?></div>
				</div>
				</p>
			</div>
			
			<div class="box-main curved light middle">
				<h1>N&aelig;ringslivsansvarlig</h1>
				<img src="<?=get_post_meta($post_id, 'Naeringsliv-bildeurl', true); ?>" alt="Communica" class="styret-profilbilde" />
				<p>
				<h3><?=get_post_meta($post_id, 'Naeringsliv-navn', true); ?></h3>
				<div class="styret-tabell">
					<div class="styret-tabell-v"><strong>Klasse</strong></div>
					<div class="styret-tabell-m"><strong>Telefon</strong></div>
					<div class="styret-tabell-h"><strong>E-post</strong></div>
				</div>
				<br />
				<div class="styret-tabell">
					<div class="styret-tabell-v"><?=get_post_meta($post_id, 'Naeringsliv-klasse', true); ?></div>
					<div class="styret-tabell-m"><?=get_post_meta($post_id, 'Naeringsliv-tlf', true); ?></div>
					<div class="styret-tabell-h"><?=get_post_meta($post_id, 'Naeringsliv-epost', true); ?></div>
				</div>
				</p>
			</div>
			
			<div class="box-main curved light">
				<h1>Systemansvarlig</h1>
				<img src="<?=get_post_meta($post_id, 'System-bildeurl', true); ?>" alt="Communica" class="styret-profilbilde" />
				<p>
				<h3><?=get_post_meta($post_id, 'System-navn', true); ?></h3>
				<div class="styret-tabell">
					<div class="styret-tabell-v"><strong>Klasse</strong></div>
					<div class="styret-tabell-m"><strong>Telefon</strong></div>
					<div class="styret-tabell-h"><strong>E-post</strong></div>
				</div>
				<br />
				<div class="styret-tabell">
					<div class="styret-tabell-v"><?=get_post_meta($post_id, 'System-klasse', true); ?></div>
					<div class="styret-tabell-m"><?=get_post_meta($post_id, 'System-tlf', true); ?></div>
					<div class="styret-tabell-h"><?=get_post_meta($post_id, 'System-epost', true); ?></div>
				</div>
				</p>
			</div>
			
		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
