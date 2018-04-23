<?php
	$args = array(
		'type'            => 'monthly',
		'limit'           => '',
		'format'          => '', 
		'before'          => '<li>',
		'after'           => '</li>',
		'show_post_count' => $instance['count'],
		'echo'            => 1,
		'order'           => 'DESC',
        'post_type'       => 'post'
	);
?>
<!-- Widget Archives -->
<div class="widget widget_archive">
    <h2 class="title-sidebar"><?php _e( $instance['title'], 'bookawesome' ); ?></h2>
    <ul class="nav-sidebar-blog">
        <?php wp_get_archives( $args ); ?>
    </ul>
</div>
<!-- End Widget Archives -->