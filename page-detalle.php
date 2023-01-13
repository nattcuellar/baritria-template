<?php get_header('home'); ?>
<div class="main-inner">
    <div class="content">
        <div class="mt-80 mb80">
            <div class="detail-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/home/clinica1.jpeg);">
                <div class="container">
                    <div class="detail-banner-left">
                        <div class="detail-banner-info">
                            <div class="detail-label">Clínica</div>
                            <div class="detail-verified">Verificado</div>
                        </div><!-- /.detail-banner-info -->

                        <h2 class="detail-title">
                            Clínica Jimenez
                        </h2>

                        <div class="detail-banner-address">
                            <i class="fa fa-map-o"></i> Villa Hermosa #32, Col Huerta, Quéretaro
                        </div><!-- /.detail-banner-address -->

                        <div class="detail-banner-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div><!-- /.detail-banner-rating -->

                    </div><!-- /.detail-banner-left -->
                </div><!-- /.container -->
            </div><!-- /.detail-banner -->

        </div>

        <div class="container">
            <div class="row detail-content">
                <div class="col-sm-7">

                    <h2>Ubicación</h2>
                    <div class="background-white p20">

                        <!-- Nav tabs -->
                        <ul id="listing-detail-location" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#simple-map-panel" aria-controls="simple-map-panel" role="tab" data-toggle="tab">
                                    <i class="fa fa-map"></i>Map
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#street-view-panel" aria-controls="street-view-panel" role="tab" data-toggle="tab">
                                    <i class="fa fa-street-view"></i>Street View
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="simple-map-panel">
                                <div class="detail-map">
                                    <div class="map-position">
                                        <div id="listing-detail-map" data-transparent-marker-image="assets/img/transparent-marker-image.png" data-styles='[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"labels.text.fill","stylers":[{"color":"#b43b3b"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"lightness":"8"},{"color":"#bcbec0"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#5b5b5b"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7cb3c9"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#abb9c0"}]},{"featureType":"water","elementType":"labels.text","stylers":[{"color":"#fff1f1"},{"visibility":"off"}]}]' data-zoom="15" data-latitude="40.779995" data-longitude="-73.969133" data-icon="fa fa-coffee">
                                        </div><!-- /#map-property -->
                                    </div><!-- /.map-property -->
                                </div><!-- /.detail-map -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="street-view-panel">
                                <div id="listing-detail-street-view" data-latitude="40.758896" data-longitude="-73.985135" data-heading="225" data-pitch="0" data-zoom="1">
                                </div>
                            </div>
                        </div>
                    </div>



                </div><!-- /.col-sm-7 -->

                <div class="col-sm-5">


                    <h2>Acerca de</span></h2>
                    <div class="background-white p20">
                        <div class="detail-vcard">
                            <div class="detail-logo">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/detalle/logocli.png">
                            </div><!-- /.detail-logo -->

                            <div class="detail-contact">
                                <div class="detail-contact-email">
                                    <i class="fa fa-envelope-o"></i> <a href="mailto:#">company@example.com</a>
                                </div>
                                <div class="detail-contact-phone">
                                    <i class="fa fa-mobile-phone"></i> <a href="tel:#">+01-23-456-789</a>
                                </div>
                                <div class="detail-contact-website">
                                    <i class="fa fa-globe"></i> <a href="#">www.superlist.com</a>
                                </div>
                                <div class="detail-contact-address">
                                    <i class="fa fa-map-o"></i>
                                    347/26 22nd Avenue<br>
                                    NYC AZ 85705, USA
                                </div>
                            </div><!-- /.detail-contact -->
                        </div><!-- /.detail-vcard -->

                        <div class="detail-description">
                            <p>Vestibulum a lectus ullamcorper, dapibus ante id, sagittis libero. In
                                tincidunt nisi venenatis, ornare eros at, hendrerit sem. Nunc metus purus,
                                porta a dignissim vel, vulputate sed odio. Aenean est nisi, pulvinar eget
                                velit quis, placerat hendrerit arcu. Vestibulum non dictum nibh.</p>
                            <p>In congue mattis felis, non hendrerit orci dictum id. Etiam consequat nulla
                                vitae tempus interdum.Nam gravida convallis lacus, at dignissim urna
                                pulvinar sed.</p>
                            <p>Cras ac mi odio. Aliquam erat volutpat. Cras euismod facilisis ligula in
                                tristique. Proin et eleifend lacus, vitae dictum orci</p>
                        </div>

                        <div class="detail-follow">
                            <h5>Siguelo en:</h5>
                            <div class="follow-wrapper">
                                <a class="follow-btn facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="follow-btn youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a class="follow-btn twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="follow-btn tripadvisor" href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a class="follow-btn google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                            </div><!-- /.follow-wrapper -->
                        </div><!-- /.detail-follow -->
                    </div>

                    
                </div><!-- /.col-sm-5 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.content -->
</div><!-- /.main-inner -->
<?php get_footer(); ?>