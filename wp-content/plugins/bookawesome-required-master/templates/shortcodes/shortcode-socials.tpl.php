<!-- Follow -->
<section class="follow-about">
    <div class="follow-group">
        <?php foreach ($listItems as $value): ?>
            <a href="<?php echo esc_url( $value['social_link'] ); ?>" title="">
                <i class="fa fa-<?php echo esc_attr( $value['social_item'] ); ?>"></i>
            </a>
        <?php endforeach ?>
    </div>
</section>
<!-- Follow -->