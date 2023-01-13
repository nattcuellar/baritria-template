<?php get_header('home'); ?>

<div class="main-inner ">
    <div class="container">
        <div class="content">
            <div class="document-title">
                <h1>Testimonios</h1>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h3>Deja tu testimonio</h3>

                    <p>
                        Platícanos tu experiencia
                    </p>
                    <div class="contact-form-wrapper clearfix">
                        <form class="contact-form" method="post" action="?">
                            <div class="form-group">
                                <label for="contact-form-name">Nombre</label>
                                <input type="text" name="name" id="contact-form-name" class="form-control">
                            </div><!-- /.form-group -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="contact-form-email">E-mail</label>
                                        <input type="text" name="email" id="contact-form-email" class="form-control">
                                    </div><!-- /.form-group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Tipo de servicio que usaste</label>
                                        <select class="form-control" title="Select Option">
                                            <option>Clínica</option>
                                            <option>Producto</option>
                                            <option>Especialista</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="contact-form-testim">Testimonio</label>
                                        <textarea name="testim" id="contact-form-testim" class="form-control"
                                        style="height: 300px;"></textarea>
                                    </div><!-- /.form-group -->
                                </div>
                            </div>


                            <button class="btn btn-primary pull-right">Enviar</button>
                        </form><!-- /.contact-form -->
                    </div><!-- /.contact-form-wrapper -->
                </div>
            </div>
        </div>

    </div><!-- /.content -->
</div><!-- /.container -->


<?php get_footer(); ?>