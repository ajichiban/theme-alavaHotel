<?php  

/*=============================================
				  Home
=============================================*/
add_action( 'cmb2_admin_init', 'alava_campos_homepage' );
function alava_campos_homepage() {
    $prefix = 'alava_homepage_';
    
    $id_home = get_option('page_on_front');

	$alava_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'Campos Homepage', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_in_rest' => WP_REST_Server::READABLE,
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

    /* --- --- Slider --- --- */
	$alava_campos_homepage->add_field( array(
		'name'        => esc_html__( 'Slider de imagenes', 'cmb2' ),
		'description' => esc_html__( 'Añada las fotos para el Slider', 'cmb2' ),
		'id'          => $prefix . 'slider',
		'type'        => 'file_list',
		'preview_size' => array(100, 100)
	) );

	/* --- --- Clusters --- --- */
	$group_field_id = $alava_campos_homepage->add_field( array(
		'id'          => $prefix . 'group',
		'type'        => 'group',
		'description' => esc_html__( 'Secciones Principales del Sitio', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Seccion {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar Otra Seccion', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar Seccion', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$alava_campos_homepage->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Titulo de la Seccion', 'cmb2' ),
		'description' => esc_html__( 'Agrega el Titulo de la Seccion', 'cmb2' ),
		'id'         => 'titulo_seccion',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$alava_campos_homepage->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Agrega una Imagen para la Seccion', 'cmb2' ),
		'id'   => 'imagen_seccion',
		'type' => 'file',
	) );

	/* --- --- Fotos--- --- */
	$alava_campos_homepage->add_field( array(
		'name'        => esc_html__( 'Fotos para Pagina de Inicio', 'cmb2' ),
		'id'          => $prefix . 'info',
		'type'        => 'title'
	) );
	$alava_campos_homepage->add_field( array(
		'name'        => esc_html__( 'Seccion de Fotos', 'cmb2' ),
		'description' => esc_html__( 'Añada las fotos para la seccion de Fotos, tengan en cuanta que solo se visulizaran las 5 primeras, asi que evite poner mas de 5', 'cmb2' ),
		'id'          => $prefix . 'fotos',
		'type'        => 'file_list',
		'preview_size' => array(100, 100)
	) );
}

/*=============================================
 				Page Contacto 
=============================================*/	

add_action( 'cmb2_admin_init', 'alava_campos_contacto' );
function alava_campos_contacto() {
    $prefix = 'alava_contacto_';
    
    $id_contacto = get_page_by_title('contacto')->ID ;

	$alava_campos_contacto = new_cmb2_box( array(
		'id'           => $prefix . 'contacto',
		'title'        => esc_html__( 'Campos contacto', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_contacto ),
		), // Specific post IDs to display this metabox
	) );

	$alava_campos_contacto->add_field( array(
		'name'        => esc_html__( 'Direccion :', 'cmb2' ),
		'description' => esc_html__( 'Añada la direccion del hotel', 'cmb2' ),
		'id'          => $prefix . 'direccion',
		'type' => 'wysiwyg',
        'options'=> array(
            'textarea_rows'=> 5,
		)
		
	) );

	$alava_campos_contacto->add_field( array(
		'name'        => esc_html__( 'Horarios :', 'cmb2' ),
		'description' => esc_html__( 'Añada el horario', 'cmb2' ),
		'id'          => $prefix . 'horarios',
		'type' => 'wysiwyg',
        'options'=> array(
            'textarea_rows'=> 5,
        )
	) );

	$alava_campos_contacto->add_field( array(
		'name'        => esc_html__( 'Email :', 'cmb2' ),
		'description' => esc_html__( 'Añada un Correo electronico', 'cmb2' ),
		'id'          => $prefix . 'email',
		'type' => 'text',
	) );
	/* --- --- Telefono --- --- */

	$group_field_id = $alava_campos_contacto->add_field( array(
		'id'          => $prefix . 'group',
		'type'        => 'group', 
		'description' => esc_html__( 'Telefono de Contacto', 'cmb2' ),
	) );

	$alava_campos_contacto->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Codido del Pais', 'cmb2' ),
		'description' => esc_html__( 'ejemplo : +58 para venezuela', 'cmb2' ),
		'id'   => 'codigo_tel',
		'type' => 'text',
	) );
	$alava_campos_contacto->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Telefono', 'cmb2' ),
		'description' => esc_html__( 'Añada un numero telefonico', 'cmb2' ),
		'id'   => 'numero_tel',
		'type' => 'text',
	) );

	/* --- --- Redes sociales --- --- */
	/* $alava_campos_contacto->add_field( array(
		'name'        => esc_html__( 'Telefono :', 'cmb2' ),
		'description' => esc_html__( 'Añada un Telefono', 'cmb2' ),
		'id'          => $prefix . 'telefono',
		'type' => 'text',
	) ); */

	$alava_campos_contacto->add_field( array(
		'name'        => esc_html__( 'Instagram :', 'cmb2' ),
		'description' => esc_html__( 'Añada la direccion de su instagram', 'cmb2' ),
		'id'          => $prefix . 'instagram',
		'type' => 'text',
	) );

}