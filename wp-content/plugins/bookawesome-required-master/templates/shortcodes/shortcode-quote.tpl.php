<!-- Twitter -->
<section class="twitter">
    <div class="bg-parallax" <?php echo ( isset( $atts['quote_background'] ) ) ? 'style="background-image: url('. wp_get_attachment_url( $atts['quote_background'] ) . ');"' : ''; ?>>
    </div>
    <div class="twitter-cn text-center">
        <span class="icon">
            <?php echo isset( $atts['quote_icon'] ) ? '<i class="fa fa-'. esc_attr( $atts['quote_icon'] ) .'"></i>' : '' ?>
        </span>
        <div class="twitter-slide">
            <!-- Twitter Item -->
            <div class="twitter-item">
                <p>
                    <?php echo isset( $atts['quote_content'] ) ? esc_html__( $atts['quote_content'], 'bookawesome' ) : '' ?>
                    <br>
                    <?php echo isset( $atts['quote_date'] ) ? esc_html__( $atts['quote_date'], 'bookawesome' ) : '' ?>
                </p>
                <ul>
                    <li><span><?php _e( 'Reply', 'bookawesome' ); ?></span></li>
                    <li><span><?php _e( 'Retweets', 'bookawesome' ); ?></span></li>
                    <li><span><?php _e( 'Favorite', 'bookawesome' ); ?></span></li>
                </ul>
            </div>
            <!-- End Twitter Item -->
        </div>
    </div>
</section>
<!-- End Twitter -->