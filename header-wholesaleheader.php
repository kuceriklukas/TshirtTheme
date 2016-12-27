<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body>
        
            
            <div class="bodyWrap">
                
                <div class="header">
                    <?php
                        $imagesUrl = get_template_directory_uri() . "/images/"; 
                        $imageWholesaleLogo = "";

                        if (@getimagesize($imagesUrl . "wholesale-logo.jpg")) {
                            $imageWholesaleLogo = $imagesUrl . "wholesale-logo.jpg";
                        }  
                        else if (@getimagesize($imagesUrl . "wholesale-logo.png")) {
                            $imageWholesaleLogo = $imagesUrl . "wholesale-logo.png";
                        }
                        else {
                            $imageWholesaleLogo = $imagesUrl . "wholesale-logo-default.jpg";
                        }

                    ?>
                    <img src="<?php echo $imageWholesaleLogo; ?>"> 
                    <?php wp_nav_menu(array('theme_location'=>'wholesale')); ?>
                </div>
