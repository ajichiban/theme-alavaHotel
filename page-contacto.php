<?php get_header() ?>
</div> <!-- cierre del navegacion --> 
    <div class="container-fluid container-contacto">
        <h3 class="page-title">contacto</h3>
        <?php
         printf('<pre>%s</pre>', var_export(get_post_custom(get_the_ID()), true));
        ?>
        <?php get_template_part('template-parts/contacto'); ?>

    </div>

<?php get_footer() ?>