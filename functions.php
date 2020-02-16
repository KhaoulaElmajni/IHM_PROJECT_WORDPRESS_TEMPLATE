<?php 
add_theme_support('post-thumbnails');


function enregistre_mon_menu(){
	register_nav_menu('menu_principal',__('Menu Principal'));

}
add_action('init','enregistre_mon_menu');