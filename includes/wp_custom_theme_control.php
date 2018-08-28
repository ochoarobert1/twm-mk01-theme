<?php
/* --------------------------------------------------------------
CUSTOM AREA FOR OPTIONS DATA - twm
-------------------------------------------------------------- */

/* CUSTOM MENU PAGE AND FUNCTIONS IN ADMIN */
function register_twm_settings() {
    //register our settings
    register_setting( 'twm-settings-group', 'twm_dir' );
    register_setting( 'twm-settings-group', 'twm_email' );
    register_setting( 'twm-settings-group', 'twm_telf' );
    register_setting( 'twm-settings-group', 'twm_mob' );
    register_setting( 'twm-settings-group', 'twm_fb' );
    register_setting( 'twm-settings-group', 'twm_tw' );
    register_setting( 'twm-settings-group', 'twm_ig' );
    register_setting( 'twm-settings-group', 'twm_yt' );
}

function my_admin_menu() {
    add_menu_page( 'Opciones del Sitio', 'Opciones del Sitio', 'manage_options', 'twm_custom_options', 'my_custom_menu_page', get_template_directory_uri() . '/images/plugin-icon.png', 120  );
    /* call register settings function */
    add_action( 'admin_init', 'register_twm_settings' );
}

add_action( 'admin_menu', 'my_admin_menu' );



/* CUSTOM CSS FOR THIS SECTION */
function load_custom_wp_admin_style($hook) {
    if( $hook != 'toplevel_page_twm_custom_options' ) {
        return;
    }
    /* ENQUEUE THE CSS */
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' );
    wp_enqueue_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/custom-wordpress-admin-style.css' );
}

add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

/* SEPARATOR FOR STYLING THE CUSTOM PAGE */
function add_admin_menu_separator( $position ) {

    global $menu;

    $menu[ $position ] = array(
        0    =>    '',
        1    =>    'read',
        2    =>    'separator' . $position,
        3    =>    '',
        4    =>    'wp-menu-separator'
    );

}

function set_admin_menu_separator() {  do_action( 'admin_init', 119 );  }

add_action( 'admin_init', 'add_admin_menu_separator' );
add_action( 'admin_menu', 'set_admin_menu_separator' );

/* CUSTOM MENU PAGE CONTENT */
function my_custom_menu_page() { ?>

<div class="twm_custom_options-header">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="<?php echo get_bloginfo('name'); ?>" class="logo-header" />
    <h1><?php echo get_admin_page_title(); ?></h1>
    <div class="custom-clearfix"></div>
</div>
<div class="twm_custom_options-content">
    <form method="post" action="options.php">
        <?php settings_fields( 'twm-settings-group' ); ?>
        <?php do_settings_sections( 'twm-settings-group' ); ?>
        <table class="form-table">

            <tr valign="top">
                <th scope="row"><?php _e('Dirección', 'twm'); ?></th>
                <td><textarea name="twm_dir" cols="95" rows="5"><?php echo esc_attr( get_option('twm_dir') ); ?></textarea></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Correo Electrónico', 'twm'); ?></th>
                <td><input type="text" size="90" name="twm_email" value="<?php echo esc_attr( get_option('twm_email') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Teléfono', 'twm'); ?></th>
                <td><input type="text" size="90" name="twm_telf" value="<?php echo esc_attr( get_option('twm_telf') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Móvil', 'twm'); ?></th>
                <td><input type="text" size="90" name="twm_mob" value="<?php echo esc_attr( get_option('twm_mob') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row" colspan="2"><h3><?php _e('Redes Sociales', 'twm'); ?></h3></th>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Facebook', 'twm'); ?></th>
                <td><input type="text" size="90" name="twm_fb" value="<?php echo esc_attr( get_option('twm_fb') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Twitter', 'twm'); ?></th>
                <td><input type="text" size="90" name="twm_tw" value="<?php echo esc_attr( get_option('twm_tw') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Instagram', 'twm'); ?></th>
                <td><input type="text" size="90" name="twm_ig" value="<?php echo esc_attr( get_option('twm_ig') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Canal de Youtube', 'twm'); ?></th>
                <td><input type="text" size="90" name="twm_yt" value="<?php echo esc_attr( get_option('twm_yt') ); ?>" /></td>
            </tr>

        </table>
        <?php submit_button(); ?>
    </form>
</div>
<?php }
