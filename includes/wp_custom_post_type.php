<?php

function portafolio() {

    $labels = array(
        'name'                  => _x( 'Portafolios', 'Post Type General Name', 'twm' ),
        'singular_name'         => _x( 'Portafolio', 'Post Type Singular Name', 'twm' ),
        'menu_name'             => __( 'Portafolio', 'twm' ),
        'name_admin_bar'        => __( 'Portafolio', 'twm' ),
        'archives'              => __( 'Archivo de Portafolio', 'twm' ),
        'attributes'            => __( 'Atributos de Portafolio', 'twm' ),
        'parent_item_colon'     => __( 'Portafolio Padre:', 'twm' ),
        'all_items'             => __( 'Todos los Items', 'twm' ),
        'add_new_item'          => __( 'Agregar Nuevo Item', 'twm' ),
        'add_new'               => __( 'Agregar Nuevo', 'twm' ),
        'new_item'              => __( 'Nuevo Item', 'twm' ),
        'edit_item'             => __( 'Editar Item', 'twm' ),
        'update_item'           => __( 'Actualizar Item', 'twm' ),
        'view_item'             => __( 'Ver Item', 'twm' ),
        'view_items'            => __( 'Ver Portafolio', 'twm' ),
        'search_items'          => __( 'Buscar en Portafolio', 'twm' ),
        'not_found'             => __( 'No hay Resultados', 'twm' ),
        'not_found_in_trash'    => __( 'No hay Resultados en la Papelera', 'twm' ),
        'featured_image'        => __( 'Imagen Destacada', 'twm' ),
        'set_featured_image'    => __( 'Colocar Imagen Destacada', 'twm' ),
        'remove_featured_image' => __( 'Remover Imagen Destacada', 'twm' ),
        'use_featured_image'    => __( 'Usar como Imagen Destacada', 'twm' ),
        'insert_into_item'      => __( 'Insertar dentro de Item', 'twm' ),
        'uploaded_to_this_item' => __( 'Cargado a este item', 'twm' ),
        'items_list'            => __( 'Listado del Portafolio', 'twm' ),
        'items_list_navigation' => __( 'Navegación de Listado del Portafolio', 'twm' ),
        'filter_items_list'     => __( 'Filtro de Listado del Portafolio', 'twm' ),
    );
    $args = array(
        'label'                 => __( 'Portafolio', 'twm' ),
        'description'           => __( 'Portafolio de Desarrollos', 'twm' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'custom-fields', ),
        'taxonomies'            => array( 'custom_portafolio' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-testimonial',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'portafolio', $args );

}
add_action( 'init', 'portafolio', 0 );
