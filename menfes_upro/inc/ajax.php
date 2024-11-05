<?php

$actions = [
	'load_ervaring',
	'load_blog',

];
foreach ($actions as $action) {
	add_action("wp_ajax_{$action}", $action);
	add_action("wp_ajax_nopriv_{$action}", $action);
}


function load_ervaring () {
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1;

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) { 
			$query->the_post(); ?>

			<div class="col-md-6">
				<?php get_template_part('parts/content', 'ervaring_2') ?>
			</div>

		<?php }
	}
	wp_reset_query(); 
	die();
}

function load_blog() {
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1;

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) { 
			$query->the_post(); ?>

			<div class="col-md-6 col-lg-4">
				<?php get_template_part('parts/content', 'blog') ?>
			</div>

		<?php }
	}
	wp_reset_query(); 
	die();
}