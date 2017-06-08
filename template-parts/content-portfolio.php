<?php
/**
 * Template part for displaying archive content in archive-portfolio-item.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kn-webwork_2
 */

?>

<?php

$port_thumb_id  = get_post_thumbnail_id();
$port_thumb_url = get_the_post_thumbnail_url( $port_thumb_id );

?>
arstarst

<a class="port-item" href="https://codepen.io/kyledavid/full/owNaVz" target="_blank">
	<img class="p-screenshot" src="http://www.knwebwork.com/wp-content/uploads/2017/06/javascript-drag-and-drop-e1496854167592.jpg"/>
	<div class="port-overlay">
		<?php the_title( '<h3 class="port-caption">', '</h3>'); ?>
	</div>
</a>