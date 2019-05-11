<?php get_header() ?>
</div> <!-- cierre del nav -->

    <?php while(have_posts()): the_post(); ?>
    <?php $galeria = get_post_meta(get_the_ID(), 'alava_fotos_galeria', $single);
    ?>

    <div class="container-fluid container-galeria">
        <div class="grid">
            <?php foreach($galeria as $img): ?>
        
                <div class="grid-item grid-sizer"><img src="<?= $img?>" alt=""></div>
            <?php endforeach; ?>
        
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer() ?>