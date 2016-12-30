            <div class="Wfooter">
                    <p>
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
                        <img src="<?php echo $imageWholesaleLogo; ?>" />
                    </p>
                    <p><?php bloginfo("name"); ?> <?php bloginfo("version"); ?></p>
                    <p><?php bloginfo("description"); ?></p>
                    <p>© Copyright 2016. All Rights Reserved.</p>
            </div>        
    <?php wp_footer(); ?>
    </body>
</html>
