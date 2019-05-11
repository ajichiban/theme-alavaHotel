<?php  

    function alava_group_images($imgs, $type)
    {
        $test = [];
        foreach($imgs as $im){ $test[]= $im;}
    ?>
        <?php if($type != 'home'): ?>
            <div class="servicio-galeria">
                <div><img src="<?= $test[0]; ?>" alt=""></div>
                <div><img src="<?= $test[1]; ?>" alt=""></div>
                <div class="box-dividida">
                    <div>
                        <img src="<?= $test[2]; ?>" alt="">
                    </div>
                    <div>
                        <img src="<?= $test[3]; ?>" alt="">
                    </div>
                </div>
                <div><img src="<?= $test[4]; ?>" alt=""></div>
            </div>
        <?php else: ?>
            <div class="container-fotos row">
                <div class="foto col-12 col-md-3">
                    <a href="<?php echo get_permalink(get_page_by_title('fotos')); ?>">
                        <img src="<?= $test[0]; ?>" alt="">
                    </a>
                </div>
                <div class="foto col-12 col-md-3">
                    <a href="<?php echo get_permalink(get_page_by_title('fotos')); ?>">
                        <img src="<?= $test[1]; ?>" alt="">
                    </a>
                </div>
                <div class="foto-dividida col-12 col-md-3">
                    <div class="foto-primera">
                        <a href="<?php echo get_permalink(get_page_by_title('fotos')); ?>">
                            <img src="<?= $test[2]; ?>" alt="">
                        </a>
                    </div>
                    <div class="foto-segunda">
                        <a href="<?php echo get_permalink(get_page_by_title('fotos')); ?>">
                            <img src="<?= $test[3]; ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="foto col-12 col-md-3">
                    <a href="<?php echo get_permalink(get_page_by_title('fotos')); ?>">
                        <img src="<?= $test[4]; ?>" alt="">
                    </a>
                </div>
            </div> 
        <?php endif; ?>

<?php } 