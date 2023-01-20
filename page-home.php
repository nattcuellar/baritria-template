<?php 
get_header('home'); 
$ID=$post->ID;
$productos = get_field('productos',$ID);
//$clinicas = get_field('clinicas',$ID);
//$doctores = get_field('doctores',$ID);
$imagen_fija = get_field('immgen_fija',$ID);

$args = array('post_type' => 'clinicas_');
$clinicas = new WP_Query($args);

$args2 = array('post_type' => 'doctores_');
$doctores = new WP_Query($args2);

//$post_ = new WP_Query('post_type=clinicas_');

?>

<div class="main-inner">
	<div class="content">
		<div class="mt-80">
			<div class="row">
				<div class="col-sm-12 col-md-4" style="background: #eee">
					<div class="swiper mySwiper" id="swiperhome_man1">
						<div class="swiper-wrapper">
							<?php 
							foreach ($productos as $img) {
								?>
								<div class="swiper-slide">
									<div style="text-align: center; padding: 70px 20px;">
										<img src="<?php echo $img ?>"style="width:100%" />
										<h4>Lorem ipsut</h4>
										<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quasi necessitatibus</p>
										<a href="<?php echo home_url(); ?>/detalle"><button class="btn btn-primary" type="button">Ver más</button></a>
									</div>
								</div>
                            <?php
							}

							?>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="row">
						<div class="col-sm-12 col-md-12" style="padding-left: 0px;">
							<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper" id="swiper_man2">
								<div class="parallax-bg" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/home/clinica1.jpeg);" data-swiper-parallax="-23%"></div>
								<div class="swiper-wrapper">

                                <?php 
								if (have_posts()) : while ( $clinicas->have_posts() ) : $clinicas->the_post();
									//base info
									$title = $post->post_title;
									$id = $post->ID;
									$nombre = $post->post_name;
									$imagen=wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
									//cf
									$direccion = get_field('direccion',$id);
									$verificado = get_field('verificado',$id);
									$email = get_field('email',$id);
									$telefono_ = get_field('telefono_',$id);
									$pagina_ = get_field('pagina_', $id);
									
                                ?>
                                        <div class="swiper-slide">
											<div class="capa_swip3">
												<div class="title_sw3" data-swiper-parallax="-300"><?php echo $title; ?></div>
												
												<div class="text_sw3" data-swiper-parallax="-100">
													<p>
													<i class="fa fa-map-marker" aria-hidden="true"></i>	
													<?php echo $direccion; ?>
														
													</p>
													<a href="<?php echo home_url(); ?>/clinicas_/<?php echo $nombre; ?>"><button class="btn btn-primary" type="button">Ver más</button></a>
												</div>
											</div>
										</div>


								<?php
                                    
								endwhile; endif;
                                 ?>
								

									
											
									
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-5">
							<div class="row">
								<div class="swiper mySwiper" id="swiper_man3">
									<div class="swiper-wrapper">
									<?php 
										if (have_posts()) : while ( $doctores->have_posts() ) : $doctores->the_post();
											//base info
											$id = $post->ID;
											$nombre = $post->post_name;
											$imagen=wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

											
										?>
										<div class="swiper-slide">
											<a href="<?php echo home_url(); ?>/doctores_/<?php echo $nombre; ?>">
												<img src="<?php echo $imagen[0]; ?>" style="width: 100%; height: 350px; object-fit: cover;" />
											</a>
										</div>
										<?php
										endwhile; endif;
										?>
									
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-7" style="padding-left: 0px;">
							<a href="<?php echo home_url(); ?>/detalle">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/home/massage.jpg" style="width: 100%; height: 350px; object-fit: cover;" />
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="container">

			<div class="block background-white fullwidth">
				<div class="page-header">
					<h1>Testimonios</h1>
					<p>¿Que dice nuestros pacientes de nuestros especialistas y clinicas?</p>
				</div><!-- /.page-header -->

				<div class="row">
					<div class="col-sm-6">
						<div class="testimonial">
							<div class="testimonial-image">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/tmp/agent-1.jpg" alt="">
							</div><!-- /.testimonial-image -->

							<div class="testimonial-inner">
								<div class="testimonial-title">
									<h2>Lorem ipsum</h2>

									<div class="testimonial-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div><!-- /.testimonial-rating -->
								</div><!-- /.testimonial-title -->

								Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in
								luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate
								condimentum.

								<div class="testimonial-sign">- Virginia Ramos</div>
								<!-- /.testimonial-sign -->
							</div><!-- /.testimonial-inner -->
						</div><!-- /.testimonial -->

						<div class="testimonial">
							<div class="testimonial-image">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/tmp/agent-2.jpg" alt="">
							</div><!-- /.testimonial-image -->

							<div class="testimonial-inner">
								<div class="testimonial-title">
									<h2>Lorem ipsum</h2>

									<div class="testimonial-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div><!-- /.testimonial-rating -->
								</div><!-- /.testimonial-title -->

								Duis et magna vel est tempus vehicula vitae sit amet enim. Sed vitae ligula
								congue, luctus mauris eu, scelerisque felis.

								<div class="testimonial-sign">- Natasha Olvera</div>
								<!-- /.testimonial-sign -->
							</div><!-- /.testimonial-inner -->
						</div><!-- /.testimonial -->

						<div class="testimonial last">
							<div class="testimonial-image">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/tmp/agent-3.jpg" alt="">
							</div><!-- /.testimonial-image -->

							<div class="testimonial-inner">
								<div class="testimonial-title">
									<h2>Lorem ipsum</h2>

									<div class="testimonial-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div><!-- /.testimonial-rating -->
								</div><!-- /.testimonial-title -->

								Duis et magna vel est tempus vehicula vitae sit amet enim. Sed vitae ligula
								congue, luctus mauris eu, scelerisque felis.

								<div class="testimonial-sign">- Georgina Alamos</div><!-- /.testimonial-sign -->
							</div><!-- /.testimonial-inner -->
						</div><!-- /.testimonial -->
					</div><!-- /.col-* -->

					<div class="col-sm-6">
						<div class="testimonial">
							<div class="testimonial-image">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/tmp/agent-4.jpg" alt="">
							</div><!-- /.testimonial-image -->

							<div class="testimonial-inner">
								<div class="testimonial-title">
									<h2>Lorem ipsum</h2>

									<div class="testimonial-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div><!-- /.testimonial-rating -->
								</div><!-- /.testimonial-title -->

								Curabitur scelerisque nulla consequat elit semper, vitae lobortis velit
								tempor. Sed purus eros, pellentesque non maximus scelerisque, aliquam id
								magna. Integer in metus ante. Integer faucibus mi quis rhoncus cursus.

								<div class="testimonial-sign">- Ricardo Mauricio</div>
								<!-- /.testimonial-sign -->
							</div><!-- /.testimonial-inner -->
						</div><!-- /.testimonial -->

						<div class="testimonial last">
							<div class="testimonial-image">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/tmp/agent-5.jpg" alt="">
							</div><!-- /.testimonial-image -->

							<div class="testimonial-inner">
								<div class="testimonial-title">
									<h2>Lorem ipsum</h2>

									<div class="testimonial-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div><!-- /.testimonial-rating -->
								</div><!-- /.testimonial-title -->

								Donec finibus consectetur nunc, quis viverra nisi iaculis a. Donec non eros
								vel turpis bibendum sodales. Curabitur scelerisque nulla consequat elit
								semper, vitae lobortis velit tempor. Sed purus eros, pellentesque non
								maximus scelerisque, aliquam id magna. Integer in metus ante. Integer
								faucibus mi quis rhoncus cursus. Aliquam malesuada eleifend tellus, sit amet
								eleifend lacus aliquam in. Etiam a neque ut augue mattis gravida vel vel
								purus. Nullam bibendum viverra enim, in pretium purus.

								<div class="testimonial-sign">- Rachel Colombo</div><!-- /.testimonial-sign -->
							</div><!-- /.testimonial-inner -->
						</div><!-- /.testimonial -->
					</div><!-- /.col-* -->
				</div>

			</div>

		</div>

	</div>
</div>

<?php get_footer(); ?>