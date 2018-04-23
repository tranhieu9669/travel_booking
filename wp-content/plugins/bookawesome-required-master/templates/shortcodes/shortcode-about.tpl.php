<!-- About -->
<section class="about-cn clearfix">
    <div class="about-searved">
        <span><?php echo isset( $atts['about_text_small_1'] ) ? esc_html__( $atts['about_text_small_1'], 'bookawesome' ) : '' ?></span>
        <ins><?php echo isset( $atts['about_number'] ) ? esc_html( $atts['about_number'] ) : '' ?></ins>
        <span><?php echo isset( $atts['about_text_small_2'] ) ? esc_html__( $atts['about_text_small_2'], 'bookawesome' ) : '' ?></span>
    </div>
    <div class="about-text">
        <h1><?php echo isset( $atts['about_title'] ) ? esc_html__( $atts['about_title'], 'bookawesome' ) : '' ?></h1>
        <div class="about-description">
            <?php echo isset( $atts['about_desc'] ) ? esc_html__( $atts['about_desc'], 'bookawesome' ) : '' ?>
        </div>
    </div>
</section>
<!-- End About -->