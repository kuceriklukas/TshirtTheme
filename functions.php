<?php
	function shirtTheme_enqueue_scripts() {
	
		if (basename(get_page_template()) == "splashTemplate.php") {
			wp_enqueue_style('customstyle', get_template_directory_uri() . "/css/splash.css", array(), "all");
		}
		else {
			wp_enqueue_style('customstyle', get_template_directory_uri() . "/css/retail.css", array(), "all");
		}		
	}

	add_action('wp_enqueue_scripts', 'shirtTheme_enqueue_scripts');

	function shirtTheme_theme_setup() {
		add_theme_support('menus');

		register_nav_menu('retail' , 'The primary menu for retail section');
		register_nav_menu('wholesale' , 'The primary menu for the wholesale section');
	}

	add_action('init', 'shirtTheme_theme_setup');

?>


