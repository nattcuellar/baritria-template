<?php get_header('home'); ?>


<div class="main-inner ">
    <div class="container">
        <div class="content">

            <form class="filter" method="post" action="?">
                <div class="row">


                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <select class="form-control" title="Select Location">
                                <option>Doctores</option>
                                <option>Clinica</option>
                            </select>
                        </div><!-- /.form-group -->
                    </div><!-- /.col-* -->


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

            <div class="card-row">
                <div class="card-row-inner">
                    <div class="card-row-image" data-background-image="<?php bloginfo('template_url'); ?>/assets/img/home/clinica1.jpeg">
                        <div class="card-row-label"><a href="<?php echo home_url(); ?>/detalle">Clínica</a></div>
                        <!-- /.card-row-label -->

                        <div class="card-row-price">Certificado</div>

                    </div><!-- /.card-row-image -->

                    <div class="card-row-body">
                        <h2 class="card-row-title"><a href="<?php echo home_url(); ?>/detalle">Clínica Rodriguez</a></h2>
                        <div class="card-row-content">
                            <p>And why did 'I' have to take a cab? Bender, quit destroying the universe!
                                I've been there. My folks were always on me to groom myself and...</p>
                        </div><!-- /.card-row-content -->
                    </div><!-- /.card-row-body -->

                    <div class="card-row-properties">
                        <dl>


                            <dd>Categoría</dd>
                            <dt>Clínica</dt>



                            <dd>Ubicación</dd>
                            <dt>San Juan, Querétaro</dt>


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

            <div class="card-row">
                <div class="card-row-inner">
                    <div class="card-row-image" data-background-image="<?php bloginfo('template_url'); ?>/assets/img/home/clinica1.jpeg">
                        <div class="card-row-label"><a href="<?php echo home_url(); ?>/detalle">Clínica</a></div>
                        <!-- /.card-row-label -->

                        

                    </div><!-- /.card-row-image -->

                    <div class="card-row-body">
                        <h2 class="card-row-title"><a href="<?php echo home_url(); ?>/detalle">Clínica Rodriguez</a></h2>
                        <div class="card-row-content">
                            <p>And why did 'I' have to take a cab? Bender, quit destroying the universe!
                                I've been there. My folks were always on me to groom myself and...</p>
                        </div><!-- /.card-row-content -->
                    </div><!-- /.card-row-body -->

                    <div class="card-row-properties">
                        <dl>


                            <dd>Categoría</dd>
                            <dt>Clínica</dt>



                            <dd>Ubicación</dd>
                            <dt>San Juan, Querétaro</dt>


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

            <div class="card-row">
                <div class="card-row-inner">
                    <div class="card-row-image" data-background-image="<?php bloginfo('template_url'); ?>/assets/img/home/clinica1.jpeg">
                        <div class="card-row-label"><a href="<?php echo home_url(); ?>/detalle">Clínica</a></div>
                        <!-- /.card-row-label -->

                        <div class="card-row-price">Certificado</div>

                    </div><!-- /.card-row-image -->

                    <div class="card-row-body">
                        <h2 class="card-row-title"><a href="<?php echo home_url(); ?>/detalle">Clínica Rodriguez</a></h2>
                        <div class="card-row-content">
                            <p>And why did 'I' have to take a cab? Bender, quit destroying the universe!
                                I've been there. My folks were always on me to groom myself and...</p>
                        </div><!-- /.card-row-content -->
                    </div><!-- /.card-row-body -->

                    <div class="card-row-properties">
                        <dl>


                            <dd>Categoría</dd>
                            <dt>Clínica</dt>



                            <dd>Ubicación</dd>
                            <dt>San Juan, Querétaro</dt>


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
</div><!-- /.main-inner -->

<?php get_footer(); ?>