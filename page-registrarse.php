<?php get_header('home'); ?>

<div class="main-inner ">
    <div class="container">
        <div class="content">
            <div class="document-title">
                <h1>Registrarse</h1>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h3>Se parte de nuestro grupo de especialistas</h3>

                    <p>
                        Registra tu marca
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
                                        <label for="contact-form-phone">Télefono</label>
                                        <input type="text" name="phone" id="contact-form-phone" class="form-control">
                                    </div><!-- /.form-group -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="contact-form-street">Calle y número</label>
                                        <input type="text" name="street" id="contact-form-street" class="form-control" >
                                    </div><!-- /.form-group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="contact-form-city">Ciudad</label>
                                        <input type="text" name="city" id="contact-form-city" class="form-control" >
                                    </div><!-- /.form-group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="contact-form-state">Estado</label>
                                        <input type="text" name="state" id="contact-form-state" class="form-control" >
                                    </div><!-- /.form-group -->
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Tipo de registro</label>
                                <select class="form-control" title="Select Option">
                                    <option>Clínica</option>
                                    <option>Producto</option>
                                    <option>Especialista</option>
                                </select>
                            </div>

                            <button class="btn btn-primary pull-right">Registrar</button>
                        </form><!-- /.contact-form -->
                    </div><!-- /.contact-form-wrapper -->
                </div>
            </div>
        </div>

    </div><!-- /.content -->
</div><!-- /.container -->


<?php get_footer(); ?>