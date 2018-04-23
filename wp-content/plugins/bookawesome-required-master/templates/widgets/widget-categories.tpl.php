<!-- Widget Category Blog -->
<div class="widget widget_categories">
    <h2 class="title-sidebar"><?php _e( $instance['title'], 'bookawesome' ); ?></h2>
    <ul>
    	<?php foreach ($cate as $value): ?>
    		<li><a href="<?php echo get_home_url(). '/category/'.$value->slug; ?>"><?php _e( $value->name ); ?></a></li>
    	<?php endforeach ?>
    </ul>
</div>
<!-- Widget Category Blog -->