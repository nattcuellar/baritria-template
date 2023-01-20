<?php 
get_header('home'); 


$ID=$post->ID;
$galeria = get_field('galeria',$ID); 
$args2 = array('post_type' => 'doctores_');
$doctores = new WP_Query($args2);
?>

<div class="swiper mySwiper" id="swiperclin_1">
    <div class="swiper-wrapper">
        <?php
              foreach ($galeria as $img){
        ?>
             <div class="swiper-slide">
                  <img src="<?php echo $img  ?> "style="width:100%" />
             </div>      
    <?php 
        }
     ?>

            
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<div class="main-inner ">
    <div class="container">
        <div class="content">
            <form class="filter" method="post" action="?">
                <div class="row">


                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <input type="text" placeholder="Ciudad" class="form-control">
                        </div><!-- /.form-group -->
                    </div><!-- /.col-* -->
                    <div class="col-sm-12 col-md-4">
                        <button type="" class="btn btn-primary">Buscar</button>
                    </div>
                </div><!-- /.row -->

                <hr>
        </div><!-- /.row -->
        </form>


        <h2 class="page-title">
            3 Resultados
        </h2><!-- /.page-title -->

        <div class="cards-row">
            <?php 
            if (have_posts()) : while ( $doctores->have_posts() ) : $doctores->the_post();
                //base info
                $title = $post->post_title;
                $id = $post->ID;
                $nombre = $post->post_name;
                $imagen=wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                $content_post = get_post($id);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                $content = substr($content, 0, 200);

                //cf
                $direccion = get_field('direccion',$id);
                $verificado = get_field('verificado',$id);
                $email = get_field('email',$id);
                $telefono_ = get_field('telefono_',$id);
                $pagina_ = get_field('pagina_', $id);
            

                
            ?>
                <div class="card-row">
                    <div class="card-row-inner">  
                        <div 
                            class="card-row-image" 
                            data-background-image="<?php echo $imagen[0]; ?>"
                        >
                            <div class="card-row-label"><a href="<?php echo home_url(); ?>/doctores_/<?php echo $nombre; ?>">Clínica</a></div>
                            <!-- /.card-row-label -->
                            <?php if($verificado){ ?>
                            <div class="card-row-price"> Verificado</div>
                            <?php } ?>

                        </div><!-- /.card-row-image -->

                        <div class="card-row-body">
                            <h2 class="card-row-title"><a href="<?php echo home_url(); ?>/doctores_/<?php echo $nombre; ?>"> <?php echo $title  ?> </a></h2>
                            <div class="card-row-content">
                                <p> <?php echo $content  ?>...</p>
                            </div><!-- /.card-row-content -->
                        </div><!-- /.card-row-body -->

                        <div class="card-row-properties">
                            <dl>


                                <dd>Categoría</dd>
                                <dt>Clínica</dt>



                                <dd>Dirección</dd>
                                <dt> <?php echo $direccion ?></dt>


                                <dd>Calificación</dd>
                                <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                </dt>
                            </dl>
                        </div><!-- /.card-row-properties -->
                    </div><!-- /.card-row-inner -->
                </div><!-- /.card-row -->
            <?php
            endwhile; endif;
            ?>

          

        </div><!-- /.cards-row -->


        <div class="pager">
            <ul>
                <li><a href="">Anterior</a></li>
                <li><a href="">5</a></li>
                <li class="active"><a>6</a></li>
                <li><a href="">7</a></li>
                <li><a href="">Siguiente</a></li>
            </ul>
        </div><!-- /.pagination -->


    </div><!-- /.content -->
</div><!-- /.container -->


<?php get_footer(); ?>