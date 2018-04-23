<section class="team">
    <div class="team-head">
        <h2><?php echo isset( $atts['team_title'] ) ? esc_html__( $atts['team_title'], 'bookawesome' ) : '' ?></h2>
        <p>
            <?php echo isset( $atts['team_desc'] ) ? esc_html__( $atts['team_desc'], 'bookawesome' ) : '' ?>
        </p>
    </div>
    <div class="team-group row">
        <?php foreach ($listItems as $value): ?>
            <!-- Team Item -->
            <div class="team-item col-xs-6 col-md-3">
                <figure>
                    <img src="<?php echo wp_get_attachment_url( $value['personnel_avatar'] ); ?>" alt="">
                </figure>
                <h3><?php esc_html_e( $value['personnel_name'], 'bookawesome' ); ?></h3>
                <span><?php esc_html_e( $value['personnel_positon'], 'bookawesome' ); ?></span>
            </div>
            <!-- End Team Item -->
        <?php endforeach; ?>
    </div>
</section>