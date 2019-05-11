<?php  
    /*
    *   Importacion de Includes
    */
    /* --- Custom fields --- */
    require_once dirname(__FILE__) . '/inc/custom-fields.php';
    /* --- Utilies --- */
    require_once dirname(__FILE__) . '/inc/utilies.php';


    /*
    *   Funciones que se cargan al Activar el Theme
    */

    add_action('after_setup_theme' , 'alava_setup' );
    function alava_setup()
    {
        /* --- Agregar tamaños de imagenes Personalizados --- */
        /* add_image_size('mediano', 510, 340, true);
        add_image_size('cuadrada_mediana', 350, 350, true); */

        /* --- Agrega soporte a imagen destacada --- */
        add_theme_support('post-thumbnails');

        /* --- Agrega soporte para los titulos mejorando el seo --- */
        add_theme_support('title-tag');

        /* --- Agrega un Logo personlizado --- */
        /* add_theme_support('custom-logo'); */

        /* --- Menu de Navegacion --- */
        register_nav_menus(array(
            'menu_principal'=> esc_html__('Menu Principal', 'alavahotel')
        ));
    }

    /* --- --- Agregar estilos a <a> del Menu--- --- */
    /* function cooks_enlace_class($atts, $item, $args)
    {
        if($args->theme_location == 'menu_principal'){
            $atts['class'] = 'menu-items';
        }
        return $atts;
    }
    add_filter('nav_menu_link_attributes' , 'cooks_enlace_class' , 10, 3); */

    /* --- --- Agregar estilos a <li> del Menu--- --- */
    function alava_class_to_li($classes, $item, $args) {
        if($args->theme_location == 'menu_principal') {
          $classes[] = 'menu-items';
        }
        return $classes;
      }
      add_filter('nav_menu_css_class', 'alava_class_to_li', 1, 3);
    
    /*
    *   Carga los Script y Css del theme
    */
    add_action('wp_enqueue_scripts', 'alava_scripts');
    function alava_scripts()
    {
        /* --- --- Styles --- --- */
        /* wp_enqueue_style('all-style-bundle', get_template_directory_uri() . 'style.css', false , '1.0.0'); */

        /* wp_enqueue_style('FontAwesome', get_template_directory_uri() . '/css/all.css', false, '5.0.0'); */

        wp_enqueue_style('Bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '4.0.0');

        wp_enqueue_style('myFonts', get_template_directory_uri() . '/css/myFonts.css', false, '1.0.0');

        wp_enqueue_style('typicons', get_template_directory_uri() . '/css/typicons.min.css', false, '1.0.0');

        wp_enqueue_style('App-css',  get_template_directory_uri() . '/css/app.css', array('Bootstrap','myFonts','typicons'), '1.0.0' );

        /* --- --- Scripts --- --- */

        // necesita cargar en el header
        wp_enqueue_script('Fontawesome-js', get_template_directory_uri() . '/js/all.js' , false, '5.0.');

        /* wp_enqueue_script('jquery'); */
        wp_enqueue_script('JQ', get_template_directory_uri() . '/js/jquery-3.3.1.js' , false, '3.3', true);

        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' , array('JQ'), '1.0.', true);

        wp_enqueue_script('ImagesLoaded-js', get_template_directory_uri() . '/js/imagesloaded.min.js' , array('jquery'), '1.0.',true);

        wp_enqueue_script('Masonry-js', get_template_directory_uri() . '/js/masonry.pkgd.min.js' , array('jquery', 'ImagesLoaded-js'), '1.0.',true);

        wp_enqueue_script('App-js', get_template_directory_uri() . '/js/app.js' , array('JQ','ImagesLoaded-js','Masonry-js'), '1.0.0', true);

        wp_enqueue_script('modal-js', get_template_directory_uri() . '/js/bundle.js' , array('jquery'), '1.0.0', true);


    }

