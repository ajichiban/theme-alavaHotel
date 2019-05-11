<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php  wp_head();   ?>
    <!-- <title>Alava</title> -->
</head>

<body <?php  body_class();   ?> >
    <span page="index"></span>
    <div class="header-container">
        <nav class="barra-navegacion fixed">
            <a href="#">
                <div class="boton-home">
                    <!-- <img src="./img/logo.png" alt=""> -->
                </div>
            </a>

            <div class="mobile-book-now">
                <h4>Reservar</h4>
            </div>

            <div class="menu-mobile" id="menu-mobile">
                <i class="fas fa-bars"></i>
            </div>

            <?php  
                $args = array(
                    /* 'menu_class'=>'nav nav-justified flex-column flex-md-row text-center text-uppercase',
                    'container_id'=> 'nav_principal',
                    'container_class'=>'collapse navbar-collapse justify-content-center justify-content-lg-end', */
                    'theme_location'=> 'menu_principal',
                    'container' => 'ul'
                );

                wp_nav_menu($args);
            ?>

            <div class="instagram-mas">
                <div class="container-mas d-flex justify-content-between">
                    <div class="d-flex justify-content-end align-center flex-grow-1">
                        <span class="es">EN</span>
                        <a href="https://www.instagram.com/alavasuites/?hl=es" target="_blank">
                            <span class="typcn typcn-social-instagram"></span>
                            <!-- <i class="fab fa-instagram"></i> -->
                        </a>
                    </div>

                    <h4>reservar</h4>
                </div>
                <span class="adult">Adult Only</span>
            </div>
        </nav>