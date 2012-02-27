<?php
/**
 * @package Communica
 * @subpackage CommunicaTheme
 */
?>

		<div id="col-two">
		  <div id="partners"></div>
		  <div class="clear"></div>
		  <div class="box-right curved dark">
			  <h1>Nyhetsarkiv</h1>
			  <p>S&oslash;k etter m&aring;ned
			  <ul>
				<?php wp_get_archives('type=monthly'); ?>
			  </ul>
			  </p>
			  <p>S&oslash;k etter kategori</p>
			  <ul>
			  <?php wp_list_categories('show_count=1&title_li='); ?>
			  </ul>
		  </div>

<?php
  if($post->post_parent) {
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  $titlenamer = get_the_title($post->post_parent);
  $titlepermalink = get_permalink($post->post_parent);
  }

  else {
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  $titlenamer = get_the_title($post->ID);
  $titlepermalink = get_permalink($post->ID);
  }
  if ($children) { ?>

<?php } ?>