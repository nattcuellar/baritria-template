</div>
<footer class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">

				<div class="col-sm-4">
					<h2>Información de contacto</h2>

					<p>
						Herlinda Garcia #23, Col Zim. Qro<br>
						+1-123-456-789, <a href="#">sample@example.com</a>
					</p>
				</div><!-- /.col-* -->

				<div class="col-sm-4">
					<h2>Redes sociales</h2>

					<ul class="social-links nav nav-pills">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
					</ul><!-- /.header-nav-social -->
				</div><!-- /.col-* -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.footer-top -->

	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-left">
				&copy; 2022 Todos los derechos reservados. <a href="#">Bariatría</a>.
			</div><!-- /.footer-bottom-left -->

			<div class="footer-bottom-right">
				<ul class="nav nav-pills">
					<li><a href="<?php echo home_url(); ?>">Inicio</a></li>
					<li><a href="<?php echo home_url(); ?>/clinica">Clínicas</a></li>
					<li><a href="<?php echo home_url(); ?>/doctores">Doctores</a></li>
					<li><a href="<?php echo home_url(); ?>/procedimientos">Procedimientos</a></li>
					<li><a href="<?php echo home_url(); ?>/blog">Blog </a></li>
					<li><a href="<?php echo home_url(); ?>/testimonios">Tetimonios </a></li>
					<li><a href="<?php echo home_url(); ?>/contacto">Contacto </a></li>
					<li><a href="">Aviso de privacidad</a></li>
				</ul><!-- /.nav -->
			</div><!-- /.footer-bottom-right -->
		</div><!-- /.container -->
	</div>
</footer><!-- /.footer -->


<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/map.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_url'); ?>/assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_url'); ?>/assets/libraries/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_url'); ?>/assets/libraries/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/libraries/flot/jquery.flot.spline.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_url'); ?>/assets/libraries/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing" type="text/javascript"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/libraries/jquery-google-map/infobox.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/libraries/jquery-google-map/markerclusterer.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/libraries/jquery-google-map/jquery-google-map.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/libraries/owl.carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/libraries/bootstrap-fileinput/fileinput.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/assets/js/superlist.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
	function selecthome() {
		const value = document.getElementById("selecthome").value;
		if (value === 'doc') {
			$("#textHome").text("Doctores");
		}
		if (value === 'cli') {
			$("#textHome").text("Clinicas");
		}
	};

	const swiper = new Swiper('#swiperhome_3', {
		// Optional parameters
		//direction: 'vertical',
		loop: true,

		slidesPerView: 3,
		spaceBetween: 30,
		//freeMode: true,
		autoplay: {
			delay: 5000,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});

	const swiper_man1 = new Swiper('#swiperhome_man1', {
		direction: "vertical",
		loop: true,
		autoplay: {
			delay: 5000,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});

	const swiper_man2 = new Swiper("#swiper_man2", {
		//speed: 600,
		parallax: true,
		autoplay: {
			delay: 5000,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	const swiper_man3 = new Swiper("#swiper_man3", {
		loop: true,
		autoplay: {
			delay: 5000,
		},
	});

	const swipercli_1 = new Swiper('#swiperclin_1', {
		loop: true,
		autoplay: {
			delay: 5000,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
</script>