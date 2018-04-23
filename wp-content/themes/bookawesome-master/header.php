<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <!-- Preloader -->
    <div id="preloader">
        <div class="tb-cell">
            <div id="page-loading">
                <div></div>
                <p>Loading</p>
            </div>
        </div>
    </div>

    <!-- Wrap -->
    <div id="wrap">

        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                
                <!-- Logo -->
                <div class="logo float-left">
                    <a href="index.html" title=""><img src="images/logo-header.png" alt=""></a>
                </div>
                <!-- End Logo -->
                <!-- Bars -->
                <div class="bars" id="bars"></div>
                <!-- End Bars -->

                <!--Navigation-->
                <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner">
                        <a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                <?php
                                    wp_nav_menu(
                                        [ 
                                            'menu' => 'bookawesome-main-menu' 
                                        ]
                                    ); 
                                ?>
                               <!--  <ul class="menu-list text-uppercase">
                                    <li class="current-menu-parent">
                                        <a href="index.html" title="">Home</a>
                                        <ul class="sub-menu">
                                            <li class="current-menu-item"><a href="index.html" title="">Home menu 1</a></li>
                                            <li><a href="index2.html" title="">Home menu 2</a></li>
                                            <li><a href="index3.html" title="">Home menu 3</a></li>
                                            <li><a href="index4.html" title="">Home menu 4</a></li>
                                            <li><a href="index5.html" title="">Home background slide</a></li>
                                            <li><a href="index6.html" title="">Home background video</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#" title="">Blog</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="blog.html" title="">Blog</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-detail.html">Blog Detail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html" title="">About</a></li>
                                            <li>
                                                <a href="#" title="">User</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="user-booking.html" title="">User Booking</a>
                                                    </li>
                                                    <li>
                                                        <a href="user-profile.html" title="">User Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="user-setting.html" title="">User Setting</a>
                                                    </li>
                                                    <li>
                                                        <a href="user-review.html" title="">User Review</a>
                                                    </li>
                                                    <li>
                                                        <a href="user-signup.html" title="">User Signup</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html" title="">Contact</a></li>
                                            <li>
                                                <a href="payment.html" title="">Payment</a>
                                                <ul class="sub-menu">
                                                    <li><a href="payment-received.html">Payment Received</a></li>
                                                    <li><a href="payment-complete.html">Payment Complete</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="element.html" title="">Element</a></li>
                                            <li><a href="404.html" title="">404</a></li>
                                            <li><a href="comingsoon.html" title="">Comingsoon</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" title="">Hotel</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="home-hotel.html" title="">Hotel</a>
                                            </li>
                                            <li>
                                                <a href="hotel-list.html">Hotel List 1</a>
                                            </li>
                                            <li>
                                                <a href="hotel-list-2.html">Hotel List 2</a>
                                            </li>
                                            <li>
                                                <a href="hotel-maps.html">Hotel Map</a>
                                            </li>
                                            <li>
                                                <a href="hotel-detail.html">Hotel Detail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" title="">Flights</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="home-flight.html" title="">Flights</a>
                                            </li>
                                            <li>
                                                <a href="flight-list.html">Flight List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" title="">Car</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="home-car.html" title="">Car</a>
                                            </li>
                                            <li>
                                                <a href="car-list.html">Cart List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" title="">Package</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="home-package.html" title="">Package Deals</a>
                                            </li>
                                            <li>
                                                <a href="package-list.html">Package Deals List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" title="">Cruises</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="home-cruise.html" title="">Cruises</a>
                                            </li>
                                            <li>
                                                <a href="cruise-list.html">Cruise List</a>
                                            </li>
                                            <li>
                                                <a href="cruise-detail.html">Cruise Detail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" title="">Tours</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="home-tour.html" title="">Tours</a>
                                            </li>
                                            <li>
                                                <a href="tour-list.html">Tour List</a>
                                            </li>
                                            <li>
                                                <a href="tour-detail.html">Tour Detail</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </nav>
                <!--End Navigation-->
            </div>
        </header>
        <!-- End Header -->