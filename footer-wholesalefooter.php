            <div class="Wfooter">
                <div class="WfooterLogo">
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
                    <p>The best selling T-shirts</p>
                </div>
                <div class="WfooterDetails">
                    <h1>
                    contact
                    </h1>
                    <p>address1</p>
                    <p>address2</p>
                    <p>address3</p>
                    <p>address4</p>
                    <p>email</p>
                    <p>telephone</p>
                </div>

            </div>        
    <?php wp_footer(); ?>
    </body>
</html>
