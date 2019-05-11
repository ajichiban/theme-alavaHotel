<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3489.510213636563!2d-13.519560485175273!3d29.001881382273613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc489ddc33ba48a1%3A0x23d4ea670ccbbe7b!2sCalle+Italia%2C+4%2C+35508+Teguise%2C+Las+Palmas%2C+Espa%C3%B1a!5e0!3m2!1ses-419!2sve!4v1555913669300!5m2!1ses-419!2sve"
        width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php 
    $direccion = get_post_meta(get_the_ID(),'alava_contacto_direccion',true);
    $horarios = get_post_meta(get_the_ID(),'alava_contacto_horarios',true);
    $tel = get_post_meta(get_the_ID(),'alava_contacto_group',true);
    $email = get_post_meta(get_the_ID(),'alava_contacto_email',true);
    $instagram = get_post_meta(get_the_ID(),'alava_contacto_instagram',true);

?>

<div class="container-newsletter row">
    <div class="direccion-contacto col-12 col-md-6">
        <div class="direccion">
            <!-- <p>Costa Teguise - Calle Italia 4</p>
            <p>35508 - Lanzarote - España</p> -->
            <?= $direccion; ?>
        </div>
        <div class="horarios">
            <a href="./pages/contacto.html">
                <!-- <p>Horario de Informacion y Reservas</p>
                <p>Todos los dias de 10:00 - 16:00 horas</p> -->
                <?= $horarios ?>
            </a>
        </div>
        <div class="email">
            <a href="tel:<?= $tel[0]['codigo_tel'], $tel[0]['numero_tel'] ?>">
                <p>
                    T.(<?= $tel[0]['codigo_tel']?>) <?= $tel[0]['numero_tel']  ?>
                </p>
            </a>
            <a href="mailto:<?= $email ?>">
                <p><?= $email ?></p>
            </a>
        </div>
        <div class="redes-sociales">
            <a href="<?= $instagram ?>" target="_blank">
                <span class="typcn typcn-social-instagram"></span>
            </a>
        </div>
    </div>
    <div class="formulario-contacto col-12 col-md-6">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Numero">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Correo">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Consulta"></textarea>
            </div>
            <div class="btn-submit d-flex justify-content-end">
                <button class="btn" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>

