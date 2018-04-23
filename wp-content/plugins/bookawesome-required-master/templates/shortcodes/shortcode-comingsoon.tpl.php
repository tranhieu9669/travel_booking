<!-- Comingsoon -->
<section class="page-comingsoon banner">
    <!--Background-->
    <div class="bg-parallax" <?php echo ( isset( $atts['comingsoon_background'] ) ) ? 'style="background-image: url('. wp_get_attachment_url( $atts['comingsoon_background'] ) . ');"' : ''; ?>>
    </div>
    <!--End Background-->
    <div class="container">
        <!-- Logo -->
        <div class="logo-page text-center">
            <a href="" title="">
                <?php echo ( isset( $atts['comingsoon_banner'] ) ) ? '<img src="'. wp_get_attachment_url( $atts['comingsoon_banner'] ) .'" alt="">' : '' ?>
            </a>
        </div>
        <!-- Logo -->
        <div class="page-body text-center">
            <div class="item-content">
                <div class="image-wrap">
                    <?php echo ( isset( $atts['comingsoon_logo'] ) ) ? '<img src="'. wp_get_attachment_url( $atts['comingsoon_logo'] ) .'" alt="">' : '' ?>
                </div>
                <div class="page-slide">
                    <?php foreach ($listItems as $value): ?>
                        <div class="item">
                            <h4><?php esc_html_e( $value['items_heading'], 'bookawesome' ) ?></h4>
                            <p><?php esc_html_e( $value['items_excerpt'], 'bookawesome' ) ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="countdown-wrapper">
                <div class="count-line"></div>
                <div class="count-line"></div>
                <div id="countdown"></div>
            </div>

        </div>
    </div>


</section>
<!-- End Comingsoon -->