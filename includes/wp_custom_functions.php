<?php
/** FUNCION PARA COLOCAR TIEMPO EN ENTRADAS **/
function twm_time_ago() {
    global $post;
    $date = get_post_time('G', true, $post);
    $chunks = array(
        array( 60 * 60 * 24 * 365 , __( 'año', 'twm' ), __( 'años', 'twm' ) ),
        array( 60 * 60 * 24 * 30 , __( 'mes', 'twm' ), __( 'meses', 'twm' ) ),
        array( 60 * 60 * 24 * 7, __( 'semana', 'twm' ), __( 'semanas', 'twm' ) ),
        array( 60 * 60 * 24 , __( 'dia', 'twm' ), __( 'dias', 'twm' ) ),
        array( 60 * 60 , __( 'hora', 'twm' ), __( 'horas', 'twm' ) ),
        array( 60 , __( 'minuto', 'twm' ), __( 'minutos', 'twm' ) ),
        array( 1, __( 'segundo', 'twm' ), __( 'segundos', 'twm' ) )
    );
    if ( !is_numeric( $date ) ) {
        $time_chunks = explode( ':', str_replace( ' ', ':', $date ) );
        $date_chunks = explode( '-', str_replace( ' ', '-', $date ) );
        $date = gmmktime( (int)$time_chunks[1], (int)$time_chunks[2], (int)$time_chunks[3], (int)$date_chunks[1], (int)$date_chunks[2], (int)$date_chunks[0] );
    }
    $current_time = current_time( 'mysql', $gmt = 0 );
    $newer_date = time( );
    $since = $newer_date - $date;
    if ( 0 > $since )
        return __(  ' un momento', 'twm' );
    for ( $i = 0, $j = count($chunks); $i < $j; $i++) {
        $seconds = $chunks[$i][0];
        if ( ( $count = floor($since / $seconds) ) != 0 )
            break;
    }
    $output = ( 1 == $count ) ? '1 '. $chunks[$i][1] : $count . ' ' . $chunks[$i][2];
    if ( !(int)trim($output) ){
        $output = '0 ' . __( 'segundos', 'twm' );
    }
    return $output;
}

/* CUSTOM EXCERPT */
function get_excerpt($count){
    $foto = 0;
    $permalink = get_permalink($post->ID);
    $category = get_taxonomies($post->ID);
    $excerpt = get_the_excerpt($post->ID);
    if ($excerpt == ""){
        $excerpt = get_the_content($post->ID);
    }
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt.'... <a class="plus" href="'.$permalink.'">+</a>';
    return $excerpt;
}

/* IMAGES RESPONSIVE ON ATTACHMENT IMAGES */
function image_tag_class($class) {
    $class .= ' img-fluid';
    return $class;
}
add_filter('get_image_tag_class', 'image_tag_class' );

/* ADD CONTENT WIDTH FUNCTION */

if ( ! isset( $content_width ) ) $content_width = 1170;

