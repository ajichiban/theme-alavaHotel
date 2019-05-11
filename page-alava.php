<?php get_header() ?>
    <?php while(have_posts()): the_post(); ?>

    <?php 
    
        $filosofia = get_post_meta(get_the_ID(), 'alava_alava_filosofia', true);
        $galeria = get_post_meta(get_the_ID(), 'alava_alava_galeria', true);
        $footer = get_post_meta(get_the_ID(), 'alava_alava_footer', true);
    ?>
    <div class="container-fluid page-container page-alava">
        <h3 class="page-title">Filosofia</h3>
        <div class="page-text">
            <?= $filosofia; ?>
        </div>

        <div class="galeria">
            <div class="img-big">
                <?php foreach($galeria as $img): ?>
                    <div><img src="<?= $img ?>" alt=""></div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="footer-alava text-center mt-5">
            <p class="mb-0" >Costa Teguise - Calle Italia 4, 35508 - Lanzarote - España</p>
            
            <a href="./contacto.html">
                <p class="mb-0">Horario de Informacion y Reservas | Todos los dias de 10:00 - 16:00 horas</p>
            </a>
            
            <p>
                <span><a href="tel:+3400000">(+34)...</a></span> - 
                <span><a href="mailto:info@alavasuites.com">info@alavasuites.com</a></span>
            </p>
            <p></p>
        </div>
    </div>
    <?php endwhile; ?>
<?php get_footer() ?>