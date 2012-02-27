<?php
/**
 * @package Communica
 * @subpackage CommunicaTheme
 */
?>

		<div id="col-two">
		  <div id="partners"></div>
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
<div class="clear"></div>
		  <div class="box-right curved dark">
			  <h1>Mer om dette</h1>
				<p>
				Hovedside
				  <ul>
				  <li><a href="<?php echo $titlepermalink; ?>" rel="bookmark" title="Direktelink til <? echo $titlenamer ?>"><? echo $titlenamer ?></a></li>
				  </ul>
				Undersider
				  <ul> 
					<?php echo $children; ?>
				  </ul>
			  </p>
		  </div>
		</div>
<?php } ?>