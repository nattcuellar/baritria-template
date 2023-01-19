<?php 
    get_header('home'); 
    
    //$title = $post->post_title;
    $id = $post->ID;
    //$nombre = $post->post_name;
    $imagen=wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    //cf
    $direccion = get_field('direccion',$id);
    $verificado = get_field('verificado',$id);
    $email = get_field('email',$id);
    $telefono_ = get_field('telefono_',$id);
    $pagina_ = get_field('pagina_', $id);
    $mapa = get_field('mapa', $id);
    $facebook = get_field("facebook", $id);
    $linkedIn = get_field("linkedIn", $id);

?>
<div class="main-inner">
    <div class="content">
        <div class="mt-80 mb80">
            <div class="detail-banner" style="background-image: url(<?php echo $imagen[0]; ?>">
                <div class="container">
                    <div class="detail-banner-left">
                        <div class="detail-banner-info">
                            <div class="detail-label">Clínica</div>
                            <?php if($verificado) { ?>
                                <div class="detail-verified">Verificado</div>
                            <?php } ?>
                        </div><!-- /.detail-banner-info -->

                        <h2 class="detail-title">
                        <?php echo get_the_title( $id ); ?>
                        </h2>

                        <div class="detail-banner-address">
                            <i class="fa fa-map-o"></i> <?php echo $direccion; ?>
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

                    <iframe src="<?php echo $mapa; ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       
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
                                    <i class="fa fa-envelope-o"></i> <a href="mailto:#"><?php echo $email; ?></a>
                                </div>
                                <div class="detail-contact-phone">
                                    <i class="fa fa-mobile-phone"></i> <a href="tel:#"> <?php echo $telefono_;?> </a>
                                </div>
                                <div class="detail-contact-website">
                                    <i class="fa fa-globe"></i> <a href="#"> <?php echo $pagina_;?> </a>
                                </div>
                                <div class="detail-contact-address">
                                    <i class="fa fa-map-o"></i>
                                    <?php echo $direccion; ?>
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
                                <a class="follow-btn facebook" href=" <?php echo $facebook;?> "><i class="fa fa-facebook"></i></a>
                                <a class="follow-btn linkedin" href=" <?php echo $linkedIn;?> "><i class="fa fa-linkedin"></i></a>
                            </div><!-- /.follow-wrapper -->
                        </div><!-- /.detail-follow -->
                    </div>

                    
                </div><!-- /.col-sm-5 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.content -->
</div><!-- /.main-inner -->
<?php get_footer(); ?>