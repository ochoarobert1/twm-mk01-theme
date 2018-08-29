<?php

/* --------------------------------------------------------------
    AGREGAR CUSTOM POST TYPE PARA LOS CASOS DE EXITO
-------------------------------------------------------------- */
function twm_cpt_casos_exitos() {

    $labels = array(
        'name'                  => _x( 'Casos', 'Post Type General Name', 'twm' ),
        'singular_name'         => _x( 'Caso', 'Post Type Singular Name', 'twm' ),
        'menu_name'             => __( 'Casos de Éxito', 'twm' ),
        'name_admin_bar'        => __( 'Casos de Éxito', 'twm' ),
        'archives'              => __( 'Archivos de Casos', 'twm' ),
        'attributes'            => __( 'Atributo de Casos', 'twm' ),
        'parent_item_colon'     => __( 'Caso Padre:', 'twm' ),
        'all_items'             => __( 'Todos los Casos', 'twm' ),
        'add_new_item'          => __( 'Agregar Nuevo Caso', 'twm' ),
        'add_new'               => __( 'Agregar Nuevo', 'twm' ),
        'new_item'              => __( 'Nuevo Caso', 'twm' ),
        'edit_item'             => __( 'Editar Caso', 'twm' ),
        'update_item'           => __( 'Actualizar Caso', 'twm' ),
        'view_item'             => __( 'Ver Caso', 'twm' ),
        'view_items'            => __( 'Ver Casos', 'twm' ),
        'search_items'          => __( 'Buscar Casos', 'twm' ),
        'not_found'             => __( 'No hay resultados', 'twm' ),
        'not_found_in_trash'    => __( 'No hay resultados en la Papelera', 'twm' ),
        'featured_image'        => __( 'Imagen Destacada', 'twm' ),
        'set_featured_image'    => __( 'Colocar Imagen Destacada', 'twm' ),
        'remove_featured_image' => __( 'Remover Imagen Destacada', 'twm' ),
        'use_featured_image'    => __( 'Usar como Imagen Destacada', 'twm' ),
        'insert_into_item'      => __( 'Insertar en Caso de Éxito', 'twm' ),
        'uploaded_to_this_item' => __( 'Cargado a este Caso', 'twm' ),
        'items_list'            => __( 'Listado de Casos', 'twm' ),
        'items_list_navigation' => __( 'Navegación del Listado de Casos', 'twm' ),
        'filter_items_list'     => __( 'Filtro del Listado de Casos', 'twm' ),
    );
    $args = array(
        'label'                 => __( 'Caso', 'twm' ),
        'description'           => __( 'Casos de Éxito', 'twm' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-format-chat',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'casos', $args );

}
add_action( 'init', 'twm_cpt_casos_exitos', 0 );
