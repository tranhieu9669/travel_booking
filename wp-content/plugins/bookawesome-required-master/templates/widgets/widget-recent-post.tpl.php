<!-- Widget Recent Post -->
<div class="widget widget_recent_entries">
    <h2 class="title-sidebar"><?php _e( $instance['title'], 'bookawesome' ) ?></h2>
    <ul>
    	<?php foreach ($listPost as $value) :?>
			<li>
                <a href="<?php echo $value->guid; ?>" title="<?php echo $value->post_title; ?>"><?php _e( $value->post_title, 'bookawesome' ); ?></a><span> / <?php echo $value->comment_count; ?> <?php _e( 'comments', 'bookawesome'); ?></span>
            </li>
		<?php endforeach; ?>
    </ul>
</div>
<!-- End Widget Recent post -->
