<!-- Widget Tags -->
<div class="widget widget_tag_cloud">
    <h2 class="title-sidebar"><?php _e( $instance['title'], 'bookawesome' ) ?></h2>
    <div class="tagcloud">
        <?php foreach ($listCloud as $value): ?>
            <a href="<?php echo site_url(). '/tag/'. $value->slug; ?>" title="<?php echo $value->name; ?>"><?php _e( $value->name, 'bookawesome' ) ?></a>
        <?php endforeach ?>
    </div>
</div>
<!-- End Widget Tags -->
