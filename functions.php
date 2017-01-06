<?php
	function shirtTheme_enqueue_scripts() {

		$pageTemplate = basename(get_page_template());
		if ($pageTemplate == "wholesaleDetailTemplate.php" || 
			$pageTemplate == "wholesaleHomeTemplate.php" || 
			$pageTemplate == "wholesaleContactTemplate.php" ||
			$pageTemplate == "wholesaleAboutTemplate.php") {
			wp_enqueue_style('customstyle', get_template_directory_uri() . "/css/wholesale.css", array(), "all");
		}
		else if ($pageTemplate == "retailDetailTemplate.php" || 
				 $pageTemplate == "retailHomeTemplate.php" || 
				 $pageTemplate == "retailProductTemplate.php" ||
				 $pageTemplate == "retailContactTemplate.php" ||
				 $pageTemplate == "retailAboutTemplate.php" ) {
			wp_enqueue_style('customstyle', get_template_directory_uri() . "/css/retail.css", array(), "all");
		}
		else if ($pageTemplate == "splashTemplate.php")	{
			wp_enqueue_style('customstyle', get_template_directory_uri() . "/css/splash.css", array(), "all");
		}
	}

	add_action('wp_enqueue_scripts', 'shirtTheme_enqueue_scripts');

	function shirtTheme_theme_setup() {
		add_theme_support('menus');

		register_nav_menu('retail' , 'The primary menu for retail section');
		register_nav_menu('wholesale' , 'The primary menu for the wholesale section');
		register_nav_menu('splashpage', 'The primary menu for the index page (one link to the retail home page, the other to the wholesale home page)');
	}

	add_action('init', 'shirtTheme_theme_setup');
?>


