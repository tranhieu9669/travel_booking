<!-- Travel Destinations -->
<section class="destinations">

    <!-- Title -->
    <div class="title-wrap">
        <div class="container">
            <div class="travel-title float-left">
                <h2><?php echo isset( $atts['travel_title'] ) ? esc_html__( $atts['travel_title'], 'bookawesome' ) : '' ?></h2>
            </div>
            <a href="<?php echo ( isset( $atts['travel_button_link'] ) ) ? esc_url( $atts['travel_button_link'] ) : ''; ?>" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right"><?php echo isset( $atts['travel_button_text'] ) ? esc_html__( $atts['travel_button_text'], 'bookawesome' ) : '' ?></a>
        </div>
    </div>
    <!-- End Title -->

    <!-- Destinations Content -->
    <div class="destinations-cn">

        <!-- Background -->
        <div class="bg-parallax" <?php echo ( isset( $atts['travel_background'] ) ) ? 'style="background-image: url('. wp_get_attachment_url( $atts['travel_background'] ) . ');"' : ''; ?>></div>
        <!-- End Background -->

        <div class="container">
            <div class="row">
                <!-- Destinations Filter -->
                <div class="col-md-4 col-lg-3">
                    <div class="intro-filter">
                        <div class="intro">
                            <p>
                                <small>Discover</small><br>
                                <span>2364</span> destinations
                            </p>
                            <p>
                                <small>With</small><br>
                                <span>152,364</span> properties
                            </p>
                        </div>
                        <ul class="filter">
                            <li class="active">
                                <a data-toggle="tab" href="#destinations-1"><i class="fa fa-map-marker"></i> Recommendation for you</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#destinations-2"><i class="fa fa-map-marker"></i> Australia &amp; Oceania</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#destinations-3"><i class="fa fa-map-marker"></i> Asia</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#destinations-4"><i class="fa fa-map-marker"></i> Europe</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#destinations-5"><i class="fa fa-map-marker"></i> USA &amp; Canada</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#destinations-6"><i class="fa fa-map-marker"></i> The rest of the world</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- End Destinations Filter -->
                <!-- Destinations Grid -->
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content destinations-grid">
                        <!-- Tab One -->
                        <div id="destinations-1" class="clearfix tab-pane fade active in ">
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item ">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">London - UK</a>
                                        </div>
                                        <span class="properties-nb">
                                            <ins>1289</ins> properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-1.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">Paris - France</a>
                                        </div>
                                        <span class="properties-nb">
                                            239 properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-2.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">Rome - Italy</a>
                                        </div>
                                        <span class="properties-nb">
                                            478 properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-3.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">Barcelona - Spain</a>
                                        </div>
                                        <span class="properties-nb">
                                            452 properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-4.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">Madrid - Spain</a>
                                        </div>
                                        <span class="properties-nb">
                                            794 properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-5.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">Vienna - Austria</a>
                                        </div>
                                        <span class="properties-nb">
                                            1289 properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-6.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                        </div>
                        <!-- End Tab One -->
                        <!-- Tab Two -->
                        <div id="destinations-2" class="clearfix tab-pane fade">
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item ">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">London - UK</a>
                                        </div>
                                        <span class="properties-nb">
                                            <ins>1289</ins> properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-1.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">Paris - France</a>
                                        </div>
                                        <span class="properties-nb">
                                            239 properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-2.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">Rome - Italy</a>
                                        </div>
                                        <span class="properties-nb">
                                            478 properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-3.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">Barcelona - Spain</a>
                                        </div>
                                        <span class="properties-nb">
                                            452 properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-4.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">Madrid - Spain</a>
                                        </div>
                                        <span class="properties-nb">
                                            794 properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-5.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                            <!-- Destinations Item -->
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                <div class="destinations-item">
                                    <div class="destinations-text">
                                        <div class="destinations-name">
                                            <a href="" title="">Vienna - Austria</a>
                                        </div>
                                        <span class="properties-nb">
                                            1289 properties
                                        </span>
                                    </div>
                                    <figure class="destinations-img">
                                        <a href="" title="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/img-6.jpg" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Destinations Item -->
                        </div>
                        <!-- End Tab Two -->
                    </div>
                </div>
                <!-- ENd Destinations Grid -->
            </div>
        </div>
    </div>
    <!-- End Destinations Content -->
</section>
<!-- End Travel Destinations -->