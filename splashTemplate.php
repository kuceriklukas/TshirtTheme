<?php
/*
    Template Name: Splash Template 
*/

?>
<?php
	get_header('retailhome');
?>
    <body class="splashBody">  
        <div class="splashIt">
            <?php
                $imagesUrl = get_template_directory_uri() . "/images/"; 
                $imageLeftUrl = "";
                $imageRightUrl = "";
                if (@getimagesize($imagesUrl . "splash-left.jpg")) {
                    $imageLeftUrl = $imagesUrl . "splash-left.jpg";
                }  
                else if (@getimagesize($imagesUrl . "splash-left.png")) {
                    $imageLeftUrl = $imagesUrl . "splash-left.png";
                }
                else {
                    $imageLeftUrl = $imagesUrl . "splash-left-default.jpg";
                }

                if (@getimagesize($imagesUrl . "splash-right.jpg")) {
                    $imageRightUrl = $imagesUrl . "splash-right.jpg";
                }
                else if (@getimagesize($imagesUrl . "splash-right.png")) {
                    $imageRightUrl = $imagesUrl . "splash-right.png";
                }
                else {
                    $imageRightUrl = $imagesUrl . "splash-right-default.jpg";
                }

                $menu_name = 'splashpage';
                $locations = get_nav_menu_locations();
                $menu_id = $locations[ $menu_name ] ;
                $menu = wp_get_nav_menu_object($menu_id);

                $menu_items = wp_get_nav_menu_items($menu);
            ?>
            
            <a href="<?php echo $menu_items[0] -> url; ?>" style="background: url('<?php echo $imageLeftUrl; ?>'); background-size: 100% 100%;"></a>
            <a href="<?php echo $menu_items[1] -> url; ?>" style="background: url('<?php echo $imageRightUrl; ?>'); background-size: 100% 100%;"></a>
         </div>
	<?php
		get_footer('retailnofooter');
	?>

