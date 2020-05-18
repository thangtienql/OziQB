<?php 
	require_once get_template_directory() . './class-wp-bootstrap-navwalker.php';
	add_theme_support( 'post-thumbnails');
	add_image_size( 'custom-size', 168.33, 70);
	add_image_size( '70x70', 70, 70);


	function register_my_menu(){
		register_nav_menu('header-menu', __('Main Menu'));
	}
	add_action('init', 'register_my_menu');
	
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Theme options', // Title hiển thị khi truy cập vào Options page
			'menu_title'	=> 'Theme options', // Tên menu hiển thị ở khu vực admin
			'menu_slug' 	=> 'theme-settings', // Url hiển thị trên đường dẫn của options page
			'capability'	=> 'edit_posts',
			'redirect'	=> false
		));
	}
?>