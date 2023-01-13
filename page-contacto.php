<?php get_header('home'); ?>

<div class="main-inner ">
    <div class="container">
        <div class="content">
            <div class="document-title">
                <h1>Contacto</h1>
            </div>
            <div class="background-white p30 mb30">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119501.13226842601!2d-100.48025801353398!3d20.61212284378419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b8fdc5b9255%3A0x97b094aa561b832f!2sSantiago%20de%20Quer%C3%A9taro%2C%20Qro.%2C%20M%C3%A9xico!5e0!3m2!1ses!2sca!4v1669876517176!5m2!1ses!2sca" width="100%" height="350" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
       
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="contact-form-wrapper clearfix">
                        <form class="contact-form" method="post" action="?">
                            <div class="form-group">
                                <label for="contact-form-name">Nombre</label>
                                <input type="text" name="name" id="contact-form-name" class="form-control">
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="contact-form-email">E-mail</label>
                                <input type="text" name="email" id="contact-form-email" class="form-control">
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="contact-form-message">Mensaje</label>
                                <textarea class="form-control" id="contact-form-message" rows="6"></textarea>
                            </div><!-- /.form-group -->

                            <button class="btn btn-primary pull-right">Enviar</button>
                        </form><!-- /.contact-form -->
                    </div><!-- /.contact-form-wrapper -->
                </div>

                <div class="col-sm-6">
                    <h3>Queremos resolver todas tus dudas</h3>

                    <p>
                        Donec congue egestas nisi id varius. Curabitur ullamcorper consectetur risus, eget
                        dapibus lacus. Maecenas sit amet dui dictum, tincidunt ante vel, semper purus. In
                        hac habitasse platea dictumst. Vivamus hendrerit sem a rutrum ornare. Donec vehicula
                        auctor eros. Etiam et enim tellus.
                    </p>

                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Dirección</h3>

                            <p>
                                #34 San Juan,<br>
                                Querétaro, MX
                            </p>
                        </div><!-- /.col-* -->

                        <div class="col-sm-6">
                            <h3>Contacto</h3>

                            <p>
                                1900-102-4512<br>
                                1800-3322-4453
                            </p>
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->
                </div><!-- /.col-* -->
            </div>
        </div>

    </div><!-- /.content -->
</div><!-- /.container -->


<?php get_footer(); ?>