<?php
	function shirtTheme_enqueue_scripts(){
	
	if(basename(get_page_template()) == "splashTemplate.php"){
		wp_enqueue_style( 'customstyle', get_template_directory_uri() . "/css/splash.css", array(), "all");
	}
	else{
		wp_enqueue_style( 'customstyle', get_template_directory_uri() . "/css/retail.css", array(), "all");
}		
}
add_action("wp_enqueue_scripts", "shirtTheme_enqueue_scripts");
?>


