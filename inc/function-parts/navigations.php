<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
register_nav_menus( array(
    'primary' => 'Основное',
    'secondary' => 'Вторичное',
));
function yy_primary_menu(){
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_id'=> 'primary-menu',
        'menu_class'=> 'navbar-nav d-flex gap-4'
    ));
}