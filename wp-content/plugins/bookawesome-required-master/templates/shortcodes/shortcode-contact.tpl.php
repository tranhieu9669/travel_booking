<!-- Contact -->
<section class="contact-page">
    <div class="contact-maps">
        <div id="contact-maps" data-map-zoom="16" data-map-latlng="<?php echo isset( $atts['contact_latlng'] ) ? esc_attr( $atts['contact_latlng'] ) : '' ?>" data-map-content="Book Awesome"></div>
    </div>
    <div class="contact-cn">
        <h2><?php echo isset( $atts['contact_title'] ) ? esc_html__( $atts['contact_title'], 'bookawesome' ) : '' ?></h2>
        <ul>
            <?php foreach ($listItems as $value): ?>
                <li>
                    <img src="<?php echo wp_get_attachment_url( $value['item_icon'] ); ?>" alt="">
                    <?php esc_html_e( $value['item_text'], 'bookawesome' ); ?>
                </li>
            <?php endforeach ?>
        </ul>
        <div class="form-contact">
            <form id="contact-form" action="" method="post">
                <div class="form-field">
                    <label for="name">Name <sup>*</sup></label>
                    <input type="text" name="name" id="name" class="field-input">
                </div>
                <div class="form-field">
                    <label for="email">Email <sup>*</sup></label>
                    <input type="text" name="email" id="email" class="field-input">
                </div>
                <div class="form-field form-field-area">
                    <label for="message">Message <sup>*</sup></label>
                    <textarea name="message" id="message" cols="30" rows="10" class="field-input"></textarea>
                </div>
                <div class="form-field text-center">
                    <button type="submit" id="submit-contact" class="awe-btn awe-btn-2 arrow-right arrow-white awe-btn-lager">Submit</button>
                </div>
                <div id="contact-content">
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Contact -->