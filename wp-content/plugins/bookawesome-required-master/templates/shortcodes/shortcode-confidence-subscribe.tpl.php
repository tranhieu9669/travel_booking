<!-- Confidence and Subscribe  -->
<section class="confidence-subscribe">
    <!-- Background -->
    <div class="bg-parallax" <?php echo ( isset( $atts['confidence_background'] ) ) ? 'style="background-image: url('. wp_get_attachment_url( $atts['confidence_background'] ) . ');"' : ''; ?>>
    </div>
    <!-- End Background -->
    <div class="container">
        <div class="row cs-sb-cn">

            <!-- Confidence -->
            <div class="col-md-6">
                <div class="confidence">
                    <h3><?php echo isset( $atts['confidence_title'] ) ? esc_html__( $atts['confidence_title'], 'bookawesome' ) : '' ?></h3>
                    <ul>
                        <?php
                        $number_order = 1;
                        foreach ($listItems as $value): ?>
                             <li>
                                <span class="label-nb"><?php echo ( $number_order < 10 ) ? '0' : '' ?><?php echo $number_order; ?></span>
                                <h5><?php esc_html_e( $value['confidence_title_item'], 'bookawesome' ); ?></h5>
                                <p><?php esc_html_e( $value['confidence_excerpt_item'], 'bookawesome', 'bookawesome' ); ?></p>
                            </li>
                        <?php
                        $number_order += 1;
                        endforeach ?>
                    </ul>
                </div>
            </div>
            <!-- End Confidence -->
            <!-- Subscribe -->
            <div class="col-md-6">
                <div class="subscribe">
                    <h3><?php echo isset( $atts['subscribe_title'] ) ? esc_html__( $atts['subscribe_title'], 'bookawesome' ) : '' ?></h3>
                    <p><?php echo isset( $atts['subscribe_desc'] ) ? esc_html__( $atts['subscribe_desc'], 'bookawesome' ) : '' ?></p>
                    <!-- Subscribe Form -->
                    <div class="subscribe-form">
                        <form action="#" method="get">
                            <input type="text" name="" value="" placeholder="<?php echo isset( $atts['subscribe_input_text'] ) ? esc_attr( $atts['subscribe_input_text'] ) : '' ?>" class="subscribe-input">
                            <button type="submit" class="awe-btn awe-btn-5 arrow-right text-uppercase awe-btn-lager"><?php echo isset( $atts['subscribe_button_text'] ) ? esc_html( $atts['subscribe_button_text'] ) : '' ?></button>
                        </form>
                    </div>
                    <!-- End Subscribe Form -->
                    <!-- Follow us -->
                    <div class="follow-us">
                        <h4><?php echo isset( $atts['follow_title'] ) ? esc_html( $atts['follow_title'] ) : '' ?></h4>
                        <div class="follow-group">
                            <?php foreach ($listSocials as $value): ?>
                                <a href="<?php echo esc_url( $value['social_link'] ); ?>" title="">
                                    <i class="fa fa-<?php echo esc_attr( $value['social_item'] ); ?>"></i>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Follow us -->
                </div>
            </div>
            <!-- End Subscribe -->
        </div>
    </div>
</section>
<!-- End Confidence and Subscribe  -->
