<?php
function add_portfolio_type() {

	$labels = array(
		'name'		=> 'Item Type',
		);

	register_taxonomy( 'item_type', array('portfolio-item'), array(
		'heirarchical'	=> true,
		'show_ui'		=> true,
		'labels'		=> $labels,
		) );
	register_taxonomy_for_object_type( 'item_type', array('portfolio-item') );
}

add_action('init', 'add_portfolio_type');

?>