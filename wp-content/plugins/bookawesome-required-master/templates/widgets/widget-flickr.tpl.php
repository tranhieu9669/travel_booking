<!-- Widget Flickr -->
<div class="widget widget_flickr">
    <h2 class="title-sidebar"><?php _e( $instance['title'], 'bookawesome' ); ?></h2>
    <ul>
        <?php foreach ($data['data'] as $value): ?>
            <li>
                <a href="#"><img src="<?php echo $value['images']['thumbnail']['url']; ?>" alt=""></a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
<!-- End Widget Flickr -->