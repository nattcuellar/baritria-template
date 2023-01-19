<?php
	add_theme_support( 'post-thumbnails' ); 
	function sh_the_content_by_id( $post_id=0, $more_link_text = null, $stripteaser = false ){
	    global $post;
	    $post = &get_post($post_id);
	    setup_postdata( $post, $more_link_text, $stripteaser );
	    the_content();
	    wp_reset_postdata( $post );
	}
	add_filter( 'woocommerce_checkout_fields' , 'custom_wc_checkout_fields' );
	function custom_wc_checkout_fields( $fields ) {
		unset($fields['billing']['billing_company']);
		return $fields;
	}
	// acortar descripcion
	function custom_excerpt_length( $length ) {
	   return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	//cf a header y footer
	if(function_exists('acf_add_options_page')){
		acf_add_options_page();
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Index',
			'parent_slug'	=> 'theme-general-settings',
		));
	}
	//crear cp propiedades
	function custom_doctores()
	{
	    $labels = array(
	        'name' => _x('Doctores', 'post type general name'),
	        'singular_name' => _x('Doctores', 'post type singular name'),
	        'add_new' => _x('Agregar doctor', 'Doctores'),
	        'add_new_item' => __('Agregar nuevo doctor'),
	        'edit_item' => __('Editar doctor'),
	        'new_item' => __('Nueva doctor'),
	        'all_items' => __('Todos los Doctores'),
	        'view_item' => __('Ver Doctores'),
	        'search_items' => __('Buscar Doctores'),
	        'not_found' =>  __('No se han encontrado Doctores'),
	        'not_found_in_trash' => __('No hay Doctores en la papelera'),
	        'parent_item_colon' => '',
	        'menu_name' => 'Doctores'
	    );

	    $args = array(
	        'labels' => $labels,
	        'public' => true,
	        'publicly_queryable' => true,
	        'show_ui' => true,
	        'show_in_menu' => true,
	        'query_var' => true,
	        'rewrite' => true,
	        'capability_type' => 'post',
	        'has_archive' => true,
	        'hierarchical' => false,
	        'menu_position' => null,
	        'supports' => array('title', 'thumbnail' ,'editor')
	    );

	    register_post_type('doctores_',$args);
	}
	add_action('init', 'custom_doctores');
	
	// taxonomy tipo propiedad
	function tipo_propiedad() {
	    $labels = array(
	    "name" => _x( "Tipo", "Taxonomy General Name", "text_domain" ),
	    "singular_name" => _x( "Tipo", "Taxonomy Singular Name", "text_domain" ),
	    "menu_name" => __( "Tipo", "text_domain" ),
	    "all_items" => __( "Todas los tipos de propiedades", "text_domain" ),
	    "parent_item" => __( "Tipo de propiedad", "text_domain" ),
	    "parent_item_colon" => __( "Tipo de propiedad:", "text_domain" ),
	    "new_item_name" => __( "Nombre Nuevo tipo propiedad", "text_domain" ),
	    "add_new_item" => __( "Añadir nuevo tipo de propiedad", "text_domain" ),
	    "edit_item" => __( "Editar tipo de propiedad", "text_domain" ),
	    "update_item" => __( "Actualizar tipo de propiedad", "text_domain" ),
	    "separate_items_with_commas" => __( "Separa los tipo de propiedad con comas", "text_domain" ),
	    "search_items" => __( "Buscar tipo de propiedad", "text_domain" ),
	    "add_or_remove_items" => __( "Añadir o borrar tipo de propiedad", "text_domain" ),
	    "choose_from_most_used" => __( "Elegir entre los tipo de propiedad más utilizadas", "text_domain" ),
	    "not_found" => __( "No se encuentra", "text_domain" ),
	    );
	    $rewrite = array(
	    "slug" => "tipo",
	    "with_front" => true,
	    "hierarchical" => true,
	    );
	    $args = array(
	    "labels" => $labels,
	    "hierarchical" => true,
	    "public" => true,
	    "show_ui" => true,
	    "show_admin_column" => true,
	    "show_in_nav_menus" => true,
	    "show_tagcloud" => true,
	    "rewrite" => $rewrite,
	    );
	    register_taxonomy( "Tipo", array( "propiedades" ), $args );
	}
	add_action( "init", "tipo_propiedad", 0 );
	// taxonomy zona
	function zona() {
	    $labels = array(
	    "name" => _x( "zona", "Taxonomy General Name", "text_domain" ),
	    "singular_name" => _x( "zona", "Taxonomy Singular Name", "text_domain" ),
	    "menu_name" => __( "zona", "text_domain" ),
	    "all_items" => __( "Todas las zona", "text_domain" ),
	    "parent_item" => __( "zona", "text_domain" ),
	    "parent_item_colon" => __( "zona:", "text_domain" ),
	    "new_item_name" => __( "Nombre Nuevo tipo zona", "text_domain" ),
	    "add_new_item" => __( "Añadir nuevo tipo de zona", "text_domain" ),
	    "edit_item" => __( "Editar tipo de zona", "text_domain" ),
	    "update_item" => __( "Actualizar tipo de zona", "text_domain" ),
	    "separate_items_with_commas" => __( "Separa los tipo de zona con comas", "text_domain" ),
	    "search_items" => __( "Buscar tipo de zona", "text_domain" ),
	    "add_or_remove_items" => __( "Añadir o borrar tipo de zona", "text_domain" ),
	    "choose_from_most_used" => __( "Elegir entre los tipo de zona más utilizadas", "text_domain" ),
	    "not_found" => __( "No se encuentra", "text_domain" ),
	    );
	    $rewrite = array(
	    "slug" => "zona",
	    "with_front" => true,
	    "hierarchical" => true,
	    );
	    $args = array(
	    "labels" => $labels,
	    "hierarchical" => true,
	    "public" => true,
	    "show_ui" => true,
	    "show_admin_column" => true,
	    "show_in_nav_menus" => true,
	    "show_tagcloud" => true,
	    "rewrite" => $rewrite,
	    );
	    register_taxonomy( "zona", array( "propiedades" ), $args );
	}
	add_action( "init", "zona", 0 );
	//custom post Contenido de propiedad
	
	//crear cp propiedades
	function custom_clinicas()
	{
	    $labels = array(
	        'name' => _x('Clínicas', 'post type general name'),
	        'singular_name' => _x('Clínicas', 'post type singular name'),
	        'add_new' => _x('Agregar Clínicas', 'Clínicas'),
	        'add_new_item' => __('Agregar nueva Clínica'),
	        'edit_item' => __('Editar Clínica'),
	        'new_item' => __('Nueva Clínica'),
	        'all_items' => __('Todas las Clínicas'),
	        'view_item' => __('Ver Clínicas'),
	        'search_items' => __('Buscar Clínica'),
	        'not_found' =>  __('No se han encontrado Clínicas'),
	        'not_found_in_trash' => __('No hay Clínicas en la papelera'),
	        'parent_item_colon' => '',
	        'menu_name' => 'Clínicas'
	    );

	    $args = array(
	        'labels' => $labels,
	        'public' => true,
	        'publicly_queryable' => true,
	        'show_ui' => true,
	        'show_in_menu' => true,
	        'query_var' => true,
	        'rewrite' => true,
	        'capability_type' => 'post',
	        'has_archive' => true,
	        'hierarchical' => false,
	        'menu_position' => null,
	        'supports' => array('title', 'thumbnail' ,'editor')
	    );

	    register_post_type('clinicas_',$args);
	}
	add_action('init', 'custom_clinicas');

	//sesiones

	function register_my_session()
	{
	  if( !session_id() )
	  {
	    session_start();
	  }
	}

	add_action('init', 'register_my_session');
	//agregar datos a usuario
	function modify_contact_methods($profile_fields) {
	    // Add new fields
	    $profile_fields['agencia'] = 'agencia';
	    $profile_fields['url_imagen'] = 'Url imagen';
	    return $profile_fields;
	}
	add_filter('user_contactmethods', 'modify_contact_methods');

?>