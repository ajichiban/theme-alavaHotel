<?php get_header(); ?>

<!-- /*=============================================
                            Slider
        =============================================*/ -->

<?php while(have_posts()): the_post(); ?>

    <?php $images = get_post_meta(get_the_ID(), 'alava_homepage_slider', true) ?>
    <?php
    
    $counter = 0;
    ?> 
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php foreach($images as $img):?>
                    <?php if($counter == 0): ?>
                        <li data-target="#carouselId" data-slide-to="<?php echo $counter; ?>" class="active"></li>
                    <?php else: ?>
                        <li data-target="#carouselId" data-slide-to="<?php echo $counter; ?>" ></li>
                    <?php endif; $counter++?>
                    
                <?php endforeach; $counter = 0;?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php foreach($images as $img):?>
                    <?php if($counter == 0): ?>
                            <div class="carousel-item active">
                                <img src="<?php echo $img; ?>" alt="">
                            </div>
                    <?php else: ?>
                            <div class="carousel-item">
                                <img src="<?php echo $img; ?>" alt="">
                            </div>
                    <?php endif;; $counter++;?>
                    
                <?php endforeach; $counter = 0;?>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- /*=============================================
                      MAIN CONTENT
    =============================================*/ -->
    <div class="container-fluid">
        <div class="main-content">
        <?php $secciones = get_post_meta(get_the_ID(), 'alava_homepage_group', true); ?>

        <?php foreach($secciones as $sec): ?>
            <div class="main-items">
                <div class="cont-relative">
                    <img src="<?php echo $sec['imagen_seccion']?>" alt="">
                    <a href="<?php echo get_permalink(get_page_by_title($sec['titulo_seccion'])); ?>">
                        <h3><?php echo $sec['titulo_seccion']?></h3>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <!-- /*=============================================
                        Fotos
    =============================================*/ -->
    <div class="container-fluid container-principal-fotos">
        <h3 class="main-title">fotos</h3>
        
        <?php $imgs = get_post_meta(get_the_ID(), 'alava_homepage_fotos', true);
            
            // Funcion que Dibuja una galeria de imagenes.
            echo alava_group_images($imgs,'home');
        ?>
        
    </div>

    <!-- /*=============================================
                        Contacto
    =============================================*/ -->

    <div class="container-fluid container-contacto">
        <h3 class="main-title">contacto</h3>
        <?php 
            $contacto = new WP_Query('pagename=contacto');
            while($contacto->have_posts()):$contacto->the_post();
                get_template_part('template-parts/contacto'); 
            endwhile; wp_reset_postdata(); 
        ?>
        <?php  ?>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>